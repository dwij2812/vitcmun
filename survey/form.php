<?php
session_start();
require_once('config.php');
if($_SESSION["email"]!=true)
{
	header("Location:index.php");
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/demo.css">
<link rel="stylesheet" href="CSS/form-labels-on-top.css">
<link rel="stylesheet" href="CSS/scrollbar.css">
<meta charset="utf-8">
<title>VITCMUN : Agenda Voting</title>
<style type="text/css">
.mycss
{
font-weight:normal;color:#FFDD00;background-color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:28px;text-align:center;font-family:arial, helvetica, sans-serif;line-height:1;margin:0px;padding:18px;
}
</style>
</head>
<body style="background-color:#1c1c1c">
	<header>
		<h1>VITCMUN: Agenda Voting</h1>
    </header>
	<br><br><br><br><br>
    <div class="main-content" align="left">
        <form class="form-labels-on-top" method="POST" action="submitted.php">
					<b><h4>Select your Agenda</h4></b><br>
	      <h3 class="mycss"><b>European Council</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1EC" value="Agenda 1EC" checked>Agenda 1EC<br>
			<input type="radio" name="ans_1EC" value="Agenda 2EC">Agneda 2EC<br>
			<input type="radio" name="ans_1EC" value="Agenda 3EC">Agenda 3EC<br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>United Nations Commission on the Status of Women</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 1UNSCW" checked>Agenda 1UNSCW<br>
			<input type="radio" name="ans_1UNCSW" value="Agenda 2UNSCW">Agenda 2UNSCW<br>
			<input type="radio" name="ans_3UNCSW" value="Agenda 3UNSCW">Agenda 3UNSCW<br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>All India Political Parties Meet</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 1AIPPM" checked>Agenda 1AIPPM<br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 2AIPPM">Agenda 2AIPPM<br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 3AIPPM">Agenda 3AIPPM<br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Disarmament and International Security</b></h3>
			<div align="left">
				<br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 1DISEC" checked>Agenda 1DISEC<br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 2DISEC">Agenda 2DISEC<br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 3DISEC">Agenda 3DISEC<br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>White House Situation Room</b></h3>
		  <div align="left">
				<br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 1WHSW" checked>Agenda 1WHSW<br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 2WHSW">Agenda 2WHSW<br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 3WHSW">Agenda 3WHSW<br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Security Council</b></h3>
			<div align="left">
				<br>
		      <input type="radio" name="ans_1SC" value="Agenda 1SC" checked>Agenda 1SC<br>
		      <input type="radio" name="ans_1SC" value="Agenda 2SC">Agenda 2SC<br>
		      <input type="radio" name="ans_1SC" value="Agenda 3SC">Agenda 3SC<br>
			 <br>
			 <br>
			</div>
			<h3 class="mycss"><b>International Press</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1IP" value="Agenda 1IP" checked>Prague<br>
			<input type="radio" name="ans_1IP" value="Agenda 2IP">Venice<br>
			<input type="radio" name="ans_1IP" value="Agenda 3IP">London<br>
			<br>
			</div>
			<div align="center" style="font-size: 20px;border-radius: 5px">
			<div class="form-row">
                <button name="form1" type="submit" style="display: block; margin: 0 auto;" >Click to Proceed</button>
            </div>
		</div>
		</form>
	</div>
	<br><br><br>
	<footer>
		<h3><center><font color="white">VITCMUN - Tech Team</font></center></h3>
    </footer>
</body>
</html>
