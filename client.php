<?php
session_start();

// initializing variables
$firstname = "";
$lastname="";
$email    = "";
$password_1="";
$password_2="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'brokerage');


// REGISTER USER
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM client WHERE username='$firstname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $firstname) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
 
    $sql = "INSERT INTO `client` ( `username`, `email`,`password`) VALUES ('$firstname',  '$email', '$password_1')";
$result = mysqli_query($db, $sql);

if ($result) {
  header('location: homepage.php');
}
} 
else { 
$showError = "Passwords do not match"; 
}      

}
?>

<html lang="en">
</body>
</html>
<html lang="en">
  <head>
    <title> Client Sign Up | SW3 students</title>
    <link rel="stylesheet" href="..\css\signup.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"/>
  </head>
  <body>
     
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action="#" method="post">
        <label>First Name</label>
        <input type="text" placeholder="" name="firstname" />
        <label>email</label>
        <input type="email" placeholder="" name="Email" />
        <label>Password</label>
        <input type="password" placeholder="" name="password_1" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" name="password_2" />
       <button value="Submit" name="Submit" type="submit"> Submit</button>
    
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="index.html">Login here</a>
    </p>
  </body>
</html>
