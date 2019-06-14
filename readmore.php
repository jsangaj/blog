<?php include 'includes/header.php'; ?>

    <div class="wrap">

<?php include 'includes/navigation.php'; ?>

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">
    <?php
        if(isset($_GET['post'])){
          $p_id = $_GET['post'];

$query = "SELECT * FROM posts WHERE id = $p_id";
$result = mysqli_query($connection, $query);
    }else{
      header("Location:index.php");
    }
     ?>
          <?php
      $result = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];
        $date = $row['date'];
        $views = $row['views'];
        $comments = $row['comments'];
      ?>

          <div class="col-md-12 col-lg-12 main-content">
            <img src="admin/images/<?php echo $image; ?>" alt="Image" width="80%" height="400px" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="admin/images/<?php echo $image; ?>" alt="Colorlib" class="mr-2"> Admin</span>&bullet;
                        <span class="mr-2"><?php echo $date; ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $comments; ?></span>
                      </div>
            <h1 class="mb-4"><?php echo $title; ?></h1>           
            <div class="post-content-body">
              <p><?php echo $description; ?></p>
            </div>
          </div>
          <?php } ?>

            <div class="pt-5">
              <h3 class="mb-5"> Comments</h3>

       <?php
        if(isset($_GET['post'])){
          $p_id = $_GET['post'];

                $query = "SELECT * FROM comment WHERE post_id = $p_id  AND status=1";
                $result = mysqli_query($connection, $query);
                    }else{
                      header("Location:index.php");
                    }
                    ?>
                          <?php
                      $result = mysqli_query($connection, $query);
                      while ($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $message = $row['message'];
                        $date = $row['date'];
                      ?>    

              <ul class="comment-list">
                <li class="comment">
                  
                  <div class="comment-body">
                    <h3><?php echo $name; ?></h3>
                    <div class="meta">J<?php echo $date; ?></div>
                    <p><?php echo $message; ?></p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                  <?php } ?>

                  </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="admin/includes/function.php" method="post" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    
                    <input type="text" class="form-control" name="name">
                    <input type="hidden" class="form-control" name="post_id" value="<?php echo $p_id; ?>">
                    <input type="hidden" class="form-control" name="status" value="1">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea  name="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="comment" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->
            

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>