<?php
  $users = 'admin';
  $pass = '123';  
  if(isset($_POST['submit'])){
    if($users == $_POST['user'] AND $pass == ($_POST['pass']))
    {
      $_SESSION['admin'] = $users;
      header("Location: index.php"); // Если он зарегистрировался қай жаққа өтеді
      exit;
    }
    else header("Location: index.php"); // Если нет то қайтарады бір страницаға
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form method="post">
    Username: <input type="text" name="user" /> <br /> 
    Password: <input type="password" name="pass" /> <br />
    <input type="submit" name="submit" value="Login" />
  </form> 
</body>
</html>