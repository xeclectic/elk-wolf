<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin view</title>
</head>
<body>
    <div>
        <div>
            <div>
                <form action="/create" method="post">
                    @csrf
                    {{-- <input type="hidden" name="id" value={{Auth::user()->id}}> --}}
                    <br>
                    <input type="text" name="title" value="Title">
                    <br>
                    <input type="text" name="body" value="Post Body">
                    <br>
                    <button type="submit" name="addPost" value="Publish"> Publish</button>
                </form>
            </div>
            @foreach ($post as $posts)
            <p>{{ $posts->title}}</p>
        </div>
    </div>


</body>
</html>
