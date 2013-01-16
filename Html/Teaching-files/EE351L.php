<!doctype html>
<!-- EE 351L Linear Feedback-Control Systems Laboratory: EE351L.php -->
<!--Copyright 2013 K. Clay McKell
<!--mckell@hawaii.edu-->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
     <?php require('../base.php'); require('../commonhead.php'); ?>

    <title>EE 351L: K. Clay McKell</title>
  
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
              <img class="classimg" id="ballbeam" src="Teaching-files/EE351L_files/BallBeam.jpg" alt="Image derived from Quanser Rotary Experiment #04 manual"/>
              <h1>Spring 2013</h1>
              <h2>
                  EE 351L Linear Feedback-Control Systems Lab - Instructor/Teaching Assistant
              </h2>
			  <h3>
                Office Hours
              </h3>
                <p>
    			Tue 12:00 - 1:00 in Holmes 386, or by appointment in Holmes 390.
                </p>
			  <h3>
			Lab Schedule
			  </h3>
                <table class="schedule">
			<tr>
				<th>Week</th>
				<th>Lab Number</th>
				<th>Location</th>
				<th>Resources</th>
			</tr>
			<tr>
				<td>1</td>
				<td><i>No Lab</i></td>
				<td>--</td>
				<td>--</td>
			</tr>
			<tr>
				<td>2</td>
				<td><i>Tutorial</i></td>
				<td>Holmes 386</td>
				<td>--</td>
			</tr>
			<tr>
					<td>3</td>
					<td>Lab 1: <a href="Teaching-files/EE351L_files/Matlab.pdf">MATLAB Structure and Use</a></td>
					<td>Holmes 387</td>
					<td>Appendix B: <a href="Teaching-files/EE351L_files/AppMat.pdf">MATLAB Overview</a></td>
			</tr>
			<tr>
					<td>4</td>
					<td>Lab 2: <a href="Teaching-files/EE351L_files/StaVar.pdf">State Variable Modeling</a></td>
					<td>Holmes 387</td>
					<td>Appendix C: <a href="Teaching-files/EE351L_files/AppSta.pdf">Basics of State Space Modeling</a></td>
			</tr>
			<tr>
					<td>5</td>
					<td>Lab 3: <a href="Teaching-files/EE351L_files/ModSim.pdf">Modeling and Digital Simulation Case Studies</a></td>
					<td>Holmes 387</td>
					<td>--</td>
			</tr>
			</table>
			<h3>
			Grading
			</h3>
			<p>
			Submitted materials will be graded on the "minus/check/plus" scale.  Grades will account for completeness, effort, and accuracy.
			<p>
			Final course grades will be weighted according to following scheme:
			<p>
			<ul class="gradeschema">
				<li> PreLabs - 30%
				<li> Lab Reports - 40%
				<li> Participation - 30%
			</ul>
			<h3>
			Additional Class Materials
			</h3>
			<p>
			<ul class="classmaterials">
				<li><a href="Teaching-files/EE351L_files/AppRpt.pdf">Appendix A</a>: Lab Report Guidelines
			</ul>
			<p>
			Information on this page is tentative and subject to change.
			<p>
			When in doubt, confirm schedule and due dates with me directly: mckell &lt at &gt hawaii &lt dot &gt edu.
		
			
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