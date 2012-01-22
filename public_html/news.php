<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('commonhead.php'); ?>

  <title>K. Clay McKell: News</title>
  
  <?php
    require_once 'php/simplepie.inc';
    $feed = new SimplePie();
    $feed->set_feed_url('http://kcmckell.blogspot.com/feeds/posts/default');
    $feed->init();
    $feed->handle_content_type();
    function getnextNposts($thefeed,$curpostNumber,$N){
        for ($i = $curpostNumber; $i < $curpostNumber+$N; $i++) {
            $thispost = $thefeed->get_item($i);
            $thistitle = $thispost->get_title();
            echo '<article id="' . str_replace(' ', '', $thistitle) . '">';
            echo "<hgroup><h1>" . $thistitle . "</h1><small>Posted on " . $thispost->get_date('F j, Y') . "</small></hgroup>";
            echo $thispost->get_content();
            echo "</article>";
            
        }
//        return $outArray;
    }
    function get_first_image_url($html){
        // Courtesy mickyginger on http://www.sitepoint.com/forums/showthread.php?701264-Using-SimplePie-to-take-only-first-image-from-RSS-feed.
        if (preg_match('/<img.+?src="(.+?)"/', $html, $matches)) {
            return $matches[1];
        }
        else return NULL; // or: 'url_of_default_image_if_post_has_no_img_tags.jpg';
    }
  ?>
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">

  <div id="container" class="clearfix">
  
<!-- header area -->
    <header>
		
        <?php require('nav.html'); ?>
        
    </header><!-- end header -->
    

<!-- main content area -->   
    <div id="main" role="main">
    
<!-- content area -->    
      <div id="content">
          <div id="blogdiv" class="grid_12">
              <?php
                if ($feed == NULL) {
                    echo "<p>Please read my blog <a href=\"http://kcmckell.blogspot.com/\" target=\"_blank\">externally</a>.</p>";
                    echo '</div>'; //End div#blogdiv.grid_12;
                }
                else {
                    echo "<h1>" . $feed->get_title() . "</h1>";
                    echo "<h2>" . $feed->get_description() . "</h2>";
                    // End div#blogdiv.grid_12 and Begin div#postsdiv.grid_8
                    echo '</div><div class="grid_9" id="postsdiv">';
                    getnextNposts($feed,0,5);
                    // End div#postsdiv.grid_8 and Begin aside.grid_4
                    echo '</div><aside id="recentposts" class="grid_3">';
                    echo '<hgroup><h1>Recent Posts</h1></hgroup>';
                    echo '<ul>';
                    for ($i=0; $i<5; $i++) {
                        $recentpost = $feed->get_item($i);
                        $posttitle = $recentpost->get_title();
                        echo '<li class="recentpost"><a href="#' . str_replace(' ', '', $posttitle) . '"><h1>' . $posttitle . '</h1></a>';
                        if ($outurl = get_first_image_url($recentpost->get_content())) {
                            echo '<img src="' . $outurl . '"/></li>';
                        }
                    }
                    echo '</ul></aside>';
                }
              ?>          
      </div><!-- #end content area -->
     
      
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
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';    
      s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>