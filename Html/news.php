<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <?php require('commonhead.php'); ?>

  <title>News: K. Clay McKell</title>
  
  <script>
      /*
    *  How to load a feed via the Feeds API.
    */

    google.load("feeds", "1");
    
    // Month parsing
    var montharray = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
    var start = 5;
    var desiredPosts = 5;
    var maxPosts = 20;

    // Our callback function, for when a feed is loaded.
    function feedLoaded(result) {
        // Grab the container we will put the results into
        var container = $("#content");
        container.html('');
      if (!result.error) {
        // Place feed title.
        container.html('<div class="grid_12" id="blogdiv"><h1>'+result.feed.title+'</h1><h2>'+result.feed.description+'</h2></div>');
        container.after('<aside id="recentposts" class="grid_3"></aside><div id="postsdiv" class="grid_9"></div>');
        var recentaside = $('#recentposts');
        var asidecontent = '<hgroup><h1>Recent Posts</h1></hgroup><nav id="secondary-navigation"><ul>';
        for (var i = 0; i<start; i++) {
            var entry = result.feed.entries[i];
            asidecontent += '<li class="recentpost"><a href="news.php#' + ConditionTitle(entry.title) + '"><h1>' + entry.title + '</h1></a>';
            asidecontent += '</li>';
        }
//        asidecontent += '<h1>Archive</h1>';
        asidecontent += '</ul></nav>';
        recentaside.html(asidecontent);
        var postsdiv = $('#postsdiv');
        var postscontent = '';

        // Loop through the feeds, putting the titles onto the page.
        // Check out the result object for a list of properties returned in each entry.
        // http://code.google.com/apis/ajaxfeeds/documentation/reference.html#JSON
        for (var i = 0; i < result.feed.entries.length; i++) {
          var entry = result.feed.entries[i];
          var strippedtitle = ConditionTitle(entry.title);
          var pubdate = new Date(entry.publishedDate);
          var datestring = montharray[pubdate.getMonth()]+' '+pubdate.getDate()+', '+pubdate.getFullYear();
          postscontent += '<article class="hidden" id="'+strippedtitle+'"><hgroup><h1>'+entry.title+'</h1><small>Posted on '+datestring+'</small></hgroup>';
          postscontent += entry.content;
          postscontent += '</article>';
        }
        postsdiv.html(postscontent);
         $('article:lt('+String(start-1)+')').removeClass('hidden');
         postsdiv.append('<a id="moreposts" class="button sf-menu">Load More Posts</a>');
        var morepostsbutton = $('a#moreposts');
        morepostsbutton.click(function(){
            if (start < maxPosts){
                morepostsbutton.addClass('activate').text('Loading...');
                $('article:gt('+String(start-1)+'):lt('+String(desiredPosts-1)+')').removeClass('hidden');
                start += desiredPosts;
                if (start < maxPosts) {
                    morepostsbutton.removeClass('activate').text('Load More Posts');                
                }
                else {
                    morepostsbutton.removeClass('activate')
                        .text('For more, please head to Blogger')
                        .attr('href','http://kcmckell.blogspot.com/');
                    return false;
                }
            }
            else {
                morepostsbutton.text('Sorry, no more posts');
            }
        }) //end morepostsbutton.click function;
        }
        else {
            container.html('Sorry, the feed is down.  For the latest news, please head over to <a href="http://kcmckell.blogspot.com/">Blogger</a>');
        }// end if-else.
    }; // endfeedLoaded
    
    function ConditionTitle(s) {
      // Strip all whitespace from string s.
      return s.replace(/ /g,'');
    }

    function OnLoad() {
      // Create a feed instance that will grab your feed.
      var feed = new google.feeds.Feed("http://kcmckell.blogspot.com/feeds/posts/default");
      feed.includeHistoricalEntries;
      feed.setNumEntries(maxPosts);
      // Calling load sends the request off.  It requires a callback function.
      feed.load(feedLoaded);
    }

    google.setOnLoadCallback(OnLoad);

  </script>
  
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