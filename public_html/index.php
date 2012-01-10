<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    
    <?php require('commonhead.php'); ?>
  <title>K. Clay McKell at the University of Hawai&#699i at M&#257noa</title>
  
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