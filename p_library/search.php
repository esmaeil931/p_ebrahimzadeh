<?php
include ("connect.php");

// connect to database  
$mysqli = new mysqli($server, $username, $password, $db);
if ($mysqli->connect_error)
   die ("error!!!");
 
// ____________search book
 $show=true;
 
if (isset($_POST['search'])){
    $search=$_POST['book'];
       
   $sql = "SELECT * FROM book WHERE author='$search' or namebook='$search'  ";
   $result = $mysqli->query($sql);
   
   if ($result->num_rows==0)
     echo "<p style=color:red>  این کتاب در بانک اطلاعاتی موجود نیست <p>";

   if ($result->num_rows>0){
    $row=$result->fetch_assoc();
    while ($row){
        $namebook=$row['namebook'];
        $author=$row['author'];
        $picture=$row['picture'];
        echo $namebook.' '.$author.'  '.$picture.'<br>';
        $row=$result->fetch_assoc();
    }
   }
   $show=false;
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
<body dir="rtl">
<?php
  if ($show==true){
    ?>

<div class="search">
    <h2>جستجوی کتاب بر اساس نام کتاب یا مولف<h2>
    <form action="" method="post">
        <input type="text" name="book" placeholder="جستجوی کتاب">
        <input type="submit" name="search" value="جستجو">
   </form>
 <?php
  }
  ?>
  <a href=index.php style=color:green> <p> منوی اصلی </p></a><br><br>
</body>
</html>