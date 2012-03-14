<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('../commonhead.php'); ?>

  <title>Game Theory Reading Group</title>
  <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
  </script>
  <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
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
              <h1>Game Theory Reading Group</h1>
              <p>We have formed a small working group of economists and engineers that meets periodically to discuss interesting research topics.</p>
          </hgroup>          
          <section id="calendar" class="grid_10">
              <h1>Upcoming Events</h1>
                <iframe src="https://www.google.com/calendar/b/0/embed?showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23c0c0c0&amp;src=hawaii.edu_m1br2c8t4c04ujic4ifn8bi7is%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Pacific%2FHonolulu" style=" border:solid 1px #777 " width="760" height="600" frameborder="0" scrolling="no"></iframe>              <p>
                  <a href="http://www.google.com/calendar/feeds/hawaii.edu_m1br2c8t4c04ujic4ifn8bi7is%40group.calendar.google.com/public/basic
                     "><img src="img/feed-icon-14x14.png" /></a>
                  Subscribe to the RSS feed of events.
              </p>
          </section>
        <!-- right sidebar     -->
            <aside class="grid_2">
            <h2>Jump to</h2>
                <nav id="secondary-navigation">
                        <ul>
                            <li><a href="Research_files/gametheory.php#calendar">Calendar</a></li>
                            <li><a href="Research_files/gametheory.php#possibletopics">Possible Topics</a></li>
                            <li><a href="Research_files/gametheory.php#pasttopics">Past Topics</a></li>
                        </ul>
                 </nav>
              </aside>
        <!-- #end right sidebar -->          
          <section id="possibletopics" class="grid_5">
              <h1>Possible Discussion Topics</h1>
              <?php  
                $_GET['bib']=('http://dl.dropbox.com/u/7288448/Literature/ReadingGroupFuture.bib')  ;
                $_GET['all']=1;
                include( '../php/bibtexbrowser.php' );  
                ?>
          </section>
          <section id="pasttopics" class="grid_5">
              <h1>Past Discussion Topics</h1>
              <?php
                $_GET['bib']=('http://dl.dropbox.com/u/7288448/Literature/ReadingGroupPast.bib');
                $_GET['all']=1;
                include('../php/bibtexbrowser.php');
              ?>
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