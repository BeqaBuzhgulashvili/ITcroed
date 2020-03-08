<?php require_once("translate.php"); ?>
    <!doctype html>
    <html lang="<?=$lang;?>">

    <head>
        <title>ITCrowd - Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/superslides.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style type="text/css">
        .shadow :hover {
            box-shadow: 15px 15px 15px 15px rgb(7, 7, 7);
        }
        
        .button {
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Exo 2', sans-serif;
            display: inline-block;
            position: relative;
            text-align: center;
            box-shadow: 0 0 0 0 transparent;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }
        
        .button:hover {
            color: white;
            box-shadow: 0 0 30px 0 rgb(198, 164, 126);
            background-color: rgb(198, 164, 126);
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
        }
        
        .button:hover:before {
            -webkit-animation: shine 0.5s 0s linear;
            -moz-animation: shine 0.5s 0s linear;
            animation: shine 0.5s 0s linear;
        }
        
        .button:active {
            box-shadow: 0 0 0 0 transparent;
            -webkit-transition: box-shadow 0.2s ease-in;
            -moz-transition: box-shadow 0.2s ease-in;
            transition: box-shadow 0.2s ease-in;
        }
        
        .button:before {
            content: '';
            display: block;
            width: 0px;
            height: 86%;
            position: absolute;
            top: 7%;
            left: 0%;
            opacity: 0;
            background: white;
            box-shadow: 0 0 15px 3px white;
            -webkit-transform: skewX(-20deg);
            -moz-transform: skewX(-20deg);
            -ms-transform: skewX(-20deg);
            -o-transform: skewX(-20deg);
            transform: skewX(-20deg);
        }
        
        @-webkit-keyframes shine {
            from {
                opacity: 0;
                left: 0%;
            }
            50% {
                opacity: 1;
            }
            to {
                opacity: 0;
                left: 100%;
            }
        }
        
        @-moz-keyframes shine {
            from {
                opacity: 0;
                left: 0%;
            }
            50% {
                opacity: 1;
            }
            to {
                opacity: 0;
                left: 100%;
            }
        }
        
        @keyframes shine {
            from {
                opacity: 0;
                left: 0%;
            }
            50% {
                opacity: 1;
            }
            to {
                opacity: 0;
                left: 100%;
            }
        }
        
        .logo {
            width: 90px;
        }
        
        .background {
            color: wheat;
            margin-left: -19px;
             background-color: white;
    color: black;
    border: solid;
    border-radius: 50%;
    height: 18px;
    width: 17px;
        }
        
        .color-class:hover {
           margin-left: -19px;
    z-index: 1;
    background-color: white;
    color: black;
    border: solid;
    border-radius: 50%;
    height: 18px;
    width: 17px;
        }
        .poto{
        	position: relative;
        	margin-top: 25px;
        }
        .color-class2 :hover {
position: relative;
transition: 2s;
color: #c5a47e;

}
    </style>

    <body class="front">
        <div id="main">
            <div class="header-wrapper">
                <div class="header-v1">
                    <div class="header-inner clearfix">
                        <header>
                            <div class="logo_wrapper logo">
                                <a href="index.php" class="logo">
                                    <div class="button">

                                        <img src="images/logo.png" alt="Logo" width="100">
                                    </div>
                                </a>
                            </div>
                        </header>
                        <div class="phone1 color-class2"><a href="tel://995577798019">(+995) 577 79 80 19</a></div>
                        <nav class="navbar_ navbar navbar-expand-md clearfix">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav sf-menu clearfix">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link active">
                                            <?=$tr["home"][$lang];?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="products.php" class="nav-link">
                                            <?=$tr["products"][$lang];?>
                                        </a>
                                    </li>
                                    <li class="nav-item sub-menu">
                                        <a class="nav-link">
                                            <?=$tr["services"][$lang];?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                        <div class="sf-mega">
                                            <ul>
                                                <li><a href="service.php">IT <?=$tr["service"][$lang];?></a></li>
                                                <li>
                                                    <a href="audit.php">
                                                        <?=$tr["audit_full"][$lang];?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="consultation.php">
                                                        <?=$tr["consultation"][$lang];?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">
                                            <?=$tr["about"][$lang];?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">
                                            <?=$tr["contact"][$lang];?>
                                        </a>
                                    </li>

                                    <li class="nav-item" style="display: flex;">
                                        <a class="nav-link" href="?lang=ka"><img src="images/lang-ka.png" class="poto">

                                            <?=checked($lang, "ka");?>


                                        </a>
                                        <a class="nav-link" href="?lang=en"><img src="images/lang-en.png" class="poto">
                                            <?=checked($lang, "en");?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content-lines-wrapper">
                    <div class="content-lines-inner">
                        <div class="content-lines"></div>
                    </div>
                </div>
                <div class="content-inner">
                    <div id="home" class="">
                        <div id="slides_wrapper" class="">
                            <div id="slides">
                                <ul class="slides-container">
                                    <li>
                                        <img src="images/slide1.jpg" alt="slide1" class="img">
                                        <div class="caption">
                                            <div class="">
                                                <div class="txt1">
                                                    <?=$tr["slider_title1"][$lang];?>
                                                </div>
                                                <div class="txt2">IT
                                                    <?=$tr["support"][$lang];?>
                                                        <br><span>&</span>
                                                        <?=$tr["services_big"][$lang];?>
                                                </div>
                                                <div class="txt3">
                                                    <?=$tr["slide_subtext"][$lang];?>
                                                </div>
                                                <div class="link1">
                                                    <a href="contact.php" class="btn1 button">
                                                        <?=$tr["respond"][$lang];?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/slide2.jpg" alt="slide2" class="img">
                                        <div class="caption">
                                            <div class="">
                                                <div class="txt1">
                                                    <?=$tr["slider_title2"][$lang];?>
                                                </div>
                                                <div class="txt2">IT
                                                    <?=$tr["consultation"][$lang];?>
                                                        <br><span>&</span>
                                                        <?=$tr["services_big"][$lang];?>
                                                </div>
                                                <div class="txt3">
                                                    <?=$tr["slide_subtext"][$lang];?>
                                                </div>
                                                <div class="link1">
                                                    <a href="contact.php" class="btn1  button">
                                                        <?=$tr["respond"][$lang];?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/slide3.jpg" alt="slide3" class="img">
                                        <div class="caption">
                                            <div class="">
                                                <div class="txt1">
                                                    <?=$tr["slider_title3"][$lang];?>
                                                </div>
                                                <div class="txt2">IT
                                                    <?=$tr["audit"][$lang];?>
                                                        <br><span>&</span>
                                                        <?=$tr["services_big"][$lang];?>
                                                </div>
                                                <div class="txt3">
                                                    <?=$tr["slide_subtext"][$lang];?>
                                                </div>
                                                <div class="link1">
                                                    <a href="contact.php" class="btn1 button">
                                                        <?=$tr["respond"][$lang];?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <nav class="slides-navigation">
                                    <a href="#" class="prev">
                                        <?=$tr["prev"][$lang];?>
                                    </a><span>|</span>
                                    <a href="#" class="next">
                                        <?=$tr["next"][$lang];?>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="left-panel">
                            <div class="social-left-txt">
                                <?=$tr["follow"][$lang];?>
                            </div>
                            <ul class="social-left clearfix">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="about" class="page-section">
                        <div class="back-txt">about</div>
                        <div class="container">
                            <div class="title1">
                                <?=$tr["about_text"][$lang];?> <span><?=$tr["bureau"][$lang];?></span></div>
                            <div class="title2">
                                <br>
                                <?=$tr["bureau_text"][$lang];?>
                            </div>
                        </div>
                    </div>
                    <div id="our-projects" class="page-section">
                        <div class="back-txt">services</div>
                        <div class="container">
                            <div class="title1">
                                <?=$tr["our"][$lang];?> <span><?=$tr["services"][$lang];?></span></div>
                            <div class="title2">
                                <?=$tr["our_text"][$lang];?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="projects clearfix">
                            <div class="project">
                                <a href="images/it-produvtion.jpg" class="fancybox">
                                    <figure><img src="images/service1.jpg" alt="service1" class=""></figure>
                                    <div class="over1"></div>
                                    <div class="txt1">IT
                                        <br>
                                        <?=$tr["products"][$lang];?>
                                    </div>
                                    <div class="caption">
                                        <div class="txt2">ITCrowd</div>
                                        <div class="txt3">
                                            <?=$tr["service_text1"][$lang];?>
                                        </div>
                                    </div>
                                    <div class="over2"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                                </a>
                            </div>
                            <div class="project">
                                <a href="images/s4.jpg" class="fancybox">
                                    <figure><img src="images/service4.jpg" alt="service2" class=""></figure>
                                    <div class="over1"></div>
                                    <div class="txt1">IT
                                        <br>
                                        <?=$tr["consultation"][$lang];?>
                                    </div>
                                    <div class="caption">
                                        <div class="txt2">ITCrowd</div>
                                        <div class="txt3">
                                            <?=$tr["service_text2"][$lang];?>
                                        </div>
                                    </div>
                                    <div class="over2"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                                </a>
                            </div>
                            <div class="project">
                                <a href="images/service.jpg" class="fancybox">
                                    <figure><img src="images/service2.jpg" alt="service3" class=""></figure>
                                    <div class="over1"></div>
                                    <div class="txt1">IT
                                        <br>
                                        <?=$tr["service"][$lang];?>
                                    </div>
                                    <div class="caption">
                                        <div class="txt2">ITCrowd</div>
                                        <div class="txt3">
                                            <?=$tr["service_text3"][$lang];?>
                                        </div>
                                    </div>
                                    <div class="over2"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                                </a>
                            </div>
                            <div class="project">
                                <a href="images/s3.jpg" class="fancybox">
                                    <figure><img src="images/service3.jpg" alt="service4" class=""></figure>
                                    <div class="over1"></div>
                                    <div class="txt1">
                                        <?=$tr["common"][$lang];?>
                                            <br>
                                            <?=$tr["audit"][$lang];?>
                                    </div>
                                    <div class="caption">
                                        <div class="txt2">ITCrowd</div>
                                        <div class="txt3">
                                            <?=$tr["service_text4"][$lang];?>
                                        </div>
                                    </div>
                                    <div class="over2"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="percentages">
                        <div class="container">
                            <div class="percentages-inner clearfix">
                                <div class="title1">
                                    <?=$tr["our"][$lang];?> <span><?=$tr["team"][$lang];?></span></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="percentage1">
                                            <div class="txt1">IT
                                                <?=$tr["managers"][$lang];?>
                                            </div>
                                            <div class="txt2">IT
                                                <?=$tr["projects"][$lang];?>
                                            </div>
                                            <div class="bg">
                                                <div class="animated-distance" data-num="95" data-duration="1900" data-animation-delay="0"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="percentage1">
                                            <div class="txt1">
                                                <?=$tr["sysadmins"][$lang];?>
                                            </div>
                                            <div class="txt2">
                                                <?=$tr["servers"][$lang];?>
                                            </div>
                                            <div class="bg">
                                                <div class="animated-distance" data-num="87" data-duration="1900" data-animation-delay="100"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="percentage1">
                                            <div class="txt1">
                                                <?=$tr["networkers"][$lang];?>
                                            </div>
                                            <div class="txt2">
                                                <?=$tr["network"][$lang];?>
                                            </div>
                                            <div class="bg">
                                                <div class="animated-distance" data-num="90" data-duration="1900" data-animation-delay="200"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="percentage1">
                                            <div class="txt1">
                                                <?=$tr["troubleshooters"][$lang];?>
                                            </div>
                                            <div class="txt2">
                                                <?=$tr["computers"][$lang];?>
                                            </div>
                                            <div class="bg">
                                                <div class="animated-distance" data-num="85" data-duration="1900" data-animation-delay="300"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="google_map"></div>
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="bot1-wrapper">
                    <div class="container">
                        <div class="bot1 clearfix">
                            <div class="logo2_wrapper">
                                <a href="index.php" class="logo2">
                                    <div class="shadow">
                                        <img src="images/logo2.png" alt="Logo" class="">
                                    </div>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        <?=$tr["footer_text"][$lang];?>
                                    </p>
                                    <ul class="best1 clearfix">
                                        <li>
                                            <a href="http://www.top.ge/index.php?h=106442#106442" target="_blank"><img src="t1.png" alt="" class=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact1">
                                        <b>A:</b>
                                        <?=$tr["address"][$lang];?>
                                    </div>
                                    <div class="contact1">
                                        <b>T:</b> + (995) 322 19 25 24
                                    </div>
                                    <div class="contact1">
                                        <b>M:</b> + (995) 577 79 80 19
                                    </div>
                                    <div class="contact1">
                                        <b>E:</b> <a href="mailto:service@itcrowd.ge">service@itcrowd.ge</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-footer-wrapper">
                                        <ul class="social-footer clearfix">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot2-wrapper">
                    <div class="container">
                        <div class="bot2 clearfix">
                            <div class="color-class2">

                                <p class="menu-bot">
                                    <?=$tr["edit"][$lang];?>
                                        <?=$tr["by"][$lang];?>
                                </p>
                            </div>
                            <div class="copyrights color-class2"><div class="copyrights">Copyright @<?=date("Y");?> <a href="home" class="link">ITCrowd</a>. <?=$tr["copyright"][$lang];?></div>
                            </div>
                            <div class="to-top-wrapper">
                                <a href="#" class="totop"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.superslides.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA85u2f3GPNnJhIJeggViAfB8zMkUbCHNE"></script>
        <script src="js/googlemap.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-notify.min.js"></script>
        <script src="js/scripts.js"></script>
        <?=@$sent;?>
    </body>

    </html>