<?php include 'assets/includes/htmlHead.php'; ?>
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
                        <li><a href="index.php">Overview</a></li>
                        <li><a href="articles.php">Articles</a></li>
                        <li><a class="active" href="">Portfilio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div><!-- .container -->
        </nav>
    </header>


        <section id="portfolio" class="DMblock DMblock-gray">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="DMblock-header">
                        <h2 class="DMblock-title">Portfolio</h2>
                        <div class="DMblock-line"></div>
                        <div class="DMblock-subtitle">
                            This is is my full portfolio. I am always up to new projects!</a>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->
	<?php include 'assets/includes/portfolio.php'; ?>
 <!-- Skills start -->
    
    <section class="DMblock" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="DMblock-header">
                                <h2 class="DMblock-title">Skills</h2>
                                <div class="DMblock-line"></div>
                                <div class="DMblock-subtitle">
                                    <p class="col-xs-12">I am a self-taught developer who has a passion for learning and hard work. There is always more to learn, and always more to do.</p>
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px; color:#2c3e50!important;">
                            <span class="percent">80</span>
                        </span>
						<h4 class="text-center">HTML / PHP</h4>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h4 class="text-center">CSS</h4>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="75" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">75</span>
                        </span>
						<h4 class="text-center">JS</h4>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="75" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">75</span>
                        </span>
						<h4 class="text-center">SWift</h4>
					</div>
					
				</div><!--.row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->


	<!-- Testimonials start -->

	<section id="testimonials" class="DMblock DMblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="DMblock-header">
						<h2 class="DMblock-title">Testimonials</h2>
						<div class="DMblock-line"></div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <blockquote>
                      <p>"I'm always impressed with Dylan's perseverance to accomplish goals he sets for himself. He's a quick learner and a pleasure to work with."</p>
                      <footer><a href="http://www.thesisb.com">Shadi Isber</a>, Senior Software Engineer, <a href="http://www.enfos.com">ENFOS INC.</a></footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <blockquote>
                      <p>"Dylan constantly proves himself to be both a skillful and hard worker who dedicates himself to his projects with outstanding results."</p>
                      <footer>Ethan Fieber, Co-Founder of <a href="http://declassifiedandratified.com/">Declassified and Ratified</a></footer>
                    </blockquote>
                </div>

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->

	<?php include 'assets/includes/footer.php'; ?>

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