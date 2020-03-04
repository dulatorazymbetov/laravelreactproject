<html>
	<body>
		<?php
		$name = $_GET['name'];
		$surname = $_GET['lastname'];
		$menu = $_GET['choice'];
		echo "<h1> Your favorite food is ".$menu." </h1>";
		echo "<h1> Your name is ".$name." </h1>";
		echo "<h1> Your surname is ".$surname." </h1>";
		?>
	</body>
</html>