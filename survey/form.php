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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>VITCMUN : Agenda Voting</title>
<style type="text/css">
.mycss
{
font-weight:normal;color:#FFFFFF;background-color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:28px;text-align:center;font-family:arial, helvetica, sans-serif;line-height:1;margin:0px;padding:18px;border-radius: 25px;
}
.form-radio
{
     -webkit-appearance: none;
     -moz-appearance: none;
     appearance: none;
     display: inline-block;
     position: relative;
     background-color: #f1f1f1;
     color: #000000;
     top: 10px;
     height: 30px;
     width: 30px;
     border: 0;
     border-radius: 50px;
     cursor: pointer;
     margin-right: 7px;
     outline: none;
}
.form-radio:checked::before
{
     position: absolute;
     font: 13px/1 'Open Sans', sans-serif;
     left: 11px;
     top: 7px;
     content: '\02143';
     transform: rotate(40deg);
		 color: #ffffff;
}
.form-radio:hover
{
     background-color: #333333;
}
.form-radio:checked
{
     background-color: #000000;
}
label
{
     font: 300 16px/1.7 'Open Sans', sans-serif;
     color: #666;
     cursor: pointer;
}
input[type="radio"] {
  margin-right: 4px;
	margin-bottom:10px;
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
			<input type="radio" name="ans_1EC" value="Agenda 1EC" class="form-radio">Reviewing European Union's policy in the following fields: a) Migration  b) Internal Security  c) Fiscal and Monetary Union's future<br><br>
			<input type="radio" name="ans_1EC" value="Agenda 2EC" class="form-radio">Developing an integrated cooperation between the countries of the EC to foster a better implementation of the Sustainable development goals.<br><br>
			<input type="radio" name="ans_1EC" value="Agenda 3EC" class="form-radio">Addressing the issue of rising euroscepticism.<br>
			<input type="radio" name="ans_1EC" value="NIL" class="form-radio" checked>No Preference<br><br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>United Nations Commission on the Status of Women</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 1UNSCW" class="form-radio">Addressing the role of women in capacity building efforts in post conflict zones.<br><br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 2UNSCW" class="form-radio">Addressing the wage gap with emphasis on anti discriminatory laws in the workplace.<br><br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 3UNSCW" class="form-radio">Furthering Women’s Participation in and Access to Information and Communication Technologies<br><br>
			<input type="radio" name="ans_1UNSCW" value="NIL" class="form-radio" checked>No Preference<br><br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>All India Political Parties Meet</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 1AIPPM" class="form-radio">Discussing the repercussions of internal political corruption on international deals with special emphasis on the Rafale deal.<br><br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 2AIPPM" class="form-radio">Reviewing the Independence of Statutory and Constitutional Bodies.<br><br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 3AIPPM" class="form-radio">Deliberating the role of political parties in fuelling conflict amongst religious communities, with speacial emphasis on the current situation in Kerala and Uttar Pradesh.<br><br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 4AIPPM" class="form-radio">A discussion on the Women’s Reservation Bill.<br><br>
			<input type="radio" name="ans_1AIPPM" value="NIL" class="form-radio" checked>No Preference<br><br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Disarnament and International Security</b></h3>
			<div align="left">
				<br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 2DISEC" class="form-radio">Updating the biological weapons convention<br><br>
			<input type="radio" name="ans_1DISEC" value="Agenda 1DISEC" class="form-radio">Combating arms proliferation aiding illegal drug trafficking<br><br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 3DISEC" class="form-radio">Establishing a roadmap for the implementation of the Comprehensive Nuclear Test Ban Treaty<br><br>
			<input type="radio" name="ans_1DISEC" value="NIL" class="form-radio" checked>No Preference<br><br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>White House Situation Room</b></h3>
		  <div align="left">
				<br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 1WHSW" class="form-radio">Cuban Missile Crisis<br><br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 2WHSW" class="form-radio">Futuristic Syria Timeline <br><br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 3WHSW" class="form-radio">Events leading up to 26 December 1991<br><br>
			<input type="radio" name="ans_1WHSR" value="NIL" class="form-radio" checked>No Preference<br><br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Security Council</b></h3>
			<div align="left">
				<br>
		      <input type="radio" name="ans_1SC" value="Agenda 1SC" class="form-radio">Futuristic continuous crisis committee.<br><br>
		      <input type="radio" name="ans_1SC" value="Agenda 2SC" class="form-radio">The Question of Sovereignty with special emphasis to Mali, Syria and Ukraine.<br><br>
		      <input type="radio" name="ans_1SC" value="Agenda 3SC" class="form-radio">Reviewing security implications in the Islamic Republic of Iran in light of the withdrawal of the United States Of America from the JCPOA.<br><br>
					<input type="radio" name="ans_1SC" value="NIL" class="form-radio" checked>No Preference<br><br>
			 <br>
			 <br>
			</div>
			<!--h3 class="mycss"><b>International Press</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1IP" value="Agenda 1IP" checked>Prague<br>
			<input type="radio" name="ans_1IP" value="Agenda 2IP">Venice<br>
			<input type="radio" name="ans_1IP" value="Agenda 3IP">London<br>
			<br>
		</div-->
			<div align="center" style="font-size: 20px;border-radius: 5px">
			<div class="form-row">
                <button name="form1" type="submit" style="display: block; margin: 0 auto;border-radius: 25px;" >Click to Proceed</button>
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
