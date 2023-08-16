<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers Details</title>
</head>
<body>
    <form action="/store2" method="post">
    @csrf
       <label>Name</label><input type="text" name="name" id="name" placeholder="enter name here"> <br> <br>
       <label>Email</label><input type="text" name="email" id="email" placeholder="enter email here"> <br> <br>
       <label>Age</label> <input type="text" name="age" id="age"><br> <br>
       <label>Salary</label>  <input type="text" name="salary" id="salary" placeholder="enter salary here"><br> <br>
       <label>Address</label> <input type="text" name="address" id="address" placeholder="enter address here"><br> <br>
       <label>Contact</label>  <input type="text" name="contact" id="contact" placeholder="enter contact here">
        <input type="Submit" value="Submit">
    </form>
    
</body>
</html>