<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Word of Life</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
	</style>
</head>
<body style="background:#B4B4B4">
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">Christ Redemption International</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php"><span></span>Home</a></li> 
                    <li><a href="wordoflife.php?the-words-of-victory"><span></span>The Message</a></li>
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
                            <li><a href="aboutcherubimandseraphimchurch.php"><span></span>Sacred C &amp; S Church History</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php"><span></span>Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background:#fff;">
    <div class="jumbotron" style="background-color:#fff">
        <p style="font-size:16px; font-family:serif; margin-top:20px;">In the beginning was the Word, and the Word was with God, and the Word was God. The same was in the beginning with God. All things were made by him; and without him was not any thing made that was made. In him was life; and the life was the light of men. And the light shineth in darkness; and the darkness comprehended it not. <em class="bg-success">John 1:1-5</em></p>
        <div class="row">
            <div class="col-lg-4">
                <img class="img-responsive img-thumbnail" src="../images/bible1.jpg" alt="Bible" />
            </div>
            <div class="col-lg-4">
                <img class="img-responsive img-thumbnail" src="../images/bible2.jpg" alt="Bible" />
            </div>
            <div class="col-lg-4">
                <img class="img-responsive img-thumbnail" src="../images/bible3.jpg" alt="Bible" />
            </div>
        </div>
    </div>
     <button onClick="topFunction()" id="myBtn" title="Go To Top">Top</button>
     <div class="row" style="font-family: serif;">
        <div class="col-lg-2" style="margin-top:-20px">
            <table class="table table-responsive table-hover">
                <tr><td><a href="wordoflife.php?the-love-of-almighty">The Love of God</a></td></tr>
                 <tr><td><a href="wordoflife/eternal-life.php">Eternal Life</a></td></tr>
                 <tr><td><a href="wordoflife/power-of-praise.php">The Power of Praise</a></td></tr>
                 <tr><td><a href="">The Act of Giving</a></td></tr>
            </table>
        </div>
        <div class="col-lg-10" style="margin-top:-20px; color:#030;">
                             <h3 class="media" style="color:#F00;">The Love of God</h3>
                            <p>How do we define love? Often this "intense affection" stems from a sexual attraction for that other person. We love other people, or we say we love other people, when we are attracted to them and when they make us feel good. Notice that a key phrase in the dictionary definition of love is the phrase "based on." This phrase implies that we love conditionally; in other words, we love someone because they fulfill a condition that we require before we can love them.</p>

                            <h4 style="color:#F00;">What Is The Source of Godly Love?</h4>
                            <p>Love is a uniquely human trait that cannot be explained away as the end result of an evolutionary process. This trait comes from the Creator God. <i id="b1" style="cursor:pointer; background-color:#00F; color:#fff">Genesis 1:26</i><label id="bible1">And God said, Let us make man in our image, after our likeness: and let them have dominion over the fish of the sea, and over the birds of the heavens, and over the cattle, and over all the earth, and over every creeping thing that creepeth upon the earth.
                            </label> tells us God's words at the creation of humanity: Let Us make man in Our image, according to Our likeness. Since human beings have the capability to love, and since we are made in the likeness of God, He must be the source of love.
                            Love is a uniquely human trait that cannot be explained away as the end result of an evolutionary process.</p>
                            <style>
                                #bible1, #bible2, #bible3, #bible4, #bible5, #bible6, #bible7, #bible8, #bible9, #bible10{
                                    display: none;
                                    background-color:#912F00;
									border:5px groove #F00;
									width:250px;
									color:#fff;
									font-size:12px;
                                }    
                            </style>

                            <script>
                                $(document).ready(function(){
                                    $("#b1").click(function(){
                                        $("#bible1").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                                $(document).ready(function(){
                                    $("#b2").click(function(){
                                        $("#bible2").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                                $(document).ready(function(){
                                    $("#b3").click(function(){
                                        $("#bible3").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                                $(document).ready(function(){
                                    $("#b4").click(function(){
                                        $("#bible4").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                                $(document).ready(function(){
                                    $("#b5").click(function(){
                                        $("#bible5").slideToggle()
                                    });
                                });
                                 $(document).ready(function(){
                                    $("#b6").click(function(){
                                        $("#bible6").slideToggle()
                                    });
                                });
                            </script>
                            <script>
                             $(document).ready(function(){
                                    $("#b7").click(function(){
                                        $("#bible7").slideToggle()
                                    });
                                });
                            </script>
                            <script>
                             $(document).ready(function(){
                                    $("#b8").click(function(){
                                        $("#bible8").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                             $(document).ready(function(){
                                    $("#b9").click(function(){
                                        $("#bible9").slideToggle()
                                    });
                                });
                            </script>
                             <script>
                             $(document).ready(function(){
                                    $("#b10").click(function(){
                                        $("#bible10").slideToggle()
                                    });
                                });
                            </script>
                            <h4 style="color:#F00;">God Is Love: How Does God Define Love?</h4>
                            <p>The Bible tells us that "God is Love" <i id="b2" style="cursor:pointer; background-color:#00F; color:#fff"">1John 4:8</i><label id="bible2">He that loveth not knoweth not God; for God is love.</label> But how can we even begin to understand that truth? There are many passages in the Bible that give us God's definition of love. The most well-known verse is <i id="b3" style="cursor:pointer; background-color:#00F; color:#fff">John 3:16</i><label id="bible3">For God so loved the world, that he gave his only begotten Son, that whosoever believeth on him should not perish, but have eternal life.
                            </label>, "For God so loved the world that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life." So one way God defines love is in the act of giving. However, what God gave (or should we say, "who" God gave) was not a mere gift-wrapped present; God sacrificed His only Son so that we, who put our faith in His Son, will not spend eternity separated from Him.</p>

                            <p>Jesus Christ, who came and dwelt on earth as God in the flesh, exemplified the love of God for us. On the evening before Jesus faced a brutal scourging and death by crucifixion, He reflected on the ultimate in love from a human perspective: Greater love has no one than this, than to lay down one's life for his friends <i id="b4" style="cursor:pointer; background-color:#00F; color:#fff">John 15:13</i><label id="bible4"> Greater love hath no man than this, that a man lay down his life for his friends.
                            </label>.</p>

                            <h4 style="color:#F00;">The Extent of God's Love</h4>
                            <p>So many people always think that you should love your neighbours and hate your enemies. But it is not so as directed by the Bible (the God's Word) that we should love our enemies and also we should pray for them, bless those who curse you, do good to those who hate you, and pray for those who spitefully use you and persecute you, that you may sons and daughters of your Father in heaven; For if you love those who love you, what reward have you? <i id="b5" style="cursor:pointer; background-color:#00F; color:#fff">(Matthew 5:43-46)</i><label id="bible5">Ye have heard that it was said, Thou shalt love thy neighbor, and hate thine enemy: but I say unto you, love your enemies, and pray for them that persecute you; that ye may be sons of your Father who is in heaven: for he maketh his sun to rise on the evil and the good, and sendeth rain on the just and the unjust. For if ye love them that love you, what reward have ye? do not even the publicans the same?</label>. 
                            The love Jesus Christ has for us, that was He begged His Father even in the agony of the crucifixion, to forgive them, for they do not know what they do <i id="b6" style="cursor:pointer; background-color:#00F; color:#fff">Luke 23:34</i>.<label id="bible6"> And Jesus said, Father, forgive them; for they know not what they do. And parting his garments among them, they cast lots.</label></p>

                            <p>Do you have this kind of godly love? It is one of the hardest things to have but the rewards are worth it! Yet there is even more to your development of godly love.</p>

                            <p>In fact, in <i id="b7" style="cursor:pointer; background-color:#00F; color:#fff;">Romans 5:8</i><label id="bible7">But God commendeth his own love toward us, in that, while we were yet sinners, Christ died for us.</label>, we find just the opposite. God wants us to know that His love is unconditional, so He sent His Son, Jesus Christ, to die for us while we were still unlovable sinners. We didn't have to get clean, and we didn't have to make any promises to God before we could experience His love. His love for us has always existed, and because of that, He did all the giving and sacrificing long before we were even aware that we needed His love.</p>
                            <p>When the Jewish leaders asked Jesus what the greatest commandment was, He replied, "You shall love the LORD your God with all your heart, with all your soul, and with all your mind.' This is the first and great commandment. And the second is like it: 'You shall love your neighbor as yourself.'On these two commandments hang all the Law and the Prophets" <i id="b8" style="cursor:pointer; background-color:#00F; color:#fff">Matthew 22:37-40</i>.<label id="bible8">And he said unto him, Thou shalt love the Lord thy God with all thy heart, and with all thy soul, and with all thy mind. This is the great and first commandment.And a second like unto it is this, Thou shalt love thy neighbor as thyself. On these two commandments the whole law hangeth, and the prophets.</label>
                            In answering this way, Jesus summarized the whole emphasis of the 10 Commandments. The first four describe ways we actively express our love toward God, the way we live when our heart, mind and soul are focused in love toward Him. The last six describe ways in which our love toward our fellow man is expressed, both in mind and in action.</p>

                            <p>God's commandments describe love in action: love toward God and love toward our fellow man.
                            They help us understand and live the love of God <i id="b9" style="cursor:pointer; background-color:#00F; color:#fff">Romans 13:8-10</i><label id="bible9">Owe no man anything, save to love one another: for he that loveth his neighbor hath fulfilled the law. For this, Thou shalt not commit adultery, Thou shalt not kill, Thou shalt not steal, Thou shalt not covet, and if there be any other commandment, it is summed up in this word, namely, Thou shalt love thy neighbor as thyself. Love worketh no ill to his neighbor: love therefore is the fulfilment of the law.</label></p>
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
