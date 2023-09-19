<!DOCTYPE html>
<html lang="en">

<?php
include "includes/admin_header.php";
?>

<body>

	<div id="wrapper">
		<?php if ($connection) echo "<h1>con</h1>"; ?>
		<?php include "includes/admin_navigation.php"; ?>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Welcome to Admin
							<small>Author</small>
						</h1>
						<div class="col-xs-6">
							<?php
							//INSERT QUERY CODE
							insert_categories();
							?>
							<form action="" method="post">
								<div class="form-group">
									<label for="cat_title">Add Category</label>
									<input type="text" class="form-control" name="cat_title">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" name="add" value="Add Category">
								</div>
							</form>
							<?php
							//UPDATE INCLUDE AND QUERY CODE
							if (isset($_GET['edit'])) {
								$cat_id = $_GET['edit'];
								include "includes/update_categories.php";
							}
							?>


						</div>
						<div class="col-xs-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Category Title</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
										//FIND ALL CATEGORIES QUERY
										findAllCategories();

										?>
										<?php
										//DELETE CATEGORIES QUERY
										deleteCategories();
										?>
									</tr>
								</tbody>
							</table>
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
	<?php include "includes/admin_footer.php"; ?>
</body>

</html>
