<?php

session_start();

//header("Location:www.google.com");

if(isset($_POST['form1'])){

	$_SESSION['name'] = $_POST["name"];
	$_SESSION['dob'] = $_POST["DOB"];
	$_SESSION['city'] = $_POST["city"];
	$_SESSION['mobile'] = $_POST["mobileno"];
	$_SESSION['email'] = $_POST["email"];
	$_SESSION['college'] = $_POST["college"];
	//echo "<script>alert('adasd');</script>";
	header("Location:page2.html");

}

 if(isset($_POST['form2'])){
	$db = $_SESSION['db'];
 	$_SESSION['db'] = $_POST["Delegate-experience"];
 	//$_SESSION['dbn']=$_POST["Del-experience-no"];
 	$_SESSION['eb'] = $_POST["eb-experience"];
	//$_SESSION['ebn']=$_POST["eb-experience-no"];
  	$_SESSION['str'] = $_POST['str'];
  	$_SESSION['vid'] = $_POST['vid'];
  	echo "<script>
  	function sendData(){
  count=0;
  str='';
  vid='UNGA DISEC';
  textin = 'echo $db'.toUpperCase();
  council=['UNGA DISEC','EC','SECURITY COUNCIL','ALL INDIA POLITICAL PARTY MEET','UNSCW','WHSR'];
  dict={'ud':'DISEC','ec':'EC','sc':'UNSC','aipp':'AIPPM','uncsw':'UNCSW','whsr':'WHSR'};
  post=['Chair','Vice Chair','Director'];
  dict1={'c':'CHAIR','vc':'VICE CHAIR','d':'DIRECTOR'};

  for(i=0;i<council.length;i++){
     res = textin.match(council[i]);

     if(res && res.length>count){
       count=res.length;
       str=council[i];
       for(x in dict){
        if(dict[x]==str)
        vid=x;
       }
     }
   }

   window.open('page3_1.php?str='+str,'_self');
}
</script><button id='aa' onclick='sendData()' hidden>aaaa</button><script>document.getElementById('aa').click();</script>";
 	//echo $_SESSION['experience'].$_SESSION['drive'];
 	//header("Location:page3_1.html");
 }

 if(isset($_POST['form31'])){
 	//echo "<script>alert('sadasda');</script>";
 	$_SESSION['council1'] = $_POST["council-preference-1"];
 	header("Location:page4_1.html");

 }

if(isset($_POST['form41'])){
 	$_SESSION['que1'] = $_POST["Q1"];
 	header("Location:page4_2.html");

 }

 if(isset($_POST['form42'])){
 	$_SESSION['que2'] = $_POST["Q2"];
 	header("Location:page5.html");

 }

if(isset($_POST['final_button'])){
 	$_SESSION['accomodation'] = $_POST["checkbox"];
	$_SESSION['poscons'] = $_POST["consent"];

//echo "jww";
	$name = addslashes($_SESSION['name']);
 	$dob = $_SESSION['dob'];
 	$city = addslashes($_SESSION['city']);
 	$mobile = $_SESSION['mobile'];
 	$email = addslashes($_SESSION['email']);
	$college= $_SESSION['college'];

	$db = addslashes($_SESSION['db']);
 	$eb = addslashes($_SESSION['eb']);


 	$c1 = $_SESSION['council1'];



	$q1 = addslashes($_SESSION['que1']);
	$q2 = addslashes($_SESSION['que2']);

	$accomodation = $_SESSION['accomodation'];
	$consent = $_SESSION['poscons'];

	$server = "mysql.hostinger.in";
	$username = "u720206343_tech";
	$password = "tech123";
	$dbname = "u720206343_vitcc";

   // echo "<script>alert("Hello")</script>";


   	$conn = mysqli_connect($server, $username, $password, $dbname);

   	if($conn){
   	    echo("asdsa");
   	}

   	$sql = "INSERT INTO ip VALUES('".$name."','".$dob."','".$city."','".$mobile."','".$email."','".$college."','".$db."','".$eb."','".$c1."','".$q1."','".$q2."','".$accomodation."','".$consent."')";

    //echo "<script>alert('dsad');</script>";

    //echo $sql;
    //echo $conn;
   	if(mysqli_query($conn,$sql)){
        //echo "<script>alert('mada');</script>";
        header("Location:success.html");
       }
else{
echo("<script>alert('It Failed');</script>");
header("Location:failure.html");
}
}


?>
<!DOCTYPE html>
<html>
<script type="text/javascript">

</script>
<script type="text/javascript" src="frontend.js"></script>
<head>
	<title></title>
</head>
<body>

</body>
</html>
