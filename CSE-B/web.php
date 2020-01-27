<?php
include('config.php');
?>
<?php
if (isset($_POST['btn']))
{
echo "Dear,".$_POST['username']."Your details are".'<br>';
    echo $_POST['id'];
echo $_POST['username'];
echo $_POST['age'];
echo $_POST['contact'];
echo $_POST['email'];
}
else{
   echo "Welcome Guest";
}
?>
<html>
   <head>
   <title>Input Form</title>
   </head>
   <body>
   <form action="phpInput.php" method="post">
       ID:<input name="id", type="text" placeholder="Enter id"><br>
   Name: <input type="text" placeholder="Enter name" name ="username">
   <br>
   Age:<input type="text" name="age"
   placeholder="Enter age"><br>
   Contact:<input type="text" name="contact"
   placeholder="Enter contact"><br>
   email:<input type="text" name="email"
   placeholder="Enter email"<br>
   <input type="submit" name='btn'>
   </form>
   </body>
</html>