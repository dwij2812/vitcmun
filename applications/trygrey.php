<?php
 session_start(); 


include 'session_home.php';

$max_ele = $_GET['max_ele'];
//$error=1;
$error = $_GET['error'];
session_start();

$server = "mysql.hostinger.in";
    $username = "u219096124_admin";
    $password = "AlphaBeta1!";
    $dbname = "u219096124_sur";
  $conn = mysqli_connect($server, $username, $password, $dbname) or die("Error Connecting to the server.");

  $sql_disec = "select country from disec";
  $sql_hrc = "select country from hrc";
  $sql_security = "select country from security";
  $sql_aippm = "select country from aippm";
  $sql_tc = "select country from tc";
  $sql_arab = "select country from arab";
  $sql_done = "select country from done_countries";


$stack = array("a");
                if ($result2=mysqli_query($conn,$sql_done))
                {
                    while ($row=mysqli_fetch_row($result2))
                    {
                    
                        
                        array_push($stack,$row[0]);

    
                    }
                }



print_r($stack);



?>
<!DOCTYPE html>
<html>

<head>

<!-- you have filled in a wrong country / character -->
<!-- you can not fill the same entry //// entry can not be the same. -->

  <meta charset="utf-8">
  <meta name="theme-color" content="#000000" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VITCMUN: Delegate Applications</title>
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="assets/form-labels-on-top.css">
  <script type="text/javascript" src="js/datalist.js"></script>

</head>

<div role="alert">

<a>asdsd</a>


</div>



<body bgcolor="#1c1c1c" onload="fn()">

  <script>
setInterval("fn()",1);
</script>

  <style type="text/css">
    input,select{
      min-width: 250px;
      max-width: 250px;
    }
    .special{
      background-color: black;
    }
  </style>
  <header>
    <h1>VITCMUN: Delegate Applications</h1>
    </header>
  <br><Br>
    <div class="main-content">
        <form class="form-labels-on-top" method="post" action="request.php" name="f1">

            <div class="form-title-row">
                <h1>Council Preference 1</h1>
            </div>
            <div class="form-row">
                <label>
                    <span>Council Preference</span>
                    <span>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

<div style="/* Popup container */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}">
<div class="popup" onclick="myFunction()">(Already selected according to your prior experience)
  <span class="popuptext" id="myPopup">Popup text...</span>
</div>
</div>
</span>
                    <select name="council-preference-1" id="cp1" required onclick="fn()">
                        <option id="0" value="0">UNGA-DISEC</option>
                        <option id="1" value="1">UN HRC</option>
                        <option  id="2" value="2">Security Council</option>
                        <option id="3" value="3">All India Political Parties Meet</option>
            <option id="4" value="4">Trilateral Commission</option>
            <option id="5" value="5">Arab League</option>
                    </select>

                </label>
            </div>
      <script type="text/javascript">
    var max_ele = "<?php echo $max_ele; ?>";
    //alert(max_ele);
    document.getElementById(max_ele).selected=true;
  </script>
      <div class="form-row">
                <label>
                    <span id="coun-pre-1">Country Preference 1</span>

                    <select list="disec1" name="disec1" id="idisec1" autocomplete="off" placeholder="DISEC" onclick="fn()" >
                    
                       
                        <?php 
                        
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                      if (in_array("$row[0]", $stack)){

                        //echo "<option class="special" value='$row[0]'>$row[0]</option>";

                      }
                      else{
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
                      }
                    }
                }
                
            ?>     
        </select>

                    


                    <select  name="hrc1" id="ihrc1" autocomplete="off" placeholder="HRC" hidden onclick="fn()">
                        <?php 
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
         </select>

           <select list="security1" name="security1" id="isecurity1" autocomplete="off" placeholder="SECURITY COUNCIL" hidden  onclick="fn()">
                   
                        <?php 
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
          </select>

          <select list="aippm1" name="aippm1" id="iaippm1" autocomplete="off" placeholder="AIPPM" hidden  onclick="fn()">
                    <datalist id="aippm1" name="d_aippm1">
                        <?php 
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="tc1" name="tc1" id="itc1" autocomplete="off" placeholder="TC" hidden  onclick="fn()">
                   
                        <?php 
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="arab1" name="arab1" id="iarab1" autocomplete="off" placeholder="ARAB LEAGUE" hidden  onclick="fn()">
                   
                      <?php 
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>




                </label>
            </div>
      
      <div class="form-row">
        <label >
            <span id="coun-pre-2">Country Preference 2</span>
          <select list="disec2" name="disec2" id="idisec2" autocomplete="off" placeholder="DISEC"  onclick="fn()">
                    
                       <?php 
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>


                    <select list="hrc2" name="hrc2" id="ihrc2" autocomplete="off" placeholder="HRC" hidden  onclick="fn()">
                    
                       <?php 
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
          </select>   

           <select list="security2" name="security2" id="isecurity2" autocomplete="off" placeholder="SECURITY COUNCIL" hidden onclick="fn()">
                    
                       <?php 
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
          </select>

          <select list="aippm2" name="aippm2" id="iaippm2" autocomplete="off" placeholder="AIPPM" hidden onclick="fn()">
                   
                       <?php 
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="tc2" name="tc2" id="itc2" autocomplete="off" placeholder="TC" hidden onclick="fn()">
                   
                       <?php 
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="arab2" name="arab2" id="iarab2" autocomplete="off" placeholder="ARAB COMMISSION" hidden onclick="fn()">
                    
                       <?php 
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>
        </label>
            </div>

      <div class="form-row">
        <label>
            <span id="coun-pre-3">Country Preference 3</span>
          <select list="disec3" name="disec3" id="idisec3" autocomplete="off" placeholder="DISEC" onclick="fn()" >
                    
                       <?php 
                if ($result=mysqli_query($conn,$sql_disec))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>


                    <select list="hrc3" name="hrc3" id="ihrc3" autocomplete="off" placeholder="HRC" hidden onclick="fn()">
                   
                      <?php 
                if ($result=mysqli_query($conn,$sql_hrc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
          </select>   

           <select list="security3" name="security3" id="isecurity3" autocomplete="off" placeholder="SECURITY COUNCIL" hidden onclick="fn()">
                    
                      <?php 
                if ($result=mysqli_query($conn,$sql_security))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
          </select>

          <select list="aippm3" name="aippm3" id="iaippm3" autocomplete="off" placeholder="AIPPM" hidden onclick="fn()">
                   
                       <?php 
                if ($result=mysqli_query($conn,$sql_aippm))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="tc3" name="tc3" id="itc3" autocomplete="off" placeholder="TC" hidden onclick="fn()">
                   
                       <?php 
                if ($result=mysqli_query($conn,$sql_tc))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>

                    <select list="arab3" name="arab3" id="iarab3" autocomplete="off" placeholder="ARAB LEAGUE" hidden onclick="fn()">
                   
                       <?php 
                if ($result=mysqli_query($conn,$sql_arab))
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>$row[0]</option>"; // Format for adding options
    
                    }
                }
                
            ?>     
                    </select>
        </label>
            </div>



            <div class="form-row">
                <button name="button_3_1" type="3_sub" style="display: block; margin: 0 auto;">Proceed</button>
            </div>
        </form>
    </div>
  <br><br>
  <footer>
    <h1>Debate.     Delegate.     Decimate.</h1>
    </footer>
    <?php 
    //echo("<script>window.alert('$error');</script>");
  if($error==1){
    echo("<script>window.alert('Any 2 entries can not be the same');</script>");
  }
  ?>
</body>
</html>