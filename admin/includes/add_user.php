<?php
if (isset($_POST['create_user'])) {
	global $connection;
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_role = $_POST['user_role'];
	$username = $_POST['username'];
	/* $post_image = "../images/" . basename($_FILES['image']['name']); */
	/* $post_image_temp = $_FILES['image']['tmp_name']; */
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$rand_salt = '';
	$user_image = '';
	/* $post_comment_count = 4; */
	$query  = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password,) ";
	$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}','$user_image','$rand_salt');";
	$create_user_query = mysqli_query($connection, $query);
	confirmQuery($create_user_query);
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="author">Firstname</label>
		<input type="text" class="form-control" name="user_firstname">
	</div>

	<div class="form-group">
		<label for="status">Lastname</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>


	<div class="form-group">
		<label for="role">User role</label><br />
		<select name="user_role" id="">
			<option value="subscriber">Subscriber</option>
			<option value="admin">Admin</option>
		</select>
	</div>

	<!--<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="image">
	</div>
-->
	<div class="form-group">
		<label for="username'">Username</label>
		<input type="text" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="user_email">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="user_password">
	</div>


	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="create_user" value="Add User">
	</div>


</form>
