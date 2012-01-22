<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
        <?php require('commonhead.php'); ?>

  <title>K. Clay McKell: Personal</title>
  <script src="js/jquery.flexslider-min.js"></script>
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
	    		<img src="Personal_files/4826LookingSkyward.jpg" />
	    		<p class="flex-caption">
				<span class="caption_head">Photography</span>
                I picked up a camera in 2007, and since then I've really become passionate about photography.
                </p>
	    	</li>
            <li>
                <a href="http://www.flickr.com/photos/codybadger/1482061532/in/set-72157602260899223" class="ext" target="_blank"><img src="Personal_files/AKpic.jpg" /></a>
	    		<p class="flex-caption">
				<span class="caption_head">Photography</span>
				For a look at my most recent work, please check out my <a href="http://blog.claymckell.com" class="ext">Blog</a> or browse my <a href="http://photography.claymckell.com/galleries.html">Portfolio</a>.
                </p>
	    	</li>
            <li>
	    		<img src="Personal_files/5499ClayFishing.jpg" />
	    		<p class="flex-caption">
                    <span class="caption_head">Travel</span>
                    "Travel is fatal to prejudice, bigotry, and narrow-mindedness" -Mark Twain.
                      
                </p>
	    	</li>
	    	<li>
	    		<img src="Personal_files/NoBallGames.jpg" />
	    		<p class="flex-caption">
                    <span class="caption_head">Travel</span>
                    I am hard-pressed to sum up my thoughts on travel better than the great American novelist.
                </p>
	    	</li>
            <li>
	    		<a href="https://www.facebook.com/photo.php?fbid=547525347676&set=a.515744925896.2199487.2532845&type=3&theater" class="ext" target="_blank"><img src="Personal_files/BiteSizedMcKinley.jpg" /></a>
	    		<p class="flex-caption">
                    <span class="caption_head">Travel</span>
                    In addition to being a welcome reprieve from everyday monotony, I find travelling to truly be an education unto itself.
                    No wonder I enjoy it so much!
                </p>
	    	</li>
            
	    	<li>
                <a href="http://afeinbergphotography.com/" class="ext" target="_blank"><img src="Personal_files/FeinbergHopu09.jpg" /></a>
                <p class="flex-caption">
                    <span class="caption_head">Ultimate Frisbee</span>
                    The greatest sport on earth!  I've been playing since 2002 and get my fix once or twice a week with the <a href="http://www.hawaiiultimate.com/" class="ext">Hawaii Ultiamte League Association</a>.
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
	$('.flexslider').flexslider({
        //option : 'value',
        slideshowSpeed : 5000,
        pausePlay : false,
        controlsContainer : '.flexslider'
    });

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