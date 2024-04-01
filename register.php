<?php
require 'connection.php';

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$age = $_POST["age"];
	$phone = $_POST["phone"];

	$query = "INSERT INTO tb_make VALUES('', '$name', '$age', '$phone')";
	mysqli_query($conn, $query);
	
	# code...
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Insert Data</title>
</head>
<style media="screen">
	label {
		display: block;
	}

</style>
<body>
	<form class="" method="post" id="input_form" autocomplete="off">
		<label for="">Name</label>
		<input type="text" name="name" required value="">
		<label for="">Age</label>
		<input type="number" name="age" required value="">
		<label for="">Phone</label>
		<input type="number" name="phone" id="submit" required>
		<br>
		<button type="submit" name="submit" >Submit</button>
	</form>

</body>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		$("#submit").on('click',function(){
			$.ajax({
				url: 'http://localhost/NewRegs/index.php',
				type: 'POST',
				data $('#input_form').serialize(),
				success:function(data){
				}
			})
		})
	</script>
</html>