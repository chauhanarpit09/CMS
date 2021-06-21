<?php
	include('../libs/cone.php');
	include('../libs/database.php');
	include('function.php');

	$db = new database();
	$query = "SELECT * FROM `post`  order by id DESC";

	$posts = $db->select($query);


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
    <title>PHP Blog web</title>

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
 	<h2 href="#">Bloggers.com</h2>
    </div>
  </header>
 
  <div class="nav-scroller py-1 mb-2" style="background-color:lightblue; border:1px solid lightblue; border-radius:10px;">
    <nav class="nav d-flex justify-content-between" >
      <a class="p-2 text-muted" href="../index.php">Home</a>
      <a class="p-2 text-muted" href="post.php">All post</a>
      <a class="p-2 text-muted" href="services.php">Services</a>
      <a class="p-2 text-muted" href="about.php">About us</a>
      <a class="p-2 text-muted" href="contact.php">Contact us</a>
    </nav>
  </div>

  <main role="main" class="container">
  <div class="row" style="margin:4%;">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom" >
        All Post
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

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4">
        <h4 class="font-italic">Categories</h4>
         <?php while($row = mysqli_fetch_array($cats)){ ?>
        <ol class="list-unstyled mb-0">
          <li><a href="includes/category.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ; ?></a></li>
        </ol>
      <?php }?>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
</body>
</html>



