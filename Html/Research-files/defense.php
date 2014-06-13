<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--TODO: Get new page up to Spectra-->
<head>
    <?php require('../base.php'); require('../commonhead.php'); ?>

  <title>Dissertation Defense</title>
  <script>
  $(document).ready(function(){
      if (screen.width < 600) {
          var sidebar = $('div#content>aside');
          sidebar.remove();
          $('div#content>hgroup').after(sidebar);
      }
  })
  </script>
      
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
          <hgroup class="grid_12">
              <h1>Dissertation Defense Live Stream</h1>
              <p>The video player below should begin streaming the talk once we get started at 8:00AM on Monday, June 23, 2014.</p>
          </hgroup>          
          <section class="grid_12">
			<iframe src="//www.ustream.tv/embed/18249863?wmode=direct" style="border: 0 none transparent;" frameborder="no" width="720" height="437"></iframe><br /><a href="http://www.ustream.tv/" style="padding: 2px 0px 4px; width: 400px; background: #ffffff; display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Live streaming video by Ustream</a>
		  </section>
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