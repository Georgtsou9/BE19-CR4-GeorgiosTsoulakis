<?php
require_once 'navbar.php';
require_once 'footer.php';
require_once 'db_connection.php';
require_once 'file_upload.php';




if(isset($_POST["create"])){
    $title = $_POST["title"];
    $type = $_POST["type"];
    $isbn = $_POST["isbn"];
    $description = $_POST["description"];
    $author_fn = $_POST["author_fn"];
    $author_ln = $_POST["author_ln"];
    $publsher_name = $_POST["publisher_name"];
    $publisher_adress = $_POST["publisher_adress"];
    $publish_date = $_POST["publish_date"];
    $image = fileUpload($_FILES["image"]);

    $sql = "INSERT INTO `products`(`title`, `image`, `isbn`, `description`, `author_fn`, `author_ln`, `publisher_name`, `publisher_adress`, `publish_date`, `type`) 
    VALUES ('$title','$image[0]','$isbn','$description','$author_fn','$author_ln','$publsher_name','$publisher_adress','$publish_date','$type')";


    if(mysqli_query($connect,$sql)){
        echo "<div class='alert alert-success' role='alert'>
        Item was created successfully!, {$image[1]}
    </div>";
       header("refresh: 3; url = index.php");
    }else{
        echo "<div class='alert alert-danger' role='alert'>
        Try again bitch!, , {$image[1]}
    </div>";
    }

}

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
<div class="container mt-5">
       <h2>Insert a New Product</h2>
       <form method="POST" enctype= "multipart/form-data">

           <div class="mb-3 mt-3">
               <label for="name" class= "form-label">Title</label>
               <input  type="text" class="form-control" id="title" aria-describedby="name" name="title">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Type</label>
                <div class="dropdown">        
                    <select name="type" >
                        <option value="Book">Book</option>
                        <option value="CD">CD</option>
                        <option value="DVD">DVD</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">ISBN Code</label>
                <input type="number" class="form-control"   aria-describedby="price"  name="isbn">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Description</label>
                <input type="text" class="form-control"  id="description"  aria-describedby="price"  name="description">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Author First Name</label>
                <input type = "text" class="form-control" id="author_fn" aria-describedby="picture"   name="author_fn">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Author Last Name</label>
                <input type = "text" class="form-control" id="author_ln" aria-describedby="picture"   name="author_ln">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Publisher Name</label>
                <input type = "text" class="form-control" id="publisher_name" aria-describedby="picture"   name="publisher_name">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Publisher Adress</label>
                <input type = "text" class="form-control" id="publisher_adress" aria-describedby="picture"   name="publisher_adress">
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Publish Date</label>
                <input type = "date" class="form-control"  aria-describedby="picture"   name="publish_date">
            </div>

           <div class="mb-3">
                <label for="picture" class="form-label">picture</label>
                <input type ="file" class="form-control" aria-describedby="picture"   name="image">
            </div>

            

            <button name="create" type="submit" class="btn btn-primary">Create product</button>
            <a href="index.php" class="btn btn-warning">Back to home page</a>
        </form>
    </div>
<!-- Main Ends  -->


<!-- Footer Starts -->
<?= $footer?>
<!-- Footer Ends -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>