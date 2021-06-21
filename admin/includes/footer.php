<?php
  include('../libs/cone.php');
 


  $a = new database();
  $query = "SELECT * FROM `categories`";

  $cats = $a->select($query);


?>
   
    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
</footer>
</body>
</html>
