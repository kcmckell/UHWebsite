<!doctype html>
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

  <title>K. Clay McKell at the University of Hawai&#699i at M&#257noa</title>
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
<!-- end JS-->
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		<!--#include virtual="nav.html"-->
        <?php require('nav.html'); ?>
        
<!-- responsive FlexSlider image slideshow -->
<!--    <div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<img src="img/pic1.jpg" />
	    		<p class="flex-caption">Birds...</p>
	    	</li>
	    	<li>
	    		<a href="http://www.prowebdesign.ro"><img src="img/pic2.jpg" /></a>
	    		<p class="flex-caption">and bees. This image is also wrapped in a link!</p>
	    	</li>
	    	<li>
	    		<img src="img/pic3.jpg" />
                <p class="flex-caption">Macro bugger!</p>
	    	</li>
	    	<li>
	    		<img src="img/pic4.jpg" />
                <p class="flex-caption">Photos by &copy; Konstantin Chuenkov</p>
	    	</li>
	    </ul>
	  </div>-->
<!-- FlexSlider -->
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">
    
<!-- left sidebar -->    
<!--    <aside class="grid_4">
    <h2>Secondary Section menu</h2>
        <nav id="secondary-navigation">
        		<ul>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
				</ul>
         </nav>

      </aside>-->
<!-- #end left sidebar -->
    
<!-- content area -->    
      <div id="content">
          <div class="grid_7">
              <section id="bio">
                  <h1>Graduate Student, University of Hawai&#699i at M&#257noa</h1>
            <p>
                As a PhD student I am researching game theoretic methods of controlling distributed networks.  As technology advances, networks of devices will only grow larger, and centralized control algorithms prove to be deficient in both robustness and computational tractability, we will lean towards more decentralized control.
            </p>
            <p>
				Game theory is a rich topic thats uses have primarily been to describe the possible outcomes of complicated systems of self-interested agents.  From an engineering standpoint, I hope to turn game theory into a design tool that may provide definitive bounds on the efficiencies of distributed control laws.
            </p>
              </section>
          </div>
          <div class="grid_5">
              <section id="education">
                  <h1>Education</h1>
                  <p>
                  <details>
                      <summary>Master of Science in Mechanical Engineering</summary>
                      <div>2007 from the University of California, Los Angeles</div>
                  </details>
                  <details>
                      <summary>Bachelor of Science in Mechanical Engineering</summary>
                      <div>2006 <span class="latin">summa cum laude</span> from the University of California, Los Angeles</div>
                  </details>
              </p>
              </section>
          </div>
      </div><!-- #end content area -->
      
 <!-- columns demo-->
<!--<div id="columnsdemo">
<h2 style="width:100%; clear:both">Columns demo</h2>
<div class="grid_12"><h1>12</h1></div>

<div class="grid_1"><h1>1</h1></div>
<div class="grid_11"><h1>11</h1></div>

<div class="grid_2"><h1>2</h1></div>
<div class="grid_10"><h1>10</h1></div>

<div class="grid_3"><h1>3</h1></div>
<div class="grid_9"><h1>9</h1></div>

<div class="grid_4"><h1>4</h1></div>
<div class="grid_8"><h1>8</h1></div>

<div class="grid_5"><h1>5</h1></div>
<div class="grid_7"><h1>7</h1></div>

<div class="grid_6"><h1>6</h1></div>
<div class="grid_6"><h1>6</h1></div>
		
<div class="grid_4"><h1>4</h1></div>
<div class="grid_4"><h1>4</h1></div>
<div class="grid_4"><h1>4</h1></div>

<div class="grid_1"><h1>1</h1></div>
<div class="grid_2"><h1>2</h1></div>
<div class="grid_3"><h1>3</h1></div>
<div class="grid_3"><h1>3</h1></div>
<div class="grid_3"><h1>3</h1></div>
</div>-->
<!-- end columns demo -->  
      
  </div><!-- #end main -->
    

</div> <!--! end of #container --> 
<!-- footer area -->    
<footer>
	<div id="colophon" class="clearfix">
                <!--#include virtual="/contact.html"-->
        <?php require('contact.html'); ?>

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