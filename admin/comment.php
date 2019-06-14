
<?php include 'includes/header.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                          <h1 class="page-header">
                            Welcome to the Administration Panel
                        </h1>

                    </div>
                    
                    <table class="table table-bordered table-striped table-hover">
						<thead>
							<th>Name</th>
							<th style="width:500px;">message</th>
							<th>date</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php 
							include_once "includes/function.php";
							show_comment(); 
							?>
						</tbody>
                   </table>
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
