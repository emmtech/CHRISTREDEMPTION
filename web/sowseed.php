<?php 
    include '../php/dbconnect.php';
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sowing of Seed</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/scrollup.js"></script>
<style>
    #myBtn{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border:none;
        outline: none;
        background-color: red;
        color: white;
        cursor:pointer;
        padding:15px;
        border-radius: 10px;
    }
    #myBtn:hover{
        background-color: #555;
    }
	.modalDialog {
position: fixed;
font-family: Arial, Helvetica, sans-serif;
top: 0;
right: 0;
bottom: 0;
left: 0;
background: rgba(0,0,0,0.8);
z-index: 99999;
opacity:0;
-webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
pointer-events: none;
}
.modalDialog:target {
opacity:1;
pointer-events: auto;
}
.modalDialog > div {
width: 400px;
position: relative;
margin: 10% auto;
padding: 5px 20px 13px 20px;
border-radius: 10px;
background: #fff;
background: -moz-linear-gradient(#fff, #999);
background: -webkit-linear-gradient(#fff, #999);
background: -o-linear-gradient(#fff, #999);
}
.close {
background: #606061;
color: #FFFFFF;
line-height: 25px;
position: absolute;
right: 200px;
text-align: center;
bottom: 150px;
width: 24px;
text-decoration: none;
font-weight: bold;
-webkit-border-radius: 12px;
-moz-border-radius: 12px;
border-radius: 12px;
-moz-box-shadow: 1px 1px 3px #000;
-webkit-box-shadow: 1px 1px 3px #000;
box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }

</style>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">The Sacred C &amp; S Church, Christ Redemption International</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php"><span></span>Home</a></li> 
                    <li><a href="wordoflife.php"><span></span>The Message</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Programmes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../ourprogrammes/programmes.php"><span></span>Order of Programmes</a></li>
                            <li><a href="../ourprogrammes/orderofservice.php"><span></span>Order of Service</a></li>
                        </ul>
                    </li>
                    <li><a href="../seed/sowseed.php"><span></span>Sow Seed</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span></span>Church History</a></li>
                            <li><a href="aboutcherubimandseraphimchurch.php"><span></span>Sacred C & S Church History</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php"><span></span>Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-4">
            	<img class="img-rounded img-responsive" src="../images/sow4.jpg" width="332" height="152"/>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-lg-4">
           		 <img class="img-rounded img-responsive" src="../images/tithe.jpg" width="332" height="152" />
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-lg-4">
            	<img class="img-rounded img-responsive" src="../images/building.jpg" width="332" height="152" />
            </div>
        </div>
    </div>
              <?php
                    $salErr = $fnameErr = $amountErr = $seedErr = $phoneErr = $email ="";
                    if(isset($_POST['submit'])){
                        $salute = $_POST['salutes'];
                        $fname = $_POST['fname'];
                        $amount = $_POST['amount'];
                        $email = $_POST['email'];
                        $seed = $_POST['seed'];
                        $phone = $_POST['phone'];
                        
                       if(!empty($salute) && !empty($fname) && !empty($amount) && !empty($seed) && !empty($phone)){
                           //$sql = "INSERT INTO `irapada` VALUES(null, '".htmlentities($salute)."', '".htmlentities($fname)."', '".htmlentities($amount)."', '".mysql_real_escape_string($email)."', '".htmlentities($seed)."', '".htmlentities($phone).'")";
                           $sql = "INSERT INTO `irapada` VALUES(null, '".test_input($salute)."', '".test_input($fname)."', '".test_input($amount)."', '$email', '".test_input($seed)."', '".test_input($phone)."')";
                           if($query = mysqli_query($dbconn, $sql)){
                               //header('Location: data-verification.php');
                               header('Location: ../../update.php');
                           }else{
                               echo "Error";
                           }
                       }else 
                           if(empty($salute)){
                           $salErr = "Salute must be chosen and not empty";
                       }if(empty($fname)){
                           $fnameErr = "Your fullname is required...";
                       }if(empty($amount)){
                           $amountErr = "The amount your giving should stated";
                       }if(empty($seed)){
                           $seedErr = "Choose what type of seed you are sowing for";
                       }if(empty($phone)){
                           $phoneErr = "Your phone number is needed";
                       }
                    }
                    
                    function test_input($data){
                        $data = trim($data);
                        $data = stripcslashes($data);
                        $data = htmlentities($data);
                        
                        return $data;
                    }
                ?>
  <button onClick="topFunction()" id="myBtn" title="Go To Top">Top</button>
  <h1>&emsp;</h1>
            <center><div id="openModal" class="modalDialog">
             <a href="" title="Close" class="close">Close</a>
	 				<table class="table table-responsive">
    						<form class="form-group-lg" action="" method="post">
                                        <tr>
                                            <td><select name="salutes" style="width:100%; height:30px">
                                                    <option selected="selected" value="">Salute</option>
                                                    <option value="Dr">Dr.</option>
                                                    <option value="Mr">Mr.</option>
                                                    <option value="Mrs">Mrs.</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                                 <center><span><?php echo "<i class='label-danger' style='color:#ffffff;'>" .$salErr ."</i>"; ?></span></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <input type="text" id="name" name="fname" placeholder="Full Name" size="45" class="input-group-lg" style="width:100%; height:30px"/>                                      
                                                <center><span><?php echo "<i class='label-danger' style='color:#ffffff;'>" .$fnameErr ."</i>"; ?></span></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <input type="text" name="amount" placeholder="Enter Amount in Naira" class="input-group-lg" style="width:100%; height:30px"/>
                                               <center><span><?php echo "<i class='label-danger' style='color:#ffffff;'>" .$amountErr ."</i>"; ?></span></center>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                   <input type="email" name="email" placeholder="Email address" class="input-group-lg" style="width:100%; height:30px"/>
                                            </td>
                                        </tr>
                                         <tr>
                                             <td>
                                                <select name="seed" class="input-group-lg" style="width:100%; height:30px">
                                                    <option selected="selected" value="">Sow Seed For What?</option>
                                                    <option value="Offering">Offering</option>
                                                    <option value="Tithe">Tithe</option>
                                                    <option value="Church Development">Church Development</option>
                                                </select>
                                                 <center><span><?php echo "<i class='label-danger' style='color:#ffffff;'>" .$seedErr ."</i>"; ?></span></center>
                                            </td>
                                         </tr>
                                        <tr>
                                            <td>
                                                
                                                   <input type="text" name="phone" placeholder="+234 80xxxxxxxx" class="input-group-lg" maxlength="11" style="width:100%; height:30px"/>
                                                <center><span><?php echo "<i class='label-danger' style='color:#ffffff;'>" .$phoneErr ."</i>"; ?></span></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <a href="#openModals"><input class="btn btn-success btn-block" type="submit" name="submit" value="Proceed"/></a>
                                            </td>
                                        </tr>
                               </form>
                            </table>
  </div>
  </center>
<div class="row">
        <div class="col-lg-12">
            <div>
                <h2>PAY YOUR TITHE</h2><em> Will a man rob God? yet ye rob me. But ye say, Wherein have we robbed thee? In tithes and offerings. Ye are cursed with the curse; for ye rob me, even this whole nation. Bring ye the whole tithe into the store-house, that there may be food in my house, and prove me now herewith, saith Jehovah of hosts, if I will not open you the windows of heaven, and pour you out a blessing, that there shall not be room enough to receive it . And I will rebuke the devourer for your sakes, and he shall not destroy the fruits of your ground; neither shall your vine cast its fruit before the time in the field, saith Jehovah of hosts. And all nations shall call you happy; for ye shall be a delightsome land, saith Jehovah of hosts.</em><i class="text-success bg-primary"> Malachi 3:8-12</i>&nbsp;<a href="#openModal">Click here to pay your tithe</a>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-12">
            <div>
                <h2>SOWING SEED</h2><em>And he said, So is the kingdom of God, as if a man should cast seed upon the earth; and should sleep and rise night and day, and the seed should spring up and grow, he knoweth not how. The earth beareth fruit of herself; first the blade, then the ear, then the full grain in the ear. But when the fruit is ripe, straightway he putteth forth the sickle, because the harvest is come.
</em><i class="text-success bg-primary"> Mark 4:26-29</i>&nbsp;<a href="#openModal">Click here to sow a seed</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2>CHURCH DEVELOPMENT</h2><em>You can as well support the church development financially and this will be a great turn around in your life and family. It is a great thing to support the church financially.</em>&nbsp;<a href="#openModal">Click here to support the church development</a>
            </div>
        </div>
    </div>
    <hr />
    <div class="container">
    <!--<nav id="myNavBar" class="navbar-default navbar-inverse container-fluid navbar-collapse collapse" role="navigation">-->
    <div class="row">
        <div class="col-lg-3">
        <h3>Social Links</h3>
           <div style="margin-left:20px;">
                <img src="../images/facebook.png" class="img-responsive" width="30" height="30" title="Christ Redemption International Facebook Page"/>
                <strong style="font-size:14px"><a href="" class="text-info" title="Christ Redemption International Facebook Page">Facebook</a></strong><br />
                <img src="../images/gmail.png" class="img-responsive" width="30" height="30" title="Christ Redemption International Gmail"/>
                <strong style="font-size:14px"><a href="http://christredemptioninternationalchurch@gmail.com"  class="text-danger" title="Christ Redemption International Gmail">Gmail</a></strong><br />
                <img src="../images/whatsapp.png" class="img-responsive" width="30" height="30" title="Christ Redemption International Gmail"/>
                <strong style="font-size:14px"><a href=""  class="text-success" title="Christ Redemption International WhatsApp">WhatsApp</a></strong><br />
           </div>
        </div>
        <div class="col-lg-3">
            <h3>External Links</h3>
            <div style="margin-left:-50px;">
            	<ul class="pager">
                	<li><a href="">Sermons</a></li>
                    <li><a href="">Daily Manna</a></li>
                    <li><a href="">Words of Inspiration</a></li>
                    <li><a href="">Evangelical Tracts</a></li>
                    <li><a href="">Deliberations</a></li>
                </ul>
             </div>
        </div>
        <script>
        	$(document).ready(function(){

                $("#next").click(function(){
                    $("#test1").hide();
                    $("#test2").show();
                });
                $("#prev2").click(function(){
                    $("#test2").hide();
                    $("#test1").show();
                });
            });
        </script>
        <script>
            $(document).ready(function(){

                $("#next2").click(function(){
                    $("#test2").hide();
                    $("#test3").show();
                });
                $("#prev3").click(function(){
                    $("#test3").hide();
                    $("#test2").show();
                });
            });
            </script>
             <script>
            $(document).ready(function(){

                $("#next3").click(function(){
                    $("#test3").hide();
                    $("#test4").show();
                });
                 $("#prev4").click(function(){
                    $("#test4").hide();
                    $("#test3").show();
                });
            });
            </script>
             <script>
            $(document).ready(function(){

                $("#next4").click(function(){
                    $("#test4").hide();
                    $("#test5").show();
                });
                 $("#prev5").click(function(){
                    $("#test5").hide();
                    $("#test4").show();
                });
            });
            </script>

        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3">
            <h3>Testimonies</h3>
            <div class="breadcrumb">
            	<div id="test1">
                    <h4 class="badge">Johnson Gabriel</h4>
                    <p style="font-family:serif"><img src="../images/avatar3.png" width="50" height="50"/>I give God all the glory for the salvation of mt soul. I give God all the glory for saving the life of my family, thank you Lord.</p>
                    <div><button class="pull-left badge" id="prev" style="display:none">&lt;&lt;Prev</button><button class="pull-right badge" id="next">Next&gt;&gt;</button></div>
                </div>
                <div id="test2" style="display:none">
                    <h4 class="badge">Emmanuel Omotayo</h4>
                    <p style="font-family:serif"><img src="../images/avatar4.png" width="50" height="50"/>Glory be to God Almighty for His benevelonce and love for promoting me at my place of work and giving me a new bouncing baby boy.</p>
                    <div><button class="pull-left badge" id="prev2">&lt;&lt;Prev</button><button class="pull-right badge" id="next2">Next&gt;&gt;</button></div>
                </div>
                 <div id="test3" style="display:none" >
                    <h4 class="badge">Seyi Johnson</h4>
                    <p style="font-family:serif"><img src="../images/avatar1.png" width="50" height="50"/>I give God all the glory for the salvation of mt soul. I give God all the glory for saving the life of my family, thank you Lord.</p>
                    <div><button class="pull-left badge" id="prev3">&lt;&lt;Prev</button><button class="pull-right badge" id="next3">Next&gt;&gt;</button></div>
                </div>
                 <div id="test4" style="display:none">
                    <h4 class="badge">Taiwo Seun</h4>
                    <p style="font-family:serif"><img src="../images/avatar1.png" width="50" height="50"/>I give God all the glory for the salvation of mt soul. I give God all the glory for saving the life of my family, thank you Lord.</p>
                    <div><button class="pull-left badge" id="prev4">&lt;&lt;Prev</button><button class="pull-right badge" id="next4">Next&gt;&gt;</button></div>
                </div>
                 <div id="test5" style="display:none">
                    <h4 class="badge">Fikemi Olawale</h4>
                    <p style="font-family:serif"><img src="../images/avatar1.png" width="50" height="50"/>I give God all the glory for the salvation of mt soul. I give God all the glory for saving the life of my family, thank you Lord.</p>
                    <div><button class="pull-left badge" id="prev5">&lt;&lt;Prev</button><button class="pull-right badge" id="next5" style="display:none">Next&gt;&gt;</button></div>
                </div>
            </div>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-lg-3">
            <h3>Search Words</h3>
            <form action="" method="post">
            	<input type="text" name="search" style="height:30px" placeholder="Enter search&hellip;" />
                <button class="btn btn-danger">Go!</button>
            </form>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <footer class="container">
                <p>&copy; Copyright <?php echo date('Y');?> Christ Redemption International</p>
            </footer>
        </div>
    </div>
</div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
