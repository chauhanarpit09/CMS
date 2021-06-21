<?php
  include('../libs/cone.php');
  include('../libs/database.php');
  include('../includes/function.php');


  $id = $_GET['id'];

  $a = new database();
  $query = "SELECT * FROM `categories` WHERE `id` = '$id'";

  $cats = $a->select($query);

  if(isset($_POST['update'])){
    $title = $_POST['cat'];
    $quer = "UPDATE `categories` SET `title`='$title' WHERE `id`='$id'";
    $run = $a->update($quer);
  }
  if(isset($_POST['cancel']))
    header('location:index.php');
  if(isset($_POST['delete']))
  {
    $query = "DELETE FROM `categories` WHERE `id`='$id'";
    $run = $a->delete($query);
  }

 
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="../bootstrap/bootstrap.css" rel="stylesheet" >


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .readmore{
        float:right;
        margin-top:-8%;
        margin-right : 5%;
        background : gray;
        padding :7px;
        color :black;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2" style="background-color:lightblue;">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="index.php">Dashboard</a>
      <a class="p-2 text-muted" href="add_post.php">Add Post</a>
      <a class="p-2 text-muted" href="add_cat.php">Add Category</a>
      <a class="p-2 text-muted" href="localhost/phpblog">View Blog</a>
      <a class="p-2 text-muted" href="logout.php">Log out</a>
    </nav>
  </div>

  <div class = "container">
    <div class="row">
      <div class="col-sm-12 blog-main">
       <form action="editcat.php?id=<?php echo $id; ?>" method="post" style="margin-top:6%;">
          <h3> Update category : </h3><hr>
            <?php   $row = mysqli_fetch_array($cats) ?>
            
                   <div class="form-group">
                   <label>Category</label>
                 <input type="text" class="form-control" name="cat" value= "<?php echo $row['title'];?>"/>
                </div>
              <button type="submit" class="btn btn-success" name="update" >Update</button>
             <button type="submit" class="btn btn-warning" name="cancel"  >Cancel</button>
             <button type="submit" class="btn btn-danger" name="delete"  >Delete</button>

        </form>
      </div>
    </div>
  </div>

            