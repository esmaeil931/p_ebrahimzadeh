<?php
session_start();
include ("connect.php");


// connect to database  
$mysqli = new mysqli($server, $username, $password, $db);
if ($mysqli->connect_error)
   die ("error!!!");
  
// ___________login
$show=true;
if (isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass']; 


// $pass=md5($pass);

$sql="SELECT * FROM users WHERE password='$pass' and email='$email'";
$result=$mysqli->query($sql);


if ($result->num_rows>0){
 
$row= $result->fetch_assoc();
$_SESSION['name']=$row['firstName'];
echo $_SESSION['name'];
echo ' خوش آمدید به کتابخانه آنلاین ما:';
echo" <a href='book.php' style=color:red><p>   لیست کتابها   </p></a>";
echo "<a href=index.php style=color:green> <p> منوی اصلی </p></a><br><br>";

$show=false;
   
}
else {
  echo "شما عضو نشدید;
   <a href='users.php' style=color:blue>لینک ثبت نام</a><br><br>
  ";

}
}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  dir="rtl">
  <?php  
  if ($show){
 ?>
<form action="" method="post">
    <input type="text" name="email" placeholder="ایمیل"><br>
    <input type="text" name="pass" placeholder="پسورد"><br>
    <input type="submit" name="submit" value="ورود">
</form>
<?php
  }

if ($show){
?>

<a href=index.php style=color:green> <p> منوی اصلی </p></a><br>
<?php
}
?>

</body>
</html>