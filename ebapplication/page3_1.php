<?php

$str = $_GET["str"];
//$vid = $_GET["vid"];

?>
<!DOCTYPE html>
<html>

<head>


    <script type="text/javascript">
    function load(){
        //alert('asda');
        var str = "<?php echo $str ?>";
        //var vid = "<?php echo $vid ?>";
        //alert(str);
        //alert(vid);
        if(str!='')
        {
            //alert('src');
            //alert(vid);
            document.getElementById('cp').value=str;
            //document.getElementById('pp').value=vid;
        }
    }
    </script>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VITCMUN: Executive Board Applications</title>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-labels-on-top.css">

</head>
<body bgcolor="#1c1c1c" onload="load()">

	<header>
		<h1>VITCMUN: Executive Board Applications</h1>
    </header>
	<br><Br>
    <div class="main-content">
        <form class="form-labels-on-top" method="POST" action="request.php">

            <div class="form-title-row">
                <h1>Council Preference 1</h1>
            </div>
						<h4><font color="#f23737">&#42 Based upon the responses recieved from you</font></h4>
            <div class="form-row">
                <label>
                    <span>Council Preference</span>
                    <select name="council-preference-1" id="cp" required>
                        <option id="ud">UNGA DISEC</option>
                        <option id="uh">UN HRC</option>
                        <option id="sc">SECURITY COUNCIL</option>
                        <option id="aipp">ALL INDIA POLITICAL PARTY MEET</option>
						<option id="tc">TRILATERAL COMMISSION</option>
						<option id="al">ARAB LEAGUE</option>
                    </select>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Position Preference</span>
                    <select name="position-preference-1" id="pp" required>
                        <option id="c" value="chair">CHAIR</option>
                        <option id="vc" value="vice chair" >VICE CHAIR</option>
                        <option id="d">DIRECTOR</option>
                    </select>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Suggested Agenda 1:</span>
                    <input type="text" name="sa11" required>
                </label>
            </div>

			<div class="form-row">
                <label>
                    <span>Suggested Agenda 2:</span>
                    <input type="text" name="sa12" required>
                </label>
            </div>



            <div class="form-row">
                <button name="form31" type="3_1sub" style="display: block; margin: 0 auto;" >Proceed</button>
            </div>
        </form>
    </div>
	<br><br>
	<footer>
		<h1><b>Debate.     Delegate.     Decimate.</b></h1>
    </footer>
</body>
</html>
