<?php

session_start();
//echo "asdads";
if(isset($_POST['basic'])){
	$_SESSION['name'] = $_POST["name"];
	$_SESSION['dob'] = $_POST["DOB"];
	$_SESSION['city'] = $_POST["city"];
	$_SESSION['mobile'] = $_POST["mobileno"];
	//echo "asdads";
	//echo $_SESSION['name'].$_SESSION['dob'].$_SESSION['city'].$_SESSION['mobile'];

	header("Location:page2.html");
}

 if(isset($_POST['experience'])){
 	$_SESSION['experience'] = $_POST["Delegate-experience"];
 	$_SESSION['drive'] = $_POST["sample"];

 	//echo $_SESSION['experience'].$_SESSION['drive'];
 	header("Location:page3.html");
 }

 if(isset($_POST['final_button'])){
 	$_SESSION['accomodation'] = $_POST["accomo"];


	//echo "<script>alert('dsad');</script>";
 	$name = addslashes($_SESSION['name']);
 	$dob = $_SESSION['dob'];
 	$city = addslashes($_SESSION['city']);
 	$mobile = $_SESSION['mobile'];
 	$exp = addslashes($_SESSION['experience']);
 	$drive = addslashes($_SESSION['drive']);
 	$acco = $_SESSION['accomodation'];
	
    $server = "mysql.hostinger.in";
    $username = "u219096124_admin";
    $password = "AlphaBeta1!";
    $dbname = "u219096124_sur";

   	$conn = mysqli_connect($server, $username, $password, $dbname);

   	$sql = "INSERT INTO student(name,dob,city,mobile,experience,drive,accomodation) values('$name','$dob','$city','$mobile','$exp','$drive','$acco')";
	
	//echo "<script>alert('dsad');</script>";

   	if(mysqli_query($conn,$sql)){
         header("Location:success.html");
       } 
else{
header("Location:failure.html");
}
}


?>