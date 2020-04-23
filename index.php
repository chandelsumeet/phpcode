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
	<p class="heading dark">Let's Connect Register Below</p>

</div>




<div  class="background-wrapper">
	<div class="background">

		
		<div class="img-grid">
			<div class="img-wrapper">
				<img src="images/img2.jpg">
			</div>


			<div class="form-wrapper form-register">

				<p class="dark f-w6">Create your Account</p>
				<p class="dark f-w6">to continue to Mail</p>
				<form class="form-grid" name="" action="" method="post">

					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="username" placeholder="enter your name">
						
					</div>
					<div class="input-field">
						<i class="fas fa-key"></i>
						<input type="password" name="password" placeholder="enter your password">
						
					</div>
					<div class="input-field">
						<i class="fas fa-envelope-open-text"></i>
						<input type="email" name="email" placeholder="enter your email">
						
					</div>
					<input type="submit" name="submit" class="btn">

				</form>
				<div class="social-icons">
					<div><i class="fab fa-google-plus red"></i></div>
					<div><i class="fab fa-facebook blue"></i></div>
					<div><i class="fab fa-instagram-square pink"></i></div>
					<div><i class="fab fa-twitter-square blue"></i></div>
				</div>
				<p><?php   printregister(); ?></p>
				<?php printcheck() ?>

			</div>
		</div>





	</div>
</div>

</div>



</body>
</html>