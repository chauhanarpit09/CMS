<?php
	include('libs/cone.php');
	include('libs/database.php');
	include('function.php');

	$db = new database();
	$query = "SELECT * FROM `post`  order by id DESC";

	$posts = $db->select($query);

	$quer ="SELECT * FROM `post` WHERE `top` = 2 order by id DESC ";
	$top = $db->select($quer);

	$query ="SELECT * FROM `post` WHERE `top` = 3 order by id DESC ";
	$top_left = $db->select($query);

	$q ="SELECT * FROM `post` WHERE `top` = 4 order by id DESC ";
	$top_right = $db->select($q);




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PHP Blog web</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap/bootstrap.css" rel="stylesheet" >


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
 	<h2 href="#">BlogWeb.com</h2>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="admin/index.php">Admin Login</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2" style="background-color:lightblue; border:1px solid lightblue; border-radius:10px;">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="index.php">Home</a>
      <a class="p-2 text-muted" href="includes/post.php">All post</a>
      <a class="p-2 text-muted" href="services.php">Services</a>
      <a class="p-2 text-muted" href="about.php">About us</a>
      <a class="p-2 text-muted" href="contact.php">Contact us</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
    	<?php $top1 = mysqli_fetch_array($top);?>
      <h1 class="display-4 font-italic"><?php echo $top1['title'];?></h1>
      <p class="lead my-3"><?php echo substr($top1['content'],0,200);?></p>
      <p class="lead mb-0"><a href="includes/single.php?id=<?php echo $top1['id'];?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6" >
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <?php $top2 = mysqli_fetch_array($top_left);?>
          <h3 class="mb-0"><?php echo $top2['title'];?></h3>
          <div class="mb-1 text-muted"><?php echo formatDate($top2['date']);?></div>
          <p class="card-text mb-auto"><?php echo substr($top2['content'],0,150);?></p>
          <a href="includes/single.php?id=<?php echo $top2['id'];?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <img src="images/<?php echo $top2['image']?>" width="250" height="260" href="includes/single.php?id=<?php echo $top2['id'];?>">
        </div>
      </div>
    </div>
	
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        	<?php $top3 = mysqli_fetch_array($top_right);?>
          <h3 class="mb-0"><?php echo $top3['title'];?></h3>
          <div class="mb-1 text-muted"><?php echo formatDate($top3['date']);?></div>
          <p class="mb-auto"><?php echo substr($top2['content'],0,150);?></p>
          <a href="includes/single.php?id=<?php echo $top3['id'];?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
           <img src="images/<?php echo $top3['image']?>" width="250" height="260" href="includes/single.php?id=<?php echo $top3['id'];?>">
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        About Web
      </h3>
      <?php
      		while($row = mysqli_fetch_array($posts)){
      ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
        <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author'];?></a></p>

        <p><?php echo substr($row['content'],0,300) ."<br><br><br>";?></p>  
        <a class="readmore"  href = "includes/single.php?id=<?php echo $row['id'];?>" >Read More</a>  
      </div><!-- /.blog-post -->
      <?php }?>