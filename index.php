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
				<div class="login-img">
					<div class="img-text">
						<div><span class="head">XMEE</span></div>
						<div><span class="head2">Welcome To Our xmee</span></div>
						<div><span class="text">Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</span></div>
						<div class="social-icons">
							<div><i class="fab fa-google-plus red"></i></div>
							<div><i class="fab fa-facebook blue"></i></div>
							<div><i class="fab fa-instagram-square pink"></i></div>
							<div><i class="fab fa-twitter-square blue"></i></div>
						</div>
					</div>
				</div>
			</div>


			<div class="form-wrapper form-register">

				
				<form class="form-grid" name="" action="" method="post">
					<div><label>User Name</label></div>
					<div class="input-field" tabindex="0">
						<div><i class="fas fa-user"></i></div>
						<div><input type="text" name="username" placeholder="New User Name"></div>
						
					</div>
					<div><label>Password</label></div>
					<div class="input-field" tabindex="0">
						<div><i class="fas fa-key"></i></div>
						<div><input type="password" name="password" placeholder="demo@gmail.com"></div>
						
					</div>
					<div><label>Email</label></div>
					<div class="input-field" tabindex="0">
						<div><i class="fas fa-envelope-open-text"></i></div>
						<div><input type="email" name="email" placeholder="******"></div>
						
					</div>
					<input type="submit" name="submit" class="btn">
					<div><span class="gray">Have an account? <a href="loginpage.php">Login</a></span></div>
				</form>
				
				<p><?php   printregister(); ?></p>
				<?php printcheck() ?>

			</div>
		</div>





	</div>
</div>

</div>



</body>
</html>