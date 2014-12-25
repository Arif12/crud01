<?php
$id= $_GET['id'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query="DELETE FROM `information`.`user` WHERE `user`.`id` = '$id'";

mysqli_query($link,$query);

header('location:list.php');
?>
