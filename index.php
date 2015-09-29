<?php
include "config/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SINAU Academy | Java Programming</title>
	<link rel="shortcut icon" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head>

<!--/head-->
<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src=""><!-- alt="logo"--> <font face="CALIBRI" size="6"><P align="center">SINAU ACADEMY </P></font>
		                </a>                    
		            </div>
					
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Kelas</a></li>
		                    <li class="scroll"><a href="#event">Berita</a></li>
		                    <li class="scroll"><a href="#about">Profil</a></li>                     
		                    <li class="scroll"><a href="#twitter">Opini</a></li>
		                    <li class="scroll"><a href="#sponsor">Regist</a></li>
		                    <li class="scroll"><a href="#contact">Hubungi</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <!--/#home--> 
    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/3.jpg" alt="slider">						
					<div class="carousel-caption">
						<font face="calibri">
						<h2> Dibuka Pendaftaran untuk kelas baru </h2>
						<h4>Kuota Terbatas</h4>
						<a href="#contact">Buruan Daftar <i class="fa fa-angle-right"></i></a>
						</font>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/1.jpg" alt="slider" width="1600" height="850">	
					<div class="carousel-caption">
						<font face="calibri">
						<h2>Dibuka Pendaftaran untuk kelas baru </h2>
						<h4>Kuota Terbatas</h4>
						<a href="#sponsor">Buruan Daftar <i class="fa fa-angle-right"></i></a>
						</font>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/2.jpg" alt="slider" width="1600" height="850">	
					<div class="carousel-caption">
						<font face="calibri">
						<h2>Dibuka Pendaftaran untuk kelas baru </h2>
						<h4>Kuota Terbatas</h4>
						<a href="#contact">Buruan Daftar <i class="fa fa-angle-right"></i></a>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->
	
    <!--/#kelas--> 
	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>JADWAL KELAS</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<h3> Every Sunday </h3>
					</ul>
					<ul id="countdown">
						<li>					
							<span class="days time-font">08</span>
							<p>AM </p>
						</li>
						<li>
							<span class="hours time-font">10</span>
							<p class="">AM </p>
						</li>
						<li>
							<span class="minutes time-font">12</span>
							<p class="">PM</p>
						</li>
						<li>
							<span class="seconds time-font">02</span>
							<p class="">PM</p>
						</li>				
					</ul>
				</div>
			</div>
			<div class="cart">
				<a href="#"><img src="images/like.png"></i> <span>Like For Like</span></a>
			</div>
		</div>
	</section>
	<!--/#kelas-->
	
    <!--/#news--> 
	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading"><font face="calibri">Berita dan Event Terbaru</font></h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
							
								<div class="row">
										<?php
											$query = mysql_query("SELECT * from news");
											while ($news = mysql_fetch_array($query)) {
											$i = $news['id_news'];
										?>
									<div class="col-sm-4">
										<input type="hidden" value="<?php echo $i;?>">
										<div class="single-event">
											<img class="img-responsive" src="admin/images/news/<?php echo $news['gambar_news']; ?>" alt="event-image">
											<h4><font face="calibri"><?php echo $news['judul']; ?></font></h4>
											<h5><font face="calibri"><?php echo $news['ringkasan']; ?></font></h5>
											<h5 align="right"><font face="calibri"><a href=""> Baca Selengkapnya</a></h5></h5>
											
										</div>
									</div>
									<?php $i++; } ?>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="images/guitar.png" alt="guitar">
				</div>
			</div>			
		</div>
	</section>
	<!--/#news-->

	<!--/#profil-->
	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="images/guitar2.jpg" alt="guitar">
		</div>
		<div class="about-content">	
			<?php
				$query = mysql_query("SELECT * from profil");
				while ($profil = mysql_fetch_array($query)) {
			?>
					<h2><?php echo $profil['judul_profil'] ; ?></h2>
					<p><?php echo $profil['prakata']; ?> </p>
					<a href="#" class="btn btn-primary"> Ingin Bergabung Di Sinau Academy..? <i class="fa fa-angle-right"></i></a>
			<?php } ?>
		</div>
		
	</section>
	<!--/#profil-->
	
	<!--/#opini-->
	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="images/twit.png" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block">
					<?php
						$query = mysql_query("SELECT * from opini");
						while ($opini = mysql_fetch_array($query)) {
						$i = $opini['id_opini'];
					?>
						<div class="item active">
							<img src="admin/images/admin/<?php echo $opini['photo']; ?>" alt="">
							<p><?php echo $opini['nama']; ?> </p>
							<p><?php echo $opini['opini']; ?> </p>
							
						</div>
					<? } ?>
						<div class="item">
							<img src="images/twitter/twitter2.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="images/twitter/twitter3.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>		
	</section>
	<!--/#opini-->
	
	<!--/#Regist-->
	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Registrasi</h2>			
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<?php 
							$query = mysql_query("SELECT * from sponsor");
							while ($sponsor = mysql_fetch_array($query)) {
						?>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/<?php echo $sponsor['gambar_sponsor']; ?>" alt=""></a></li>
								</ul>
							</div>
						</div>
						<? } ?>
					</div>
				</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Bergabung Dengan Kami</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="regist.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
<div class="form-group">
					                <input type="text" name="alamat" class="form-control" required="required" placeholder="Alamat">
					            </div>	
<div class="form-group">
					                <input type="text" name="nohape" class="form-control" required="required" placeholder="Nomer Handphone">
					            </div>		
<div class="form-group">
					                <input type="text" name="kelas" class="form-control" required="required" placeholder="Permintaan Kelas">
					            </div>								<div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Kirim</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
			<div class="light">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
		</div>
	</section>
	<!--/#Regist-->
	
	<!--/#hubungi-->
	<section id="contact">
		<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap"> 				
	 			</div>	 			
	    	</div>
		</div><!--/#map-->
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3 align="center">Kontak Kami</h3>
							<address>
								E-mail: sinauacademy@gmail.com<br>
								Phone: +1 (123) 456 7890<br>
								Fax: +1 (123) 456 7891
							</address>
						</div>
						<div class="contact-address">
							<h3>Alamat</h3>
							<address>
								Jl Raya Cikarang Blok A No.27<br>
								Cikarang Utara<br>
								Bekasi, Jawa Barat<br>
								Indonesia
							</address>
						</div>
					</div>
				<div class="col-sm-5">
					<div id="contact-section">
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#hubungi-->

    <!--/#footer-->
    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2015 <br> Designed by <a target="_blank" href="">Sinau ACADEMY</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
</body>
</html>