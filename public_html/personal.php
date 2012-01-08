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

  <title>K. Clay McKell: Personal</title>
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
    <div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<a href="http://www.flickr.com/photos/claymckell/3677267015/" class="ext"><img src="Personal_files/LookingSkyward.png" /></a>
	    		<p class="flex-caption">
				<span class="caption_head">Photography</span>
                I picked up a camera in 2007, and since then I've really become passionate about photography.
				For a look at my most recent work, please check out my <a href="http://www.flickr.com/photos/claymckell" class="ext">Flickr</a> page.  You can find my portfolio <a href="http://www.flickr.com/photos/claymckell/collections/72157622398426752/" class="ext">here</a>.
				For details about bookings, please contact me through <a href="http://snapm.com/users/15" class="ext">snapm</a>.
                </p>
	    	</li>
	    	<li>
	    		<a href="http://www.flickr.com/photos/codybadger/1482061532/in/set-72157602260899223/" class="ext"><img src="Personal_files/AKpic.png" /></a>
	    		<p class="flex-caption">
                    <span class="caption_head">Travel</span>
                    "Travel is fatal to prejudice, bigotry, and narrow-mindedness" -Mark Twain.
                    I am hard-pressed to sum up my thoughts on travel better than the great American novelist.  In addition to being a welcome reprieve from everyday monotony, I find travelling to truly be an education unto itself.
                    No wonder I enjoy it so much!
                </p>
	    	</li>
	    	<li>
                <a href="http://afeinphoto.com/Home.html"><img src="Personal_files/ulty.png" /></a>
                <p class="flex-caption">
                    <span class="caption_head">Ultimate Frisbee</span>
                    Greatest sport on earth!  I've been playing since 2002 and get my fix once or twice a week with the <a href="http://www.hawaiiultimate.com/" class="ext">Hawaii Ultiamte League Association</a>.
                </p>
	    	</li>
	    </ul>
	  </div>
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
<!--      <div id="content">-->
         
<!--      </div>-->
<!-- #end content area -->
  
      
<!--  </div>-->
<!-- #end main -->
    

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