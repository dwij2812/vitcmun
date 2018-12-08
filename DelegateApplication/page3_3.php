<?php
session_start();
if(!isset($_SESSION['p11'])){
header("Location:page3_1.php");
}

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="theme-color" content="#000000" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VITCMUN: Delegate Applications</title>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-labels-on-top.css">
	<link rel="stylesheet" href="assets/scrollbar.css">
	<script src="gen_validatorv4.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body bgcolor="#1c1c1c">

	<header>
		<h1>VITCMUN: Delegate Applications</h1>
    </header>
	<br><br>
    <div class="main-content animated fadeInRight">
        <form class="form-labels-on-top" method="post" action="request.php" id="form1">
            <div class="form-title-row">
                <h1>Was one of your preference Arab League?</h1>
            </div>
            <div class="form-row">
                <label>
                    <span>Full Name of your partner</span>
                    <input type="text" name="name" id="name">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email of your partner</span>
                    <input type="text" name="email" id="email" >
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Mobile Number of your partner</span>
                    <input type="text" name="phone" pattern="[789][0-9]{9}">
                </label>
            </div>

            <div class="form-row">
                <button name="button_3_3" type="1sub" style="display: block; margin: 0 auto;" >Proceed</button>
            </div>

        </form>
				

    </div>
	<br><br>
	<footer>
		<h1>Debate.     Delegate.     Decimate.</h1>
    </footer>
</body>
</html>