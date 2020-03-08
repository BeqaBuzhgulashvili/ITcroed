<?php require_once("translate.php"); ?>
<!doctype html>
<html lang="<?=$lang;?>">
	<head>
		<title>ITCrowd - Audit</title>
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
		.background{
	color: wheat;
            margin-left: -19px;
            background-color: white;
            color: black;
           border: solid;
    border-radius: 50%;
    height: 18px;
    width: 17px;
    z-index: -1;
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
.logo{
	width: 90px;
}
.shadow :hover {
		 box-shadow: 15px 15px 15px 15px rgb(7, 7, 7);
		}
		.active2{
			background-color: #c5a47e;
			
		}
		.color-class :hover{
			position: relative;
transition: 2s;
color: #c5a47e;
		}
		 @media screen and (max-width: 600px) {
  .font-size{
font-size: 24px;
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
	<body class="not-front page-post">
		<div id="main">
			<div class="header-wrapper">
				<div class="header-v2">
					<div class="container">
						<div class="header-inner clearfix">
							<header>
								<div class="logo_wrapper">
									<a href="index.php" class="logo">
										<div class="button">
										<img src="images/logo.png" width="100" alt="Logo" class="img-fluid">
										</div>
									</a>
								</div>
							</header>
							
							<nav class="navbar_ navbar navbar-expand-md clearfix">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="nav navbar-nav sf-menu clearfix">
										<li class="nav-item"><a href="index.php" class="nav-link"><?=$tr["home"][$lang];?></a></li>
										<li class="nav-item"><a href="products.php" class="nav-link"><?=$tr["products"][$lang];?></a></li>
										<li class="nav-item sub-menu"><a class="nav-link active"><?=$tr["services"][$lang];?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<div class="sf-mega">
												<ul>
													<li><a href="service.php">IT <?=$tr["service"][$lang];?></a></li>
													<li><a class="active2" href="audit.php"><?=$tr["audit_full"][$lang];?></a></li>
													<li><a href="consultation.php"><?=$tr["consultation"][$lang];?></a></li>
												</ul>
											</div>
										</li>
										<li class="nav-item"><a href="about.php" class="nav-link"><?=$tr["about"][$lang];?></a></li>
										<li class="nav-item"><a href="contact.php" class="nav-link"><?=$tr["contact"][$lang];?></a></li>
										<li class="nav-item" style="display: flex;">
                                        <a class="nav-link poto" href="?lang=ka"><img src="images/lang-ka.png" style="margin-top: 25px; position: relative;">

                                            <?=checked($lang, "ka");?>


                                        </a>
                                        <a class="nav-link" href="?lang=en"><img src="images/lang-en.png" style="margin-top: 25px;position: relative;">
                                            <?=checked($lang, "en");?>
                                        </a>
                                    </li>

									</ul>
								</div>
							</nav>
						</div>
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
					<div class="breadcrumbs1_wrapper">
						<div class="container">
							<div class="breadcrumbs1"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a><span>/</span><?=$tr["audit_full"][$lang];?></div>
						</div>
					</div>
					<div id="content" class="page-section">
						<div class="container">
							<div class="title1"><?=$tr["common"][$lang];?> <span><?=$tr["audit"][$lang];?></span></div>
							<div class="title2"><?=$tr["audit_text"][$lang];?></div>
							<br>
							<div class="title3 font-size"><?=$tr["audit_title1"][$lang];?> <span><?=$tr["audit_title2"][$lang];?></span></div>
							<br>
							<ul class="ul1">
								<li><?=$tr["audit1"][$lang];?></li>
								<li><?=$tr["audit2"][$lang];?></li>
								<li><?=$tr["audit3"][$lang];?></li>
								<li><?=$tr["audit4"][$lang];?></li>
							</ul>
						</div>
					</div>
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
										<li><a href="http://www.top.ge/index.php?h=106442#106442" target="_blank"><img src="t1.png" alt="" class="img-fluid"></a></li>
									</ul>
								</div>
								<div class="col-md-4">
									<div class="contact1">
										<b>A:</b> <?=$tr["address"][$lang];?>
									</div>
									<div class="contact1">
										<b>T:</b> (995) 322 19 25 24
									</div>
									<div class="contact1">
										<b>M:</b> (995) 577 79 80 19
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
<div class="color-class">
								
							<p class="menu-bot"><?=$tr["edit"][$lang];?> <?=$tr["by"][$lang];?></p>
							</div>						
							<div class="copyrights color-class"><div class="copyrights">Copyright @<?=date("Y");?> <a href="home" class="link">ITCrowd</a>. <?=$tr["copyright"][$lang];?></div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.superslides.js"></script>
		<script src="js/jquery.fancybox.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-notify.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>