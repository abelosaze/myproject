<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All post</title>
    <style>
      body{
        background-color: grey;
      }

      h1{
        color:white;
      }

      li a{
        color:lightblue;
      }
    </style>
</head>
<body>
    <h1>All workers</h1>
    <!-- {{$posts}} -->
    @foreach ($workers as $workers)
      <li><a href="/display/{{$workers->id}}">{{$workers->name}}</a></li> <br> <br>
      <li><a href="/edit/{{$post->id}}">Edit post</a></li>
      <!-- <li><a href="/destroy/{{$post->id}}">Delete Post</a></li> -->

      <form action="/destroy/{{$post->id}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="delete post">
      </form>
      <li>{{$workers->name}}</li> <br>

      <!-- <li>{{$post->body}}</li> -->
      <small>on {{$workers->created_at}} </small>
    @endforeach
</body>
</html>