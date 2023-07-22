<?php
require_once 'navbar.php';
require_once 'footer.php';
require_once 'db_connection.php';

$getId = $_GET["id"];
$sql = "SELECT * FROM `products` WHERE id= $getId";
$result = mysqli_query($connect, $sql);

$item = "";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $item .=  "
        <div class='card' style='width: 50rem;'>
            <img src='images/{$row["image"]}' style='height: 15rem;'  class='card-img-top' alt='Oops'>
            <div class='card-body'>
            <h5 class='card-title'>{$row["title"]}</h5>
            <p class='card-text'>{$row["type"]}</p>
            <p class='card-text'>{$row["description"]}</p>
            </div>
            <hr>
            <div class='detflex'>
                <div>
                    <p class='card-text'><b>Author:</b> {$row["author_fn"]} {$row["author_ln"]}</p>
                    <p class='card-text'><b>Publis Date:</b> {$row["publish_date"]}</p>
                </div>
                <div>
                    <a href='publisher.php?x={$row["publisher_name"]}' class='btn card-text'><b>Publisher:</b> {$row["publisher_name"]}</a>
                    <p class='card-text'><b>Publiser Address:</b> {$row["publisher_adress"]}</p>
                </div>
                
            </div>

            <hr>

            <div class='detbtn'>
                <a href='edit.php?id={$row["id"]}' class='btn btn-warning'>Edit</a>
                <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
           </div>
        
        </div>" ;
    }
} else  {
    $item .= "<p>No results found</p>" ;
}

mysqli_close($connect);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Giorgakis Library</title>
</head>
<body>
<!-- Navbar Starts -->
    <?= $navbar?>
<!-- Navbar Ends -->


<!-- Main Starts -->
<div class="details">
    <?= $item ?>
</div>

<!-- Main Ends  -->


<!-- Footer Starts -->
<?= $footer?>
<!-- Footer Ends -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>