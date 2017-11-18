<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Christ Redemption International Church</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                    <li><a href="../themessage/wordoflife.php"><span></span>The Message</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Programmes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../ourprogrammes/programmes.php"><span></span>Order of Programmes</a></li>
                            <li><a href="../ourprogrammes/orderofservice.php"><span></span>Order of Service</a></li>
                        </ul>
                    </li>
                    <li><a href="sowseed.php"><span></span>Sow Seed</a></li>
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
        <h3>You can contact us via the contact form. You can as well post your testimonies and as well as prayer requests. </h3>
    </div>
     <div class="row">
        <div class="col-lg-10">
        <?php include ("../php/contactconnect.php"); ?>
        	<h3>Contact Us</h3>
           <table class="table table-responsive">
            <form class="form-group-lg" action="" method="post">
            	<tr>
                                   <td><b>Your Name: <em style="color:red;">(required)</em></b><br /><input class="input-group-lg" type="text" name="fullname" maxlength="100" style="width:100%; height:30px; font-feature-settings: inherit; font-size:18px"/><br /><?php echo "<i style='color:red'>".$nameErr."</i>" ?></td>
                               </tr>
                               <tr>
                                   <td><b>Email: <em style="color:red;">(required)</em></b><br /><input class=" input-group-lg" type="email" name="email" maxlength="100" style="width:100%; height:30px; font-size:18px" /><br /> <?php echo "<i style='color:red'>".$emailErr."</i>" ?></td>
                               </tr>
                               <tr>
                                   <td><b>Subject: <em style="color:red;">(required)</em></b><br /><input class=" input-group-lg" type="text" name="subject" maxlength="100" style="width:100%; height:30px; font-size:18px"/><br /> <?php echo "<i style='color:red'>".$subErr."</i>" ?> </td>
                               </tr>
                               <tr>
                                   <td><b>Description: <em style="color:red;">(required)</em></b><br /><textarea class="input-group-lg" name ="desc" id="textarea" cols="20" rows="10" style="width:100%; font-size:18px " onKeyPress="myCount()"></textarea><br /> <?php echo "<i style='color:red'>".$descErr."</i>"  ?> </td>
                               </tr>
                               <tr>&emsp;</tr>
                               <tr>
                                   <td><input class="btn btn-success btn-block" type="submit" name="submit" value="Submit Request!" style="width:100%"/></td>
                               </tr>
            </form>
        </table>
        </div>
    </div>
    <hr>
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
                    <div><button class="pull-left badge" id="prev5">&lt;&lt;Prev</button><button class="pull-right badge" id="next5" style="display:none;">Next&gt;&gt;</button></div>
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
