<?php

  session_start();
  if(!isset($_SESSION['uid'])){
    header('location:adminlogin.php');
  }

	include('../libs/cone.php');
	include('../libs/database.php');
	include('../includes/function.php');

	$db = new database();
	$query = "SELECT * FROM `post` ";

	$posts = $db->select($query);

  $query = "SELECT * FROM `categories` ";
  $cat = $db->select($query);

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
      .readmore:hover{
      	color : white;
      	background : blue;
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
      <a class="p-2 text-muted" href="../index.php">View Blog</a>
      <a class="p-2 text-muted" href="logout.php">Log out</a>
    </nav>
  </div>

  <div class = "container">
    <div class="row">
      <div class="col-sm-12 blog-main">
        <table class="table table-striped" style="margin-top:3% ;">
          <tr>
              <td colspan="4" align="center"><h2 >Manage Post</h2></td>
          </tr>
          <tr>
            <th>Post id</th>
            <th>Post Title</th>
            <th>Post Author</th>
            <th>Post Date</th>
          </tr>
          <?php while($row = mysqli_fetch_array($posts)){ ?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
            <td><?php echo $row['author'];?></td>
            <td><?php echo formatDate($row['date']);?></td>
          </tr>
          <?php }?>
        </table>

        <table class="table table-striped" style="margin-top:5% ;">
          <tr>
              <td colspan="2" align="center"><h2 >Manage Categories</h2></td>
          </tr>
          <tr>
            <th>category  id</th>
            <th>category Title</th>
          </tr>
          <?php while($row1 = mysqli_fetch_array($cat)){ ?>
          <tr>
            <td><?php echo $row1['id'];?></td>
            <td><a href="editcat.php?id=<?php echo $row1['id'];?>"><?php echo $row1['title'];?></a></td>
          </tr>
          <?php }?>
        </table>
      </div>
    </div>
  </div>