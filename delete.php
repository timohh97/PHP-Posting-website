<?php

$id = $_POST["id"];

$connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");
        
$query = "DELETE FROM posts WHERE id='".$id."'"; 
        
$result = mysqli_query($connection,$query);

echo "<script>window.location = './index.php'</script>";




?>