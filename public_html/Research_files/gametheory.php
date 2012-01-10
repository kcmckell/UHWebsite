<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('commonhead.php'); ?>

  <title>Game Theory Reading Group</title>

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
      <div id="content" class="grid_10">
          <section id="calendar">
              
          </section>
          <section id="pastpresentations">
              
          </section>
          <section id="possibletopics">
              
          </section>
         
      </div><!-- #end content area -->
        
        
<!-- right sidebar     -->
    <aside class="grid_2">
    <h2>Jump to</h2>
        <nav id="secondary-navigation">
        		<ul>
					<li><a href="#calendar">Calendar</a></li>
					<li><a href="#pastpresentations">Past Presentations</a></li>
					<li><a href="#possibletopics">Possible Topics</a></li>
				</ul>
         </nav>

      </aside>
<!-- #end right sidebar -->
    

      
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