<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <link href="summernote-bs4.css" rel="stylesheet">
</head>
<body>
<form action="/updatePost/{{$post->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value={{Auth::user()->id}}>
        <br>
        <input type="file" name="image" value="image">
        <br>
        <input type="text" name="title" value="Title">
        <br>
<input type="text" name="body" value="{{$post->body}}">
        <br>
        <button type="submit" name="addPost" value="Upload"> Update</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
         $('#summernote').summernote();
            });
    </script>
</body>
</html>
