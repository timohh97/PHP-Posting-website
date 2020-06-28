<?php

date_default_timezone_set('Europe/Berlin');
$post = $_POST["postInput"];
$timestamp = time();
$datum = date("d.m.Y - H:i", $timestamp);

$connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");
        
$query = "INSERT INTO posts (post,date)
VALUES ('".$post."','".$datum."')"; 
        
$result = mysqli_query($connection,$query);

echo "<script>window.location = './index.php'</script>";




?>