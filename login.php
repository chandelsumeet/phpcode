<?php
include("header.php");
include("db.php");
include("function.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="login-grid">

		<div>
			<nav class="grid-main">
				<input type="checkbox" name="check" id="toggle">
				<div class="grid-logo">
					<div><img src="images/logo.png"></div>
					<div class="label-container"><label for="toggle" id="label">&#9776;</label></div>
				</div>


				<?php printvalues();  ?>

			</nav>
		</div>



		<div>
			<p> <?php secure(); ?> </p>
			<form action="" method="post">

				<input type="submit" name="logout" value="logout" class="btn">
			</form>

			<?php logout(); ?>

			
		</div>

		

	</div>

</body>
</html>