<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post creation</title>
    <style>
        form{
            background-color: grey;
            margin-left:30%;
            padding-left:20px;
            padding-top:10px;
            padding-bottom:15px;
        }

        p{
            color:white;
            font-size: 25px;
        }

        label{
            color:white;
        }
    </style>
</head>
<body>
    <form action="/store" method="post">
        @csrf
        <p>Create your Blogs here</p>
     <label>Title</label>: <input type="text" name="title" id="" placeholder="enter title here"> <br> <br>
     <label>Author</label>: <input type="text" name="author" id="" placeholder="enter author here"> <br> <br>
     <label>Body</label>: <textarea name="body" placeholder="body" id="body" cols="30" rows="10"></textarea>
        <input type="submit" value="create">
    </form>
</body>
</html>