<?php
  include('../libs/cone.php');
  include('../libs/database.php');
  include('../includes/function.php');

  $db = new database();
 
  

  $id = $_GET['id'];
   $query = "SELECT * FROM `post` WHERE `id` = '$id'";
  $select = $db->select($query);

  $a = new database();
  $query = "SELECT * FROM `categories`";

  $cats = $a->select($query);



  if(isset($_POST['update'])){

    $title = $_POST['title'];
     $cont = mysqli_real_escape_string($con,$_POST['con']);
    $author = $_POST['author'];
    $tag = $_POST['tags'];
    $category = $_POST['category'];
    $top = $_POST['top'];

    $quer = "UPDATE `post` SET `category`='$category',`title`='$title',`author`='$author',`text`='$tag',`top`='$top',`content` ='$cont' WHERE `id` = '$id'";
    $run = $db->update($quer);
   
  }
  if(isset($_POST['cancel']))
    header('location:index.php');
  if(isset($_POST['delete']))
  {
    $query = "DELETE FROM `post` WHERE `id`='$id'";
    $run = $db->delete($query);
  }
if(isset($_POST['Change']))
{
  
  $imagename=$_FILES['image']['name'];
  $temp=$_FILES['image']['tmp_name'];
  move_uploaded_file($temp,"../images/$imagename");
  $query = "UPDATE `post` SET `image`= '$imagename'WHERE `id`= '$id'";
  $run = $db->update($query);
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

        <?php $row = mysqli_fetch_array($select); ?>
       <form action="edit_post.php?id=<?php echo $id; ?>" method="post" style="margin-top:6%;" enctype="multipart/form-data">
          <h3> Update Post : </h3><hr>
           <div class="form-group">
              <label> Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>"/>
           </div>
            
            <div class="form-group">
               <label>Content</label>
               <textarea   rows="20" class="form-control" name="con" ><?php echo  $row['content'];?></textarea>
            </div>
             <div class="form-group">
              <label>Author Name</label>
              <input type="text" class="form-control"  name="author" value="<?php echo  $row['author'];?>">
           </div>
            
            <div class="form-group">
               <label>Tags</label>
               <input type="text" class="form-control" name="tags"  value="<?php echo  $row['text'];?>">
            </div>
           
           <div>
            <input type="file" name="image"/>
           
            <div class="p-4">
              <h4 class="font-italic">Categories</h4>
            <?php 
            $b = 1;
            while($row1 = mysqli_fetch_array($cats)){ ?>
              <ol class="list-unstyled mb-0">
             <li><?php   echo $row1['id'] ."  " . $row1['title'] ; ?></li>
            </ol>
             <?php }?>
            </div>

            <div class="form-group">
               <label>Category No.</label>
               <input type="number" class="form-control" name="category"  value="<?php echo $row['category'] ;?>">
            </div>
             <div>
              <label>Enter </label>
            <ol>
              <li> 1 for simple post </li>
              <li> 2 for display content in header </li>
              <li> 3 for display content in left header</li>
              <li> 4 for display content in right</li>
            </ol>
               <input type="number" class="form-control" name="top"  value="<?php echo $row['top'] ?>"required="required" /><br>
            </div>

            
             <button type="submit" class="btn btn-success" name="update" >Update</button>
             <button type="submit" class="btn btn-default" name="Change"  href="#">change image</button>
             <button type="submit" class="btn btn-danger" name="delete"  >Delete</button>
             <button type="submit" class="btn btn-warning" name="cancel"  >Cancel</button>


        </form>
      </div>
    </div>
  </div>
