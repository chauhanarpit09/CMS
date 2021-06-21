<?php
  include('../libs/cone.php');
  include('../libs/database.php');
  

  $db = new database();
  if(isset($_POST['submit'])){

    $title =   $_POST['title'];
    $content = mysqli_real_escape_string($con,$_POST['content']);
    $author = $_POST['author'];
    $tag = $_POST['tags'];
    $category = $_POST['category'];
    $top = $_POST['top'];

    $imagename=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];

    move_uploaded_file($temp,"../images/$imagename");

    $cat = "INSERT INTO `post`(`category`, `title`, `content`, `author`, `text`,`image`,`top`) VALUES ('$category','$title','$content','$author','$tag','$imagename','$top')";
    $run = $db->insert($cat);

    
    
  }
  elseif(isset($_POST['cancel']))
    header('location:index.php');


  $a = new database();
  $query = "SELECT * FROM `categories`";

  $cats = $a->select($query);
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
      <a class="p-2 text-muted" href="">Add Post</a>
      <a class="p-2 text-muted" href="add_cat.php">Add Category</a>
      <a class="p-2 text-muted" href="../index.php">View Blog</a>
      <a class="p-2 text-muted" href="logout.php">Log out</a>
    </nav>
  </div>

  <div class = "container">
    <div class="row">
      <div class="col-sm-12 blog-main">
      
       <form action="add_post.php" method="post" style="margin-top:6%;" enctype="multipart/form-data">
          <h3> Insert New Post : </h3><hr>
           <div class="form-group">
              <label> Post Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter title" required />
           </div>
            
            <div class="form-group">
               <label>Content</label>
               <textarea  rows="20"  class="form-control"  name="content" placeholder="Enter content" required="required"></textarea>
            </div>
             <div class="form-group">
              <label>Author Name</label>
              <input type="text" class="form-control"  name="author" placeholder="Enter Author" required="required">
           </div>
            
            <div class="form-group">
               <label>Tags</label>
               <input type="text" class="form-control" name="tags"  placeholder="Enter tags" required="required">
            </div>
            <input type="file" name="image" class="form-group" />

            <div class="p-4">
              <h4 class="font-italic">Categories</h4>
            <?php 
            $b = 1;
            while($row = mysqli_fetch_array($cats)){ ?>
              <ol class="list-unstyled mb-0">
             <li><?php
               
              echo $row['id'] ."  " . $row['title'] ;
               ?></li>
            </ol>
             <?php }?>
            </div>
            <div class="form-group">
               <label >Enter Category No.</label>
               <input type="number" class="form-control" name="category"  placeholder="Enter tags" required="required">
            </div>
            <div>
              <label>Enter </label>
            <ol>
              <li>  for simple post </li>
              <li>  for display content in header </li>
              <li>  for display content in left header</li>
              <li>  for display content in right</li>
            </ol>
               <input type="number" class="form-control" name="top"  placeholder="Enter" required="required" /><br>
            </div>


             <button type="submit" class="btn btn-success" name="submit" >Submit</button>
             <button type="submit" class="btn btn-danger" name="cancel" href="index.php" >Cancel</button>

        </form>
      </div>
    </div>
  </div>
  