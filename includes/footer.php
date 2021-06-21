<?php
  include('libs/cone.php');
 


  $a = new database();
  $query = "SELECT * FROM `categories`";

  $cats = $a->select($query);


?>
   
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
    </aside>

  </div><hr><hr>

    <footer class="blog-footer">
    <a href="#">Back to top</a>
  </p>
</footer>
</main><!-- /.container -->
</body>
</html>
