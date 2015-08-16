<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dylan Modesitt">

	<title> Presenting A Directory in PHP </title>

	<!-- Plugin CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    
	<!-- Custom styles CSS -->
	<link href="../assets/css/article.css" rel="stylesheet" media="screen"> 
	<link href="../assets/css/the.css" rel="stylesheet" media="screen">  
    <script src="../assets/js/modernizr.custom.js"></script>
       
    <!-- Icons and Branding -->
    <link rel="shortcut icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg"> 
    <link rel="apple-touch-icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg">
</head>

<body class="article"> 
	<?php include '../assets/includes/nav.php'; ?>
	<div id="article">
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Presenting A Directory in PHP
                    <small>by Dylan Modesitt</small>
                </h1>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12"> 
        		<p>
    				In my opinion, WordPress, anchor, ghost, and anything of the like of far too over-thought, and over-coded. I wanted to create a simple blogging solution. I manage this personal blog with some simple PHP that relies on some very basic ideals. I want full power over my posts; I want them to be html pages that I create without any hindrance to their styling and appearance. In reality, I just wanted an automatic way to sort through a directory that I deemed as the location of all my content, and display every file in that directory in a ‘blogesc’ fashion. I did so with the following code: </p> 
    		<p>
    		<blockquote>
			  <pre>
			    <code>
			       &lt;?php
				        	$dir = 'articles/';
				            function page_title($url) {
				                $fp = file_get_contents($url);
				                if (!$fp) 
				                    return null;
				                $res = preg_match("/&lt;title&gt;(.*)&lt;\/title&gt;/siU", $fp, $title_matches);
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
				                foreach ( $files as $key =&gt; $value ) {
				                    $articles[] = $key;
				                }
				                $articlesTitle = array();
				                $articlesTime = array();
				                $articlesDescription = array();
				                foreach ( $articles as $key =&gt; $value ) {
				                    $HTMLInString = file_get_contents($dir . $value);
				                    $start = strpos($HTMLInString, '&lt;p&gt;');
				                    $end = strpos($HTMLInString, '&lt;/p&gt;', $start);
				                    $paragraph = substr($HTMLInString, $start, $end-$start+4);

				                    $HTMLtitle = page_title($dir . $value);
				                    $articlesTitle[] = $HTMLtitle;
				                    $articlesTime[] = date ("F d Y", filemtime($dir . $value));
				                    $articlesDescription[] =  $paragraph;
				                }

				                for ($x = 0; $x &lt; count($articles); $x++) {
				                    echo "&lt;div class='col-xs-12 articleSample'&gt;&lt;h1 class='articleTitle'&gt;&lt;a href='articles/$articles[$x]'&gt;$articlesTitle[$x]&lt;/a&gt;&lt;/h1&gt;&lt;p&gt; By Dylan Modesitt on $articlesTime[$x]&lt;/p&gt; $articlesDescription[$x] &lt;a href='articles/$articles[$x]'&gt;Read More...&lt;/a&gt;&lt;/div&gt;";
				                }

				            }
				            scan_dir($dir);
				        ?&gt;
			    </code>
			  </pre>
			</blockquote>
				
<p>

				<p> 
				This set of PHP will scan a directory for html files, then format them accordingly and present them in a minimal manner according to my style sheet. The end result of this creation is something 
				I thought was quite cool; automatic listing of a directory on your site. I am sure this has been done before; most things have.
				 However, I thought I would share my version here. This could be used in many ways: listing images, files, making a blog, and beyond. 
				</p>
				<br><br>
				<h3 class="text-center"> <strong> lex parsimoniae </strong> </h3>
				<br><br>
    		</div>
    		</div>
    			<div class="row">
    				<div class= "col-xs-12">
    					<a href="../articles.php"> Read More Articles... </a>
					</div>
				</div>
				<br>
				<br>
	    		<div class="row hidden-xs">
	                <div class="col-xs-12 text-center">
	                    <h2><small>Share</small></h2>
	                </div>
	                <br>
	                <br>
	                <div class="col-xs-12 text-center">
		                <a class="share text-center" href="javascript:fbshareCurrentPage()"><i class="fa fa-facebook social"></i></a>
		                <a class="text-center" href="javascript:tweetCurrentPage()"><i class="fa fa-twitter social"></i></a>
		                <a class=" text-center" href="javascript:emailCurrentPage()"><i class="fa fa-envelope social"></i></a>
	                </div>
	        	</div>
		</div>
		<!-- Do not close to continue color </div> -->
		<!-- Javascript Libraries -->
		<script src="../assets/js/jquery-1.11.1.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script source="javascript">

		    function fbshareCurrentPage(){
		            window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; 
		        }
		    function emailCurrentPage(){
		            window.location.href="mailto:?subject="+document.title+"&body="+escape(window.location.href);
		        }
		     function tweetCurrentPage() {
		            window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;  
		        }
        </script>
</body>