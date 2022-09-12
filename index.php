<?php
$db = mysqli_connect('localhost', 'root', '', 'brokerage');
if(isset($_POST['submit'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
	if($color=='Admin')
	{
		$sql1="select * from admin where username='".$uname."'AND password='".$password."' limit 1";
		$result1=mysqli_query($db,$sql1);
		if(mysqli_num_rows($result1)==1){
			header('location: homepage.php');
		}
		else{
			echo " You Have Entered Incorrect Password";
			exit();
		}
	}
  else
  {
	$sql="select * from client where username='".$uname."'AND password='".$password."' limit 1";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1){
		header('location: homepage.php');
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
  }
        
}
?>
<html>
<head>
	<title>Login Form | By SW3 students</title>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" a href="..\css\index.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
    
	<div class="container">
	<img src="..\images\index (16).jpg"/>
		<form action="#" method="POST">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<div>
				<select name="color" id="color" style="width:300px;height: 45px;	width: 300px;font-size: 18px;margin-bottom: 20px;background-color: #fff;padding-left: 40px;">
					<option>Admin</option>
					<option>client</option>
				</select>
			</div>
			<input type="submit" name="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
		<p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
	  <p class="para-2">
    Create Account For <a href="admin.php">Admin here</a>&nbsp;&nbsp;&nbsp;<a href="client.php">Client here</a>
    </p>
    </div>
   
	</div>
	<style>

		.para-2
		{
			text-align:center;
		}
		.para-2 a
		{
			font-size:18px;
			color:white;
		
		}
		body{
	margin: 0 auto;
	background-image: url("car3.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 550px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 120px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
	border-radius: 100%;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}

	</style>
</body>
</html>