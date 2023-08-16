<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display workers details</title>
    
</head>
<body>
    <!-- {{ $post->title}}
{{ $post->author}}
{{ $post->body}} -->

    <h3>{{ $workers->name}}</h3>
    <h3>{{ $workers->email}}</h3>
     <h5>{{ $workers->age}} </h5>
     <h5>{{ $workers->salary}} </h5>
     <h5>{{ $workers->address}} </h5>
     <h5>{{ $workers->contact}} </h5>
</body>
</html>