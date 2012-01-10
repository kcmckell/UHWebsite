<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
        <?php require('commonhead.php'); ?>

  <title>K. Clay McKell: Personal</title>
  
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