<?php
$user=array();



// function show_menu()
// {
// 	$conn=connect();
// 	$menus='';
// 	$menus.=generate_menus($conn);
// 	return $menus;

// }

// function generate_menus($conn,$parent_id=0)
// {	

// 	$menu= '';
// 	$sql='';

// 	if($parent_id==0)
// 	{
// 		$sql = " SELECT * FROM menus WHERE parent_id=0";
// 	}
// 	else
// 	{
// 		$sql = " SELECT * FROM menus WHERE parent_id=$parent_id";
// 	}

// 	$result=$conn->query($sql);

// 	while($row = $result->fetch_assoc())
// 	{
// 		if($row['page'])
// 		{
// 			$menu .= '<li ><a href="'.$row['page'].'">'.$row['name'].'</a>';
// 		}
// 		else
// 		{
// 			$menu .= '<li ><a href="#">'.$row['name'].'</a>';
// 		}
// 		$menu .= '<ul class="dropdown">'.generate_menus($conn,$row['id']).'</ul>';

// 		$menu.='</li>';

// 	}
// 	return $menu;
// }


function register()
{
	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(strlen($username)==0 || strlen($password)==0)
		{
			
			echo "username or password can't be empty";
		}
		else
		{	
			$username=$_POST['username'];
			$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
			$email=$_POST['email'];

			$conn=connect();
			$query="INSERT INTO user (username,password,email) VALUES ('$username','$password','$email')";
			$result=$conn->query($query);

			if($conn->error)
			{
				echo "Could not register at the moment.Please Try again later"; 
			}
			else
			{
				header("location:loginpage.php");
			}
		}

	}
	


}


function check()
{
	$msg="";
	$conn=connect();
	session_start();
	if(isset($_COOKIE['cookie1']))
	{
		header("location:login.php");
	}
	
	else if(isset($_POST['login']))
	{

		$username=$_POST['username1'];
		$password=$_POST['password1'];

		if(strlen($username)==0 || strlen($password)==0)
		{
			
			echo "username odbc_rollback(connection_id) password can't be empty";

		}
		else
		{
			$query="SELECT password FROM user WHERE username='$username'";
			$result=$conn->query($query);

			

			while($row = $result->fetch_assoc())
			{
				
				$checkpass=$row['password'];

				if(password_verify($password,$row['password']))
				{
					
					login();
					
					
				}
				
			}
			$msg ="username or password incorrect";
			echo $msg;

		}
	}

}


function login()
{
	$name=$_POST["username1"];

	$_SESSION["user"]=$name;


	$user="cookie1";
	$value=$_SESSION["user"];
	$expire= time() + (60*60);
	setcookie($user,$value,$expire);

	header("location:login.php");


}

function secure()
{
	if(isset($_COOKIE['cookie1']))
	{

		if(!isset($_SESSION['user']))
		{
			$_SESSION['user']=$_COOKIE['cookie1'];
		}

		echo "logged in successfully"." ".$_SESSION['user'];

	}
	else
	{
		header("location:index.php");
	}

}


function logout()
{
	if(isset($_POST['logout']))
	{

		setcookie("cookie1", "", time() - 3600);
		header("location:index.php");
	}

}

function printvalues()
{
	include('navbar.php');


	echo "<ul class='main'>";
	foreach($menus as $value){
		if($value['parent_id'] == NULL)
		{
			echo  "<li class='parent'><a href=''>". $value['name']."</a>";
			$id = $value['id'];
			printsub($menus,$id);
			echo "</li>";
		}

	}
	
	echo "</ul>";	






}


function printsub($menus,$id)
{ echo "<ul class='dropdown'>";
foreach ($menus as $value) {
	if($value['parent_id'] == $id)
	{
		echo  "<li><a href=''>". $value['name']."</a>";
		printsub($menus,$value['id']);
	}
}
echo "</ul>";
}



// printvalues();


function printregister()
 { 
 	// include("navbar.php");

   global $user;

	
	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(strlen($username)==0 || strlen($password)==0)
		{
			
			echo "username or password can't be empty";
		}
		else
		{	
			$username=$_POST['username'];
			$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
			$email=$_POST['email'];
			$user_id=10;

			$value = array('user_id' =>"$user_id",'username' => "$username",        'password' => "$password",'email' => "$email");
			
			
			array_push($user,$value);
			print_r($user);
			// header("location:loginpage.php");
			

			
		}

	}
	


}



function printcheck()
{
	session_start();
	// include("navbar.php");
	global $user;
	$msg="";
	
	if(isset($_COOKIE['cookie1']))
	{
		header("location:login.php");
	}
	
	else if(isset($_POST['login']))
	{

		$username=$_POST['username1'];
		$password=$_POST['password1'];

		if(strlen($username)==0 || strlen($password)==0)
		{
			
			echo "username or password can't be empty";

		}
		else
		{
			
			foreach( $user as $value) 
			{

				if(password_verify($password,$value['password']))
				{
					
					// login();
					
					
				}
				
			}
			print_r($user);
			$msg ="username or password incorrect";
			echo $msg;

			

			
			

		}
	}

}






?>