<?php
$host="localhost";
$db="labdb";
$username="root";
$password="";
try
{
$connect = new PDO("mysql:host=$host; dbname=$db", $username, $password);
$connect->query("set character set utf8");
}
catch(PDOException $error)
{
  echo "error in connection, in line".$error->getLine();
}
?>
