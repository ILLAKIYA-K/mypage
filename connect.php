<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['regno'];
	$DOB = $_POST['DOB'];
	$Age = $_POST['Age'];
	$Address = $_POST['Address'];
$conn = new mysqli('localhost','root','','test');
$sql="INSERT INTO reg(firstname,lastname,email,regno,DOB,Age,Address) VALUES('$firstname','$lastname','$email','$regno','$DOB','$Age','$Address')";
$ss=mysqli_query($conn,$sql);
if($ss){
	echo "Form submited";
}
else{
	echo "Form not submited";
}
mysqli_close($conn);
?>