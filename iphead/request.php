<?php
session_start();
if(isset($_POST['pro']))
{
	$_SESSION['fname']=$_POST['name'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['dob']=$_POST['DOB'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['mno.']=$_POST['mobileno'];
	header("Location:page2.html");
}
if(isset($_POST['info']))
{
	$_SESSION['text']=$_POST['Delegate-experience'];
	header("Location:page3_1.html");
}
if(isset($_POST['ans']))
{
	$_SESSION['text2']=$_POST['Q1'];
	header("Location:page3_2.html");
}
if(isset($_POST['pass']))
{
	$_SESSION['text3']=$_POST['Q2'];
	header("Location:page4.html");
}
if(isset($_POST['clk']))
{
	
	
	$_SESSION['accomodation'] = $_POST["accomo"];


	//echo "<script>alert('dsad');</script>";
 	$name = addslashes($_SESSION['fname']);
 	$dob = $_SESSION['dob'];
 	$city = addslashes($_SESSION['city']);
 	$mobile = $_SESSION['mno.'];
 	$email = addslashes($_SESSION['email']);
 	$exp = addslashes($_SESSION['text']);
 	$judg = addslashes($_SESSION['text2']);
	$ans = addslashes($_SESSION['text3']);
	$accomodation = $_SESSION['accomodation'];
	
    $server = "mysql.hostinger.in";
    $username = "u219096124_admin";
    $password = "AlphaBeta1!";
    $dbname = "u219096124_sur";
	//echo $exp.$judg.$ans;

   	$conn = mysqli_connect($server, $username, $password, $dbname);

   	$sql = "INSERT INTO student_ip(fname,dob,city,mobile,email,exp,jud,ans,accomodation) values('$name','$dob','$city','$mobile','$email','$exp','$judg','$ans','$accomodation')";
	
	//echo "<script>alert('dsad');</script>";

   	if(mysqli_query($conn,$sql)){
         header("Location:success.html");
       } 
}



?>