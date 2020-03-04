<?php
$dbc = mysqli_connect('localhost', 'root', '', 'php') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `sign_up` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `sign_up` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo 'Всё готово, можете авторизоваться';
			mysqli_close($dbc);
			exit();
		}
		else {
			echo 'Логин уже существует';
		}

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'blocks/head.php' ?>
<body>
	<?php include 'blocks/header.php' ?>
	<div class="container">
		<div class="row">
			<aside class="col-sm-5 mx-auto mt-5">
				<div class="card">
				<article class="card-body">
					<h4 class="card-title text-center mb-4 mt-1">Sign up</h4>
					<hr>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
						 </div>
						<input name="username" class="form-control" placeholder="Login" type="text">
					</div>
					</div> 
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						 </div>
					    <input name="password1" class="form-control" placeholder="Password" type="password">
					</div>
					</div>
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						 </div>
					    <input name="password2" class="form-control" placeholder="Confirm password" type="password">
					</div>
					</div> 
					<div class="form-group">
					<button name="submit" type="submit" class="btn btn-primary btn-block"> Register  </button>
					</div> 
					<p class="text-center"><a href="sign_in.php" class="btn">Sign in</a></p>
					</form>
				</article>
				</div> 
			</aside>
		</div>
	</div>
</body>
</html>