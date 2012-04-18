<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <?php require('../base.php'); ?>
  <title>Conflict Model @ UH Game Theory Reading Group</title>
  <link rel="stylesheet" href="js/mylibs/hakimel-reveal.js/css/reset.css">
  <link rel="stylesheet" href="js/mylibs/hakimel-reveal.js/css/main.css">
  <link rel="stylesheet" href="js/mylibs/hakimel-reveal.js/lib/zenburn.css">
  <!-- JS-->
<!-- grab jQuery from Google SDN , fallback on local, if offline -->

<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAyKn8HaXYbbw-mn2gmwFcRRShAtsdeGT-UGtm-dQfxBjmpMYAexTFEqIuhdDi8zEBagigNPSTab7PQg"></script>
<!--Call jQuery with permissions from above-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!--This method came stock with YAMB to access Google CDN's jQuery library.  The above should work just fine.-->
    <!--<script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">google.load("jquery", "1.6.2");</script>-->
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<!-- modernizr library for IE 6-8 -->
<!--[if lt IE 9]><script src="js/libs/modernizr-2.0.6.min.js"></script><![endif]-->
<!-- Shiv for HTML5 details tag in browsers other than Chrome: https://github.com/manuelbieh/Details-Polyfill -->
<script src="js/mylibs/details.polyfill.min.js"></script>
<!-- MathJax documentation: http://www.mathjax.org/docs/2.0/tex.html -->
  <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {
        	inlineMath: [['$','$'], ['\\(','\\)']],
                processEscapes: true,
                style: {
                    "font-size": "100%"
                }
        }
    });
  </script>
  <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>      
  <!-- end JS-->
</head>

<body onLoad="setTimeout(function() {window.scrollTo(0, 1)}, 100)" id="home">
<div id="reveal">
    <!-- Used to fade in a background when a specific slide state is reached -->
    <div class="state-background"></div>

    <!-- Any section element inside of this container is displayed as a slide -->
    <div class="slides">
        <section>
            <h1>Modeling Ethnic Conflict with Altruism</h1>
            <h2>K. Clay McKell</h2>
            <h2>April 24, 2012</h2>
            <h3>UH Manoa Game Theory Reading Group</h3>
            <h4>Joint work with: Sun-Ki Chai and G&uuml;rdal Arslan</h4>
        </section>
        <section>
            This is display math:
            $$ e^{i\pi} = -1 $$
            with text below
        </section>
        
    </div>

    <!-- The navigational controls UI -->
    <aside class="controls">
        <a class="left" href="#">&#x25C4;</a>
        <a class="right" href="#">&#x25BA;</a>
        <a class="up" href="#">&#x25B2;</a>
        <a class="down" href="#">&#x25BC;</a>
    </aside>

    <!-- Displays presentation progress, max value changes via JS to reflect # of slides -->
    <div class="progress"><span></span></div>
</div>
<script>
// Rewrite internal link targets.
$(document).ready(function(){
    // Look for all anchors inside of the REVEAL div.
    $('div#reveal a').filter(function(index){
        var ref = $(this).attr('href');
        return ref.indexOf('http') == -1    // Filter through all anchros with hrefs that don't contain "http".
    }).each(function(index){                // On each of these, do:
        var ref = $(this).attr('href');
        var prefix = $('base').attr('href') + 'Research_files/ConflictModel4-12.php';
        $(this).attr('href',prefix+ref);    // Reassign the href as the above prefix (which points to the page we're on) concatenated with the original reference.
        console.log($(this).attr('href'));
    });
});
</script>
<script src="js/mylibs/hakimel-reveal.js/js/reveal.js"></script>

<!-- Optional libraries for code syntax highlighting and classList support in IE9 -->
<script src="js/mylibs/hakimel-reveal.js/lib/highlight.js"></script>
<script src="js/mylibs/hakimel-reveal.js/lib/classList.js"></script>

<script>
    // Parse the query string into a key/value object
    var query = {};
    location.search.replace( /[A-Z0-9]+?=(\w*)/gi, function(a) {
        query[ a.split( '=' ).shift() ] = a.split( '=' ).pop();
    } );

    Reveal.initialize({
        // Display controls in the bottom right corner
        controls: true,

        // Display a presentation progress bar
        progress: true,

        // If true; each slide will be pushed to the browser history
        history: true,

        // Flags if mouse wheel navigation should be enabled
        mouseWheel: true,

        // Apply a 3D roll to links on hover
        rollingLinks: true,

        // UI style
        theme: query.theme || 'default', // default/neon

        // Transition style
        transition: query.transition || 'default' // default/cube/page/concave/linear(2d)
    });

    hljs.initHighlightingOnLoad();
</script>
    
        
	
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.  	 63	 +       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-28257077-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>

<!-- Notes -->
<!--<section>
            <h1>Reveal.js</h1>
            <h3 class="inverted">A CSS 3D Slideshow</h3>
            <script>
                // Delicously hacky. Look away.
                if( navigator.userAgent.match( /(iPhone|iPad|iPod|Android)/i ) )
                document.write( '<p style="color: rgba(0,0,0,0.3); text-shadow: none;">('+'Tap to navigate'+')</p>' );
            </script>
        </section>

        <section>
            <h2>Heads Up</h2>
            <p>
                reveal.js is an easy to use, HTML based, presentation tool. You'll need a modern browser with 
                support for CSS 3D transforms to see it in its full glory.
            </p>
            <p>
                <i><small>- <a href="http://hakim.se">Hakim El Hattab</a> / <a href="http://twitter.com/hakimel">@hakimel</a></small></i>
            </p>
        </section>

         Example of nested vertical slides 
        <section>
            <section>
                <h2>Vertical Slides</h2>
                <p>
                    Slides can be nested inside of other slides,<br/>
                    try pressing <a href="#/2/1">down</a>.
                </p>
                <a href="#/2/1" class="image">
                    <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png">
                </a>
            </section>
            <section>
                <h2>Basement Level 1</h2>
                <p>Press down or up to navigate.</p>
            </section>
            <section>
                <h2>Basement Level 2</h2>
                <p>Cornify</p>
                <a class="test" href="http://cornify.com">
                    <img width="280" height="326" src="https://s3.amazonaws.com/hakim-static/reveal-js/cornify.gif">
                </a>
            </section>
            <section>
                <h2>Basement Level 3</h2>
                <p>That's it, time to go back up.</p>
                <a href="#/2" class="image">
                    <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" style="-webkit-transform: rotate(180deg);">
                </a>
            </section>
        </section>

        <section>
            <h2>Holistic Overview</h2>
            <p>
                Press <strong>SPACE</strong> to enter the slide overview!
            </p>
        </section>

        <section>
            <h2>Transition Styles</h2>
            <p>
                You can select from different transitions, like:
            </p>
            <ul>
                <li><a href="http://lab.hakim.se/reveal-js/?transition=cube">Cube</a></li>
                <li><a href="http://lab.hakim.se/reveal-js/?transition=page">Page</a></li>
                <li><a href="http://lab.hakim.se/reveal-js/?transition=concave">Concave</a></li>
            </ul>
        </section>

        <section>
            <h2>Marvelous Unordered List</h2>
            <ul>
                <li>No order here</li>
                <li>Or here</li>
                <li>Or here</li>
                <li>Or here</li>
            </ul>
        </section>

        <section>
            <h2>Fantastic Ordered List</h2>
            <ol>
                <li>One is smaller than...</li>
                <li>Two is smaller than...</li>
                <li>Three!</li>
            </ol>
        </section>

        <section>
            <section data-state="alert">
                <h2>Global State</h2>
                <p>
                    Set <code>data-state="something"</code> on a slide and <code>"something"</code>
                    will be added as a class to the document element when the slide is open. This let's you
                    apply broader style changes, like switching the background.
                </p>
                <a href="#/7/1" class="image">
                    <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png">
                </a>
            </section>
            <section data-state="blackout">
                <h2>"blackout"</h2>
                <a href="#/7/2" class="image">
                    <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png">
                </a>
            </section>
            <section data-state="soothe">
                <h2>"soothe"</h2>
                <a href="#/7/0" class="image">
                    <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" style="-webkit-transform: rotate(180deg);">
                </a>
            </section>
        </section>

        <section>
            <h2>Clever Quotes</h2>
            <p>
                These guys come in two forms, inline: <q cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">
                The nice thing about standards is that there are so many to choose from</q> and block:
            </p>
            <blockquote cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">
                For years there has been a theory that millions of monkeys typing at random on millions of typewriters would 
                reproduce the entire works of Shakespeare. The Internet has proven this theory to be untrue.
            </blockquote>
        </section>

        <section>
            <h2>Pretty Code</h2>
            <pre><code contenteditable>
    var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
            document.body.style['MozPerspective'] !== undefined ||
            document.body.style['perspective'] !== undefined;

    function linkify( selector ) {
    if( supports3DTransforms ) {

    var nodes = document.querySelectorAll( selector );

    for( var i = 0, len = nodes.length; i < len; i++ ) {
        var node = nodes[i];

        if( !node.className || !node.className.match( /roll/g ) ) {
            node.className += ' roll';
            node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
        }
    };
    }
    }

    linkify( 'a' );
            </code></pre>
            <p>Courtesy of <a href="http://softwaremaniacs.org/soft/highlight/en/description/">highlight.js</a>.</p>
        </section>

        <section>
            <h2>Intergalactic Interconnections</h2>
            <p>
                You can link between slides internally,<br/>
                <a href="#/2/3">like this</a>.
            </p>
        </section>

        <section>
            <h2>Fragmented Views</h2>
            <p>Hit the next arrow...</p>
            <p class="fragment">... to step through ...</p>
            <ol>
                <li class="fragment"><code>any type</code></li>
                <li class="fragment"><em>of view</em></li>
                <li class="fragment"><strong>fragments</strong></li>
            </ol>
        </section>

        <section>
            <h2>Spectacular image!</h2>
            <a class="image" href="http://hakim.se/experiments/html5/breakdom/" target="_blank">
                <img width="320" height="412" src="https://s3.amazonaws.com/hakim-static/reveal-js/breakdom.png">
            </a>
        </section>

        <section>
            <h2>Stellar Links</h2>
            <ul>
                <li><a href="https://github.com/hakimel/reveal.js">Source code on github</a></li>
                <li><a href="http://hakim.se/projects/reveal-js">Read more on my site</a></li>
                <li><a href="http://twitter.com/hakimel">Follow me on Twitter</a></li>
            </ul>
        </section>

        <section>
            <h1>THE END</h1>
            <h3 class="inverted">BY Hakim El Hattab / hakim.se</h3>
        </section>-->