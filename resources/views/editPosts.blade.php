<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <input type="text" name="body" value="Post Body">
        <br>
        <button type="submit" name="addPost" value="Upload"> Update</button>
    </form>
</body>
</html>
