<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM `products` WHERE id= $_GET[id]";
$result = mysqli_query($connect,$sql);
$row =mysqli_fetch_assoc($result);

if($row["image"] != "default.jpg"){
    unlink("images/$row[image]");
}

$delete = "DELETE FROM `products` WHERE id= $_GET[id]";

if(mysqli_query($connect,$delete)){
    header("Location: index.php");
}else{
    echo "error";
}




?>