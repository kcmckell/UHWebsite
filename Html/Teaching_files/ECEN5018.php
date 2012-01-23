<!doctype html>
<!-- ECEN 5018 Game Theory and Mutliagent Systems: ECEN5018.html -->
<!--Copyright 2012 K. Clay McKell
<!--mckell@hawaii.edu-->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('../commonhead.php'); ?>

  <title>K. Clay McKell: ECEN 5018</title>
  
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		
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
	// $('.flexslider').flexslider();  //Don't fire up slideshow if not used on page.

	//mobile select menu
	$('#mobileselect').mobileMenu({
		switchWidth: 480, // at what size to begin showing the select box
      	indentString: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'	 // how to indent the menu items in select box						  
											  });
		});

</script>
	
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.  	 63	 +       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-28257077-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>