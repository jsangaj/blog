<?php
$query = "SELECT * FROM posts";
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
<div class="col-md-4">
  <a href="readmore.php?post=<?php echo $id; ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
    <img src="admin/images/<?php echo $image; ?>" height="240px" width="100%" alt="Image placeholder">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="author mr-2"><img src="admin/images/<?php echo $image; ?>" alt="Colorlib"> Admin</span>&bullet;
        <span class="mr-2"><?php echo $date; ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $comments; ?></span>
      </div>
      <h2><?php echo $title; ?></h2>
    </div>
  </a>
</div>
<?php } ?>