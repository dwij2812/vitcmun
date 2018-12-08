<?php

session_start();
if(!isset($_SESSION['name'])){
header("Location:index.html");
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body bgcolor="#1c1c1c">

	<header>
		<h1>VITCMUN: Delegate Applications</h1>
    </header>
	<br><Br>
    <div class="main-content animated fadeInRight">
        <form class="form-labels-on-top" method="post" action="request.php">

            <div class="form-title-row">
                <h1>Tell us more about you</h1>
            </div>
            <div class="form-row">
                <label>
                    <span>Delegate Experience</span>
                    <textarea name="Delegate-experience" cols="40" rows="5" required></textarea>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Executive Board Experience</span>
                    <textarea name="eb-experience" cols="40" rows="5" required></textarea>
                </label>
            </div>
            <div class="form-row">
                <button type="2sub" style="display: block; margin: 0 auto;" name="button_2">Proceed</button>
            </div>
        </form>
    </div>
	<br><br>
	<footer>
		<h1>Debate.     Delegate.     Decimate.</h1>
    </footer>
</body>
</html>