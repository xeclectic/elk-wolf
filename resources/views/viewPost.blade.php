<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="/storage/{{ $post->image }}">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <div class="sharethis-inline-share-buttons"></div>

</body>
</html>
