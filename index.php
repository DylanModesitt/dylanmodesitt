<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="This is the personal website and portfolio of Dylan Modesitt">
	<meta name="author" content="">

	<title>Dylan Modesitt</title>

	<!-- Plugin CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="assets/css/the.css" rel="stylesheet" media="screen">
    
    <script src="assets/js/modernizr.custom.js"></script>
       
    <!-- Icons and Branding -->

    <link rel="shortcut icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg"> 
    <link rel="apple-touch-icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg">
</head>
<body>
<!-- Designed by Dylan Modesitt in Atherton, California -->
	<!-- Navigation start -->
	<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Dylan Modesitt</a>
				</div>
				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="active">Overview</a></li>
						<li><a href="articles.php">Articles</a></li>
                        <li><a href="portfolio.php">Portfilio</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div><!-- .container -->
		</nav>
	</header>

	<!-- Navigation end -->

    <!-- About start -->

	<section id="about" class="DMblock DMblock-gray">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
					<div class="DMblock-header">
						<img src="assets/images/profile.png"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="DMblock-header">
						<h2 class="DMblock-title">Dylan Modesitt</h2>
						<div class="DMblock-line"></div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-4">

					<div class="identity-card">
						<div class="identity-card-icon">
							<span class="icon-graduation"></span>
						</div>
						<div class="identity-card-text">
							<h3 class="identity-card-title">Student</h3>
							<div class="identity-card-desc">
								I love to learn and have an absolute passion for knowledge. I attend <a href="http://www.shschools.org/page.cfm?p=362">Sacred Heart Prep</a> in Atherton, California, and I will graduate in 2016.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-4">

					<div class="identity-card">
						<div class="identity-card-icon">
							<span class="icon-screen-desktop"></span>
						</div>
						<div class="identity-card-text">
							<h3 class="identity-card-title">Software Engineer</h3>
							<div class="identity-card-desc">
								I am a self-taught Web and iOS developer with knowledge in HTML, CSS, JS, PHP, and Swift.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-4">

					<div class="identity-card">
						<div class="identity-card-icon">
							<span class="icon-user"></span>
						</div>
						<div class="identity-card-text">
							<h3 class="identity-card-title">Worker</h3>
							<div class="identity-card-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- About end -->
    <section id="articles" class="DMblock">
		<div class="container">
	      <div class="row articlesHeader">
	            <div class="col-sm-6 col-sm-offset-3">
	                <div class="DMblock-header">
	                    <h2 class="DMblock-title">Articles</h2>
	                    <div class="DMblock-line"></div>
	                    <div class="DMblock-subtitle">
	                            <p> I sometimes write about things I consider important. You can see them all <a href="articles.php">here</a>. These are my most recent articles: </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="container">
	            <div class="row">
	        <?php include 'assets/includes/getFiveArticles.php'; ?>

	       		 </div>
	   		 </div>
   		</div>
    </section>

    <!-- Portfolio -->

     <section id="portfolio" class="DMblock DMblock-gray">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="DMblock-header">
                        <h2 class="DMblock-title">Portfolio</h2>
                        <div class="DMblock-line"></div>
                        <div class="DMblock-subtitle">
                            Thhis is a glimpse of my portfolio. You can find the full one <a href="portfolio.php">here.</a>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->

	 <?php include 'assets/includes/portfolio.php'; ?>
    
  

	<!-- Contact start -->


    <?php include 'assets/includes/contactForm.php'; ?>


	<!-- Footer start -->

	  <?php include 'assets/includes/footer.php'; ?>

	<!-- Footer end -->

	<!-- Javascript files -->

		<!-- Javascript Libraries -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- Javascript Plugins -->
		<script src="assets/js/jquery.parallax-1.1.3.js"></script>
		<script src="assets/js/jqBootstrapValidation.js"></script>
		<script src="assets/js/imagesloaded.pkgd.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>

		<!-- Javascript Scrolling and animation Plugins -->
		<script src="assets/js/wow.min.js"></script>

		<!-- Javascript For Skills and quotes -->
	    <script src="assets/js/jquery.easypiechart.js"></script>
	    <script src="assets/js/waypoints.min.js"></script>
	    <script src="assets/js/jquery.cbpQTRotator.js"></script>

	    <!-- Javascript Custom -->
		<script src="assets/js/the.js"></script>
		<script src="assets/js/contact_me.js"></script>

</body>
</html>