<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <style>
        h2{
            color:white;
            font-size:25%;
        }
    </style>
</head>
<body>
    <h2>Edit POST</h2>
    <form action="/update/{{ $post->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" value="{{ $post->title }}" name="title" id="" placeholder="author"> <br> <br>
        <input type="text"value="{{ $post->author }}"  name="author" id="" placeholder="author"> <br> <br>
        <textarea name="body" placeholder="body of post" id="body" cols="30" rows="10">"{{ $post->body }}"</textarea>
        <input type="submit" value="edit post">
    </form>
</body>
</html>