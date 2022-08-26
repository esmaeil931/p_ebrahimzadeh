
<?php
include ("connect.php");

if (isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];

// $pass=md5($pass);

// connect to database  
$mysqli = new mysqli($server, $username, $password, $db);
if ($mysqli->connect_error)
   die ("error!!!");
  
// add record to table users 
$sql="INSERT INTO users(firstName,lastName,email,mobile,address,password)
   VALUES('$fname','$lname','$email','$mobile','$addr','$pass')";  

$result=$mysqli->query($sql);
if ($result===true)
    echo 'record inserted successfull';
else
    echo 'an error occured';


} /*end if submit */

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body dir="rtl" >
<h1>فرم ثبت نام کاربر</h2>
<div class='forms'>
  <form  method="post" action="#">
    <input type="text" name="fname" placeholder="نام">
    <input type="text" name="lname" placeholder="نام خانوادگی"><br><br>
    <input type="text" name="email" placeholder="ایمیل">
    <input type="text" name="addr" placeholder="آدرس"><br><br>
    <input type="text" name="mobile" placeholder="موبایل"><br><br>
    <input type="text" name="pass" placeholder="پسورد"><br><br>
    <input type="submit" name="submit" value="ثبت">
</form>
 

</div>

<a href=index.php style=color:green> <p> منوی اصلی </p></a><br>

</body>
</html>