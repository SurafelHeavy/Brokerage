<?php 

// If file upload form is submitted 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'brokerage');
if(isset($_POST['submit']))
{
$firstname=$_POST['name'];
$location=$_POST['location'];
$price=$_POST['price'];
$target_dir = "..\Assets";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file=basename( $_FILES["image"]["name"],".jpg").".jpg";
$description=$_POST['description'];
$phonumber=$_POST['phonenumber'];
$date=$_POST['date'];
$type = filter_input(INPUT_POST, 'cars', FILTER_SANITIZE_STRING);
if($type=='Home')
{
  $query1="insert into home values('$firstname','$location','$price','$file','$description','$phonumber','$date')";
  $result=mysqli_query($db,$query1);
  if($result)
  {
    echo "success";
  }
  else
  {
    echo "error hh";
  }
}
else if($type=='Car')
{
  $query1="insert into car values('$firstname','$location','$price','$file','$description','$phonumber','$date')";
  $result=mysqli_query($db,$query1);
  if($result)
  {
    echo "success";
  }
  else
  {
    echo "error hh";
  }
}
else
{
  $query1="insert into bicycle values('$firstname','$location','$price','$file','$description','$phonumber','$date')";
  $result=mysqli_query($db,$query1);
  if($result)
  {
    echo "success";
  }
  else
  {
    echo "error hh";
  }
}
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<div class="form">
		<form action="#" method="post"  enctype="multipart/form-data">

			<label>Name</label>
			<input type="text" name="name"><br>
      <label>phonumber</label>
			<input type="number" name="phonenumber"><br>
			<label>Date</label>
			<input type="date" id="current_date" name="date"><br>
			<label>Car Type</label>
			<select class="car" name="cars" id="cars">
				<option>Home</option>
				<option>Car </option>
				<option>Bicycle </option>
			</select>
      <label>Location</label>
			<input type="text" name="location"><br>
      <label>Description</label>
			<input type="text" name="description"><br>
			<label>Price</label>
			<input type="number" name="price"><br>
			<label>Photo</label>
			<input type="file" name="image" id="inputFile" onchange="showPreview(event);" style="font-size: 20px;">
			<div class="image" id="cont">
				<img id="image_view" name="image" src="" >
				<span class="image_text" id="image_text"></span>
			</div>
			<button name="submit" value="submit" value="upload">Submit</button>
		</form>
		<script>
			document.getElementById("current_date").value = Date();
			</script>

	</div>
	<script type="text/javascript">
		  function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("image_view");
    preview.src = src;
    preview.style.display = "block";
	preview.style.width="300px";
	preview.style.height="150px";
  }
}
		
	</script>
	<style type="text/css">
		body
		{
			background-repeat: repeat-x;
			background-attachment: fixed;
			background-size: cover;
			
		}
		.form {
    width: 360px;
    height: 280px;
    margin: auto;
    border-radius: 3px;
  }
  form {
    width: 300px;
    margin-left: 20px;
  }
  form label {
  	color: black;
    display: flex;
    margin-top: 10px;
    font-size: 18px;
  }
  .car
  {
 
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;	
  }
  form input {
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
    margin-top: 10px;
    margin-bottom: 10px;

  }
   button {
    width: 320px;
    height: 35px;
    margin-top: 10px;
    margin-bottom: 10px;
    border: none;
    background-color: seagreen;
    color: white;
    font-size: 18px;
  }
  .image
  {
  	width: 300px;
  	height: 150px;
  	border: 2px solid #dddddd;
  	display: flex;
  	align-items: center;
  	justify-content: center;
  	background-color: darkgray;
  }
  .image_view
  {
  	display: none;
	  width: 100%;
  }
  
  
		
	</style>
</body>
</html>
