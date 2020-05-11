@extends('layouts.app')

@section('content')
@guest
<div id="app">
    <about-us />
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest

@auth
<div>
    <div>
        <div>
            @if(count($errors))
                @foreach($errors->all() as $error)
                <span class="text-danger">{{$error}} </span>
                @endforeach
                @endif

            <form action="/create" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value={{Auth::user()->id}}>
                <br>
                <input type="file" name="image" value="image">
                <br>
                <input type="text" name="title" value="Title">
                <br>
                <input type="text" name="body" value="Post Body">
                <br>
                <button type="submit" name="addPost" value="Upload"> Upload</button>
            </form>
        </div>
        @foreach ($post as $posts)
        <img src="/storage/{{ $posts->image }}">
            <p>{{ $posts->title }}</p>
            <p>{{ $posts->body }}</p>
            <a href='/editPosts/{{$posts->id}}'>Edit</a><br>
            <a href='/delete/{{$posts->id}}'>Delete</a><br>
        @endforeach
    </div>
</div>
@endauth

@endsection

