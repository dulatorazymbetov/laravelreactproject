<?php
$dbc = mysqli_connect('localhost', 'root', '', 'php');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `sign_up` WHERE username = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$home_url = 'myprofile.php';
				header("Location: http://$host$uri/$home_url");
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$home_url = 'index.php';
				header("Location: http://$host$uri/$home_url");
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$home_url = 'index.php';
			header("Location: http://$host$uri/$home_url");
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
					<h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
					<hr>
					<?php
						if(empty($_COOKIE['username'])) {
					?>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
						    <span class="input-group-text"><i class="fa fa-lock"></i></span>
						 </div>
					    <input name="password" class="form-control" placeholder="******" type="password">
					</div>
					</div> 
					<div class="form-group">
					<button name="submit" type="submit" class="btn btn-primary btn-block"> Login  </button>
					</div> 
					<p class="text-center"><a href="sign_up.php" class="btn">Sign up</a></p>
					</form>
					<?php
					}
					else {
						?>
						<p><a href="myprofile.php">Мой профиль</a></p>
						<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
					<?php	
					}
					?>
				</article>
				</div> 
			</aside>
		</div>
	</div>
</body>
</html>