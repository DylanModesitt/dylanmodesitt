<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dylan Modesitt">

	<title> Picryption </title>

	<!-- Plugin CSS -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/font-awesome.min.css" rel="stylesheet" media="screen">
    
	<!-- Custom styles CSS -->
	<link href="../css/article.css" rel="stylesheet" media="screen"> 
	<link href="../css/the.css" rel="stylesheet" media="screen">  
    <script src="../js/modernizr.custom.js"></script>
       
    <!-- Icons and Branding -->
    <link rel="shortcut icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg"> 
    <link rel="apple-touch-icon" href="http://s22.postimg.org/fhmk18nwh/icon.jpg">
</head>

<body class="article"> 
	<div id="article">
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Picryption
                    <small>by Dylan Modesitt</small>
                </h1>
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12"> 
				<p> 
				I have made a way to encode images with messages by changing the RGB values of the pixels of the image to be binary based on the even or odd nature of the color. This binary can be read as a string, and similarly any iamge can have a string written into it by tweaking slgihtly the colors of each pixel to match the binary representation of the string to later be read back. Check out picryption <a href="http://picryption.dylamodesitt.com">here</a>
				</p>
				<br><br>
				<h3 class="text-center"> <strong> QED</strong> </h3>
				<br><br>
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
		                <br><br><br><br>
	                </div>
	        	</div>
		</div>
		<!-- Do not close to continue color </div> -->
		<!-- Javascript Libraries -->
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
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