<?php
include "../core/database.php";

$id=$_GET["id"];

$sql="SELECT * FROM `users`";

$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);



$sql_delet ="DELETE FROM `users` WHERE `users`.`id` = $id";
$result_delet = mysqli_query($conn, $sql_delet);

header("location:../read.php");




?>