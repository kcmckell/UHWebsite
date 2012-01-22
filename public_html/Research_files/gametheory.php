<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('../commonhead.php'); ?>

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
              <h1>Upcoming Events</h1>
            <iframe src="https://www.google.com/calendar/b/0/embed?showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=hawaii.edu_m1br2c8t4c04ujic4ifn8bi7is%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Pacific%2FHonolulu" style=" border:solid 1px #777 " width="760" height="800" frameborder="0" scrolling="no"></iframe>          <section id="pastpresentations">
              
          </section>
          <section id="possibletopics">
              <h1>Possible Discussion Topics</h1>
              <?php  
                $_GET['bib']=('http://dl.dropbox.com/u/7288448/Literature/ReadingGroupFuture.bib')  ;
                $_GET['all']=1;
                include( '../php/bibtexbrowser.php' );  
                ?>
          </section>

      </div><!-- #end content area -->
        
        
<!-- right sidebar     -->
    <aside class="grid_2">
    <h2>Jump to</h2>
        <nav id="secondary-navigation">
        		<ul>
					<li><a href="#calendar">Calendar</a></li>
					<li><a href="#possibletopics">Possible Topics</a></li>
				</ul>
         </nav>

      </aside>
<!-- #end right sidebar -->
    
 
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