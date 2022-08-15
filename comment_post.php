<?php


// varibles i identfy to connect

$host = "sql308.epizy.com" ;
$user = "epiz_32364193";
$pass= "xrrTwbnSc6ZN" ;
$db = "epiz_32364193_riyadh_trail" ;
// connect function 
$con = mysqli_connect($host,$user,$pass,$db) ;
// CHECK CONNECTION STATUS






$name = $_POST["NAME"];
$commentt = $_POST["COM"];




$sql = "INSERT INTO `comment`( `name`, `comment_con`) VALUES ('$name','$commentt')" ;
$run = mysqli_query($con,$sql);
echo "hi";

//fff

echo 1 ;




//header ("location: comment.php ") ;




?>