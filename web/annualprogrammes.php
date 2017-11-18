<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Christ Redemption International Church</title>
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
	
	.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}
.containers {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.containers::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .containers {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .containers::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
.content h2{
    color:#999900;
}
.tables {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
}
.tables a{
      font-style: italic;
}
.tables a:hover{
    margin-left:40px;
}

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
                            <li><a href="annualprogrammes.php"><span></span>Annual Programmes</a></li>
                            <li><a href="../ourprogrammes/orderofservice.php"><span></span>Order of Service</a></li>
                        </ul>
                    </li>
                    <li><a href="sowseed.php"><span></span>Sow Seed</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span></span>Church History</a></li>
                            <li><a href="aboutcherubimandseraphim.php"><span></span>Sacred C & S Church History</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php"><span></span>Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="jumbotron bg-danger">
        <h2>The Annual Church Programmes</h2>
    </div>
    <button onClick="topFunction()" id="myBtn" title="Go To Top">Top</button>
     <div class="row">
        <div class="col-lg-12 jumbotron">
        <div class="timeline">
          <div class="containers left">
            <div class="content">
              <h2>SUNDAY PROGRAMME</h2>
              <table class="table">
                  <th>Service</th>
                  <th>Duration</th>
                  <tr>
                      <td>Sunday School:</td>
                      <td>09:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                      <td>Sunday Service:</td>
                      <td>10:00AM - 02:00AM</td>
                  </tr>
              </table>
            </div>
          </div>
          <div class="containers right">
            <div class="content">
              <h2>WEDNESDAY PROGRAMME</h2>
                                <table class="table">
                                     <th>Service</th>
                                     <th>Duration</th>
                                    <tr>
                                        <td>Shillo Service</td>
                                        <td>10:00AM - 12:00PM</td>
                                    </tr>
                                    <tr>
                                        <td>Pregnant Women and seeker</td>
                                        <td>4:00AM - 5:00PM</td>
                                    </tr>
                                    <tr>
                                        <td>Prayer Warriors</td>
                                        <td>5:00AM - 6:00PM</td>
                                    </tr>
                                </table>
            </div>
          </div>
          <div class="containers left">
            <div class="content">
              <h2>FRIDAY PROGRAMME</h2>
              <table class="table">
                <th>Service</th>
                <th>Duration</th>
                    <tr>
                        <td> First Friday  of The Month Vigil</td>
                        <td>12:00AM - 4:00PM</td>
                    </tr>
                    <tr>
                        <td> 2nd To The Last Friday of The Month Vigil</td>
                        <td>12:00AM - 4:00PM</td>
                    </tr>
               </table>
            </div>
          </div>
          <div class="containers right">
            <div class="content">
              <h2>SATURDAY PROGRAMME</h2>
              <table class="table">
                <th>Service</th>
                <th>Duration</th>
                    <tr>
                        <td>Choir Rehearsal</td>
                        <td>4:00PM - 6:00PM</td>
                    </tr>
                    <tr>
                        <td>Salvation Army Practice</td>
                        <td>4:00PM - 6:00PM</td>
                    </tr>
               </table>
            </div>
          </div>
          <div class="containers left">
            <div class="content">
              <h2>OTHER PROGRAMMES</h2>
              <table class="table">
                  <th>Programme</th>
                  <th>Duration</th>
                  <tr>
                      <td>SYF Super Sunday</td>
                      <td>6:30AM - 8:30AM</td>
                  </tr>
              </table>
            </div>
          </div>
          <div class="containers right">
            <div class="content">
              <h2>CHURCH ANNIVERSARY</h2>
              <table class="table">
                  <th>Anniversary</th>
                  <th>Date</th>
                  <tr>
                      <td>Happy New Year Thanksgiving</td>
                      <td>Every Second Sunday in February</td>
                  </tr>
                  <tr>
                      <td>Founder's Day</td>
                      <td>Every first Sunday in May</td>
                  </tr>
                  <tr>
                      <td>Children Harvest</td>
                      <td>...</td>
                  </tr>
                  <tr>
                      <td>Church Harvest Anniversary</td>
                      <td>Every first Sunday in November</td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
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
                    <div><button class="pull-left badge" id="prev5">&lt;&lt;Prev</button><button class="pull-right badge" id="next5">Next&gt;&gt;</button></div>
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
