<?php 
include("header.php");
include("db.php");
include("function.php");


?>



<div>
	<nav class="grid-main">
		<input type="checkbox" name="check" id="toggle">
		<div class="grid-logo">
			<div><img src="images/logo.png"></div>
			<div class="label-container"><label for="toggle" id="label">&#9776;</label></div>
		</div>


		<?php echo printvalues();  ?>

	</nav>
</div>

<br><br><br><br>

<div class="link-grid">
	<a href="index.php"><p class="btn1">Register</p></a>
	<a href="loginpage.php"><p class="btn1">Login</p></a>
</div>
<br><br><br>
<div>
	
	<p class="heading dark">Login Now TO Unlock Awesome Content</p>

</div>

<div  class="background-wrapper">
	<div class="background">

		
		<div class="img-grid">
			<div class="img-wrapper">
				<img src="images/img3.png">
			</div>


			

			<div class="form-wrapper form-login" >
				<p class="dark f-w6">Enter Username and Password</p>
				<form class="form-grid" name="" action="" method="post"  >
				<div class="input-field">
					<i class="fas fa-user"></i>
						<input type="text" name="username1" placeholder="enter your name">
						
					</div>
					<div class="input-field">
						<i class="fas fa-key"></i>
						<input type="password" name="password1" placeholder="enter your password">
						
					</div>
					<input type="submit" name="login" value="Login" class="btn">

				</form>
				<div class="social-icons">
					<div><i class="fab fa-google-plus red"></i></div>
					<div><i class="fab fa-facebook blue"></i></div>
					<div><i class="fab fa-instagram-square pink"></i></div>
					<div><i class="fab fa-twitter-square blue"></i></div>
				</div>
				<p><?php printcheck(); ?> </p>

			</div>



		</div>
	</div>

</div>


</body>
</html>