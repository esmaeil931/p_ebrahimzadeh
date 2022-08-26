<?php

session_start();


if (isset($_SESSION['name'])){
    echo 'خوش آمدید:  '.$_SESSION['name'];
    
}
else{ 
  
  // die "لطفا لاگین کنید";
  echo 'not login';
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

include ("connect.php");
// include ("login.php");

echo ' <h2>  کتابهای موجود   <h2>';

// _________ connect to database  
$mysqli = new mysqli($server, $username, $password, $db);
if ($mysqli->connect_error)
   die ("error!!!");
 

// ________ list books


$sql = "SELECT * FROM book  ";
$result = $mysqli->query($sql);

$row= $result->fetch_assoc();
while ($row){
    $book=$row['picture'];
    $namebook=$row['namebook'];
    echo " 
      $namebook <br>
      <img src='images/$book' width='150px' height='180px' > <br><br>

    ";
    $row= $result->fetch_assoc();
}

?>

<a href=index.php style=color:green> <p> منوی اصلی </p></a><br>

 </body>
</html>