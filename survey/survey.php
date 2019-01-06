<?php
session_start();
require_once('config.php');
$queryf="select * from testresponse where 1";
$queryf_run=mysqli_query($con,$queryf);
$rows=mysqli_num_rows($queryf_run);
$query="select * from response where 1";
$query_run=mysqli_query($con,$query);
$result=mysqli_fetch_array($query_run);
$a1ec=(($result['agenda_1ec'])/($rows))*100;
$a2ec=(($result['agenda_2ec'])/($rows))*100;
$a3ec=(($result['agenda_3ec'])/($rows))*100;
$a1unscw=(($result['agenda_1unscw'])/($rows))*100;
$a2unscw=(($result['agenda_2unscw'])/($rows))*100;
$a3unscw=(($result['agenda_3unscw'])/($rows))*100;
$a1aippm=(($result['agenda_1aippm'])/($rows))*100;
$a2aippm=(($result['agenda_2aippm'])/($rows))*100;
$a3aippm=(($result['agenda_3aippm'])/($rows))*100;
$a1disec=(($result['agenda_1disec'])/($rows))*100;
$a2disec=(($result['agenda_2disec'])/($rows))*100;
$a3disec=(($result['agenda_3disec'])/($rows))*100;
$a1whsw=(($result['agenda_1whsw'])/($rows))*100;
$a2whsw=(($result['agenda_2whsw'])/($rows))*100;
$a3whsw=(($result['agenda_3whsw'])/($rows))*100;
$a1sc=(($result['agenda_1sc'])/($rows))*100;
$a2sc=(($result['agenda_2sc'])/($rows))*100;
$a3sc=(($result['agenda_3sc'])/($rows))*100;
$a1ip=(($result['agenda_1ip'])/($rows))*100;
$a2ip=(($result['agenda_2ip'])/($rows))*100;
$a3ip=(($result['agenda_3ip'])/($rows))*100;
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VITCMUN: Agenda Results </title>
	<link rel="stylesheet" href="CSS\demo.css">
	<link rel="stylesheet" href="CSS\form-labels-on-top.css">
	<link rel="stylesheet" href="CSS\scrollbar.css">
  <style type="text/css">
  .mycss
  {
  font-weight:normal;color:#FFDD00;background-color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:20px;text-align:center;font-family:arial, helvetica, sans-serif;line-height:1;margin:0px;padding:18px;
  }
  </style>
</head>
<body bgcolor="#1c1c1c">
	<header>
		<h1>VITCMUN: Agenda Voting</h1>
    </header>
	&nbsp;&nbsp;<br><br><br><br><br>
    <div class="main-content">
        <form class="form-labels-on-top">
          <b><h1>Thank you</h1></b><br>
					<div class="form-row">
							Your Response has been recorded, see you at VITCMUN'19.
					</div>
        </form>
    </div>
	<br><br>
	<footer>
		<h3><center><font color="white">VITCMUN - Tech Team</font></center></h3>
    </footer>
</body>
</html>
