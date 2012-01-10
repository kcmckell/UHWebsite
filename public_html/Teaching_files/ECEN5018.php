<!doctype html>
<!-- ECEN 5018 Game Theory and Mutliagent Systems: ECEN5018.html -->
<!--Copyright 2012 K. Clay McKell
<!--mckell@hawaii.edu-->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <base href="http://localhost:8888/UHWebsite/public_html/"></base>
<meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>K. Clay McKell: ECEN 5018</title>
  <meta name="description" content="Online webspace for the academic escapades of K. Clay McKell at the University of Hawaii at Manoa.">
  <meta name="author" content="K. Clay McKell">

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="shortcut icon" href="img/favicon.ico"  type="image/x-icon" />
<meta name="keywords" content="University of Hawaii, Manoa, Honolulu, Electrical Engineering, PhD, graduate, student, control, game, theory">


  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->


<!-- CSS-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow|Cuprum' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/grid.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css"/>
<!-- end CSS-->
    
<!-- JS-->
<!-- grab jQuery from Google SDN , fallback on local, if offline -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1.6.2");</script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<!-- modernizr library for IE 6-8 -->
<!--[if lt IE 9]><script src="js/libs/modernizr-2.0.6.min.js"></script><![endif]-->

<!-- superfish menu by Joel Birch http://users.tpg.com.au/j_birch/plugins/superfish/ -->
<script type="text/javascript" src="js/superfish/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish/superfish.js"></script>

<!-- responsive select menu by Matt Kersley. Turns ul / ol into select box https://github.com/mattkersley/Responsive-Menu -->
<script type="text/javascript" src="js/jquery.mobileselect.js"></script>

<!-- responsive FlexSlider slideshow by (C) http://flex.madebymufffin.com/ -->
<script src="js/jquery.flexslider-min.js"></script>

<!-- Shiv for HTML5 details tag in browsers other than Chrome: https://github.com/manuelbieh/Details-Polyfill -->
<script src="js/mylibs/details.polyfill.min.js"></script>

<!-- end JS-->
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		<!--#include virtual="nav.html"-->
        <?php require('../nav.html'); ?>
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">
    
<!-- content area -->    
      <div id="content">
          <div class="grid_12">
              <a href="http://www.flickr.com/photos/valerianasolaris/3700647391/" class="ext"><img class="classimg" id="gamecards" src="Teaching_files/ECEN5018_files/Gamecards.png" alt="Image derived from Valeriana Solaris."/></a>
              <h1>Spring 2009</h1>
              <h2>
                  <a href="http://ecee.colorado.edu/marden/5018.html" class="ext">ECEN 4018/5018 Game Theory and Multiagent Systems</a> - Teaching Assistant
              </h2>
			  <h3>
                Office Hours
              </h3>
                <p>
                Mon 2-3 in ECEE 1B93, or by appointment
                </p>
			  <h3>
                Lecture Notes
			  </h3>
			<ul>
				<li> <a href="ECEN5018_files/GraphColoring.pdf">11 March - Graph Coloring</a> </li>
			</ul>
          </div>
      </div><!-- #end content area -->
      
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
	<div id="colophon" class="clearfix">
                <!--#include virtual="/contact.html"-->
        <?php require('../contact.html'); ?>

    </div>
</footer>
    
<script type="text/javascript">

// Fireup the plugins
	$(document).ready(function(){
	// initialise menu
	jQuery('ul.sf-menu').superfish();
		
	// initialise  slideshow
	$('.flexslider').flexslider();

	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});

</script>
	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>