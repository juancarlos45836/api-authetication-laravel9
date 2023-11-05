<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <li>{{$post->title}}</li>
        <p>{{ $post->estracto }}</p>
        <p>{{ $post->published_at }}</p>
    @endforeach()
    {{  $posts->links() }}
</body>
</html>
