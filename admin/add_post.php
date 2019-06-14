<?php include 'includes/header.php'; ?>

<div id="wrapper">

	<!-- Navigation -->
	<?php include 'includes/navigation.php'; ?>


	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">

					<h1 class="page-header">
						Welcome to the Blog Admin Panel
					</h1>
				
			  </div>
            
			<div class="row">
                <div class="col-sm-6">
                    <form action="includes/function.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Post title</label>
                            <input type="text" name="title" placeholder="Enter post title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea type="text" name="description" placeholder="Enter post Description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Post Image</label>
                            <input type="file" name="image"  class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Publish post"  class="btn btn-primary">
                        </div>
                    </form>
                </div>
              </div>
				</div>

			</div>

			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
