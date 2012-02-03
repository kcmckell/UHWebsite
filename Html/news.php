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
    session_start();
    $Nposts = 3;
    $_SESSION['posts_start'] = $_SESSION['posts_start'] ? $_SESSION['posts_start'] : $Nposts;
//    print_r($_SESSION['posts_start']);
    function getnextNposts($thefeed,$curpostNumber,$N){
        $outstring = "";
        for ($i = $curpostNumber; $i < $curpostNumber+$N; $i++) {
            $thispost = $thefeed->get_item($i);
            $thistitle = $thispost->get_title();
            $outstring .= '<article id="' . str_replace(' ', '', $thistitle) . '">';
            $outstring .= "<hgroup><h1>" . $thistitle . "</h1><small>Posted on " . $thispost->get_date('F j, Y') . "</small></hgroup>";
            $outstring .= $thispost->get_content();
            $outstring .= "</article>";
        }
        return json_encode($outstring);
    }
    if(isset($_GET['start'])) {
//        print_r($_GET['start']);
        echo json_decode(getnextNposts($feed, $_GET['start'], $_GET['desiredPosts']));
        $_SESSION['posts_start']+= $_GET['desiredPosts'];
//        print_r($_SESSION['posts_start']);
        die();
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
                    echo json_decode(getnextNposts($feed,0,$_SESSION['posts_start']));
                    if ($_SESSION['posts_start'] < $feed->get_item_quantity(0)) {
                        
                        echo '<a id="moreposts" class="button sf-menu">Load More Posts</a>';
                    }
                    // End div#postsdiv.grid_8
                    echo '</div>';
                    // Begin aside.grid_4
                    echo '<aside id="recentposts" class="grid_3">';
                    echo '<hgroup><h1>Recent Posts</h1></hgroup>';
                    echo '<ul>';
                    for ($i=0; $i<5; $i++) {
                        $recentpost = $feed->get_item($i);
                        $posttitle = $recentpost->get_title();
                        echo '<li class="recentpost"><a href="news.php#' . str_replace(' ', '', $posttitle) . '"><h1>' . $posttitle . '</h1></a>';
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
    var start = <?php echo $_SESSION['posts_start']; ?>;
    console.log('the start number is' + start);
    var desiredPosts = <?php echo $Nposts; ?>;
    console.log('The desired number of posts is' + desiredPosts);
    var morepostsbutton = $('a#moreposts');
    morepostsbutton.click(function(){
        morepostsbutton.addClass('activate').text('Loading...');
        $.ajax({
            url: 'news.php',
            data: {
                'start': start,
                'desiredPosts': desiredPosts
            },
            type: 'get',
            cache: false,
            success: function(responseJSON){
                start += desiredPosts;
                var globalJSON = responseJSON;
                console.log(globalJSON);
                $('div#postsdiv article:last').after(responseJSON);
            },
            error: function(){
                alert('Boooooo');
            },
            complete: function(){
                morepostsbutton.removeClass('activate').text('Load More Posts');
                console.log("Session Posts Start var: "+<?php echo $_SESSION['posts_start']; ?>);
                console.log("Total item quantitiy: "+<?php echo $feed->get_item_quantity(0); ?>);
//                alert('Holy cow it worked');
            }
        });
    })
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