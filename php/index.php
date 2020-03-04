<!DOCTYPE html>
<html lang="en">
<?php include 'blocks/head.php' ?>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Anime</h5>
    <?php
      if(empty($_COOKIE['username'])) {
    ?>
    <a class="btn btn-primary" href="sign_in.php">Sign in</a>
    <?php
      } 
      else {
        ?>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="btn btn-primary" href="myprofile.php">Мой профиль</a>
          <a class="btn btn-primary" href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a>
        </nav>
    <?php 
      }
    ?>
  </div>
  <div class="container">
    <?php include 'blocks/content.php' ?>
    <?php include 'blocks/footer.php' ?>
  </div>
</body>
</html>