<?php
include('config.php');
?>


<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form  name ="form" action="details.php" method="post">
      ID: <input type="text" name="id" placeholder="enter id"><br>
      Name: <input type="text" name="username"><br>
      Age:<input type="text" name="age" placeholder="Enter Age"><br>
      Contact:<input type="text" name="contact" placeholder="Enter Age"><br>
      Email: <input type="text" name="email" placeholder="Enter Age"><br>
      <input type="submit" name='btn'>
    </form>
    </body>
</html>