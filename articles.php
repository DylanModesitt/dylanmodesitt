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

    <!-- Custom styles CSS -->
    <link href="assets/css/article.css" rel="stylesheet" media="screen">
    <link href="assets/css/the.css" rel="stylesheet" media="screen">
    
    <script src="assets/js/modernizr.custom.js"></script>
       
    <!-- Icons and Branding -->

    <link rel="shortcut icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg"> 
    <link rel="apple-touch-icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg">
</head>
<body>
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
                    <a class="navbar-brand" href="../index.php">Dylan Modesitt</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Overview</a></li>
                        <li><a class="active" href="">Articles</a></li>
                        <li><a href="../portfolio.php">Portfilio</a></li>
                        <li><a href="../portfolio.php">Contact</a></li>
                    </ul>
                </div>
            </div><!-- .container -->
        </nav>
    </header>
        <div class="row articlesHeader">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="DMblock-header">
                    <h2 class="DMblock-title">Articles</h2>
                    <div class="DMblock-line"></div>
                    <div class="DMblock-subtitle">
                            <p class="col-xs-12"> I sometimes write about things I consider important. Here are all of my articles: </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
        <?php
        	$dir = 'articles/';
            function page_title($url) {
                $fp = file_get_contents($url);
                if (!$fp) 
                    return null;
                $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
                if (!$res) 
                    return null; 
                $title = preg_replace('/\s+/', ' ', $title_matches[1]);
                $title = trim($title);
                return $title;
            }
            function scan_dir($dir){
                $ignored = array('.', '..', '.svn', '.DS_Store');

                $files = array();    
                foreach (scandir($dir) as $file) {
                    if (in_array($file, $ignored)) continue;
                    $files[$file] = filemtime($dir . '/' . $file);
                }
                arsort($files);
                $articles = array();
                foreach ( $files as $key => $value ) {
                    $articles[] = $key;
                }
                $articlesTitle = array();
                $articlesTime = array();
                $articlesDescription = array();
                foreach ( $articles as $key => $value ) {
                    $HTMLInString = file_get_contents($dir . $value);
                    $start = strpos($HTMLInString, '<p>');
                    $end = strpos($HTMLInString, '</p>', $start);
                    $paragraph = substr($HTMLInString, $start, $end-$start+4);

                    $HTMLtitle = page_title($dir . $value);
                    $articlesTitle[] = $HTMLtitle;
                    $articlesTime[] = date ("F d Y", filemtime($dir . $value));
                    $articlesDescription[] =  $paragraph;
                }

                for ($x = 0; $x < count($articles); $x++) {
                    echo "<div class='col-xs-12 articleSample'><h1 class='articleTitle'><a href='articles/$articles[$x]'>$articlesTitle[$x]</a></h1><p> By Dylan Modesitt on $articlesTime[$x]</p> $articlesDescription[$x] <a href='articles/$articles[$x]'>Read More...</a></div>";
                }

            }
            scan_dir($dir);
        ?>

        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <ul class="social-links">
                        <li><a href="https://twitter.com/DylanModesitt" class="wow fadeInLeft" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://github.com/dylanmodesitt" class="wow fadeInLeft" data-wow-delay=".2s"><i class="fa fa-git"></i></a></li>
                        <li><a href="https://www.linkedin.com/profile/view?id=324617646&trk=spm_pic" class="wow fadeInLeft" data-wow-delay=".3s"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="mailto:dylanmodesitt@gmail.com" class="wow fadeInLeft" data-wow-delay=".4s"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="DMblock-line"></div>
                    <p class="copyright">
                        Designed by Dylan Modesitt in Atherton, CA
                    </p>
                    <p class="copyright">
                        <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">Website Information</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
         <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Website Information</h2>
                                <hr class="primary">
                                <p class="black">This website is apart of dylanmodesitt.com that utilizes notable plugins mentioned on the main page. This part of the site and the article writing platform have been made from scratch as a lightweight writing tool. 
                                <br><br>
                                <p>I aspire for great things</p>
                                <br><br>
                                <p class="strong">Always Work Harder</p>
                                <br><br>
                                <br><br>
                                </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

