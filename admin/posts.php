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
			  <table class="table table-bordered table-striped table-hover">
						<thead>
							<th>post title</th>
							<th>Description</th>
							<th>posted date</th>
							<th>image</th>
							<th>number of comment</th>
							<th>number of views</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php 
							include_once "includes/function.php";
							show_posts(); 
							?>
						</tbody>
                   </table>
		</div>



			</div>

			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
