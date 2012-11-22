<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <?php require('../base.php'); ?>
	<meta charset="utf-8">

  <title>Conflict Model @ UH Game Theory Reading Group</title>
  <link rel="stylesheet" href="js/mylibs/reveal.js/css/reveal.css">
  <link rel="stylesheet" href="js/mylibs/reveal.js/css/theme/default.css">
  <link rel="stylesheet" href="js/mylibs/reveal.js/lib/css/zenburn.css">
  <!-- JS-->
  <!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="js/mylibs/reveal.js/css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>
<!-- grab jQuery from Google SDN , fallback on local, if offline -->
<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAyKn8HaXYbbw-mn2gmwFcRRShAtsdeGT-UGtm-dQfxBjmpMYAexTFEqIuhdDi8zEBagigNPSTab7PQg"></script>
<!--Call jQuery with permissions from above-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
<div class="reveal">
    <!-- Any section element inside of this container is displayed as a slide -->
    <div class="slides">
        <section>
            <h1>Modeling Ethnic Conflict with Altruism</h1>
            <h2>K. Clay McKell</h2>
            <h2>April 24, 2012</h2>
            <h3>UH Manoa Game Theory Reading Group</h3>
            <h4>Joint work with: Sun-Ki Chai and G&uuml;rdal Arslan</h4>
            <script>
                // Delicously hacky. Look away.
                if( navigator.userAgent.match( /(iPhone|iPad|iPod|Android)/i ) )
                document.write( '<p style="color: rgba(0,0,0,0.3); text-shadow: none;">('+'Tap to navigate'+')</p>' );
            </script>
        </section>
        <section>
            <h2>Questions to keep in mind</h2>
            <ul>
                <li class="fragment">Why this question?</li>
                <li class="fragment">What's the math?</li>
                <li class="fragment">Is there an equilibrium?</li>
                <li class="fragment">Is it unique?</li>
            </ul>
        </section>
        <section>
            <h2>Why Ethnic Conflict?</h2>
            <section>
                <img src="Research-files/images/yugoslavia.png" title="Yugoslavia" alt="Ethnic group map of Yugoslavia"/>
                <p>Ethnic group map of former Yugoslavia</p>
                <p><small>from Rabushka and Shepsle 1972, p. 184</small></p>
            </section>
            <section>
                <img src="Research-files/images/Philippine_ethnic_groups_per_province.PNG" title="Philippines" alt="Ethnic group map of the Philippines"/>
                <p>Ethnic group map of the Philippines</p>
                <p><small>public domain</small></p>
            </section>
            <section>
                <img src="Research-files/images/nigeria.png" title="Nigeria" alt="Ethnic group map of Nigeria"/>
                <p>Ethnic group map of Nigeria</p>
                <p><small>from Rabushka and Shepsle 1972, p. 181</small></p>
            </section>
        </section>
        <section>
            <h2>Model description</h2>
            <section>
                <ul>
                    <li>$L\geq 2$ players</li>
                    <li>Budget: $\Pi_i$</li>
                    <li>Action: $\theta_i = (\theta_{i1},\ldots,\theta_{iL})$</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>Institutional oversight: $I$</li>
                    <li>Fraction of investments spent: $c$</li>
                    <li>Money in the bank: 
                        $$ \bar{\Pi}_i(\theta_i) = \Pi_i - c\sum_{j\neq i}\theta_{ij} = (1-c)\Pi_i + c\theta_{ii} $$
                    </li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>Likelihood of player $i$ beating player $j$:
                        $$ \frac{\theta_{ij}}{\epsilon + \theta_{ij} + \theta_{ji}} $$
                    </li>
                    <li>Payout if $i$ beats $j$:
                        $$ \frac{\lambda \bar{\Pi}_j}{L-1}, \quad \lambda\in[0,1] $$
                    </li>
                </ul>
            </section>
            <section>
                <ul>
                    <li>Personal utility:
                        $$ \bar{U}_i(\theta) = I\Pi_i + (1-I)\left(\bar\Pi_i + \frac{\lambda}{L-1} \sum_{j\neq i} \frac{\theta_{ij}\bar{\Pi}_j - \theta_{ji}\bar{\Pi}_i}{\epsilon + \theta_{ij} + \theta_{ji}}\right) $$
                    </li>
                    <li>True utility: $$ U_i(\theta) = \sum_{j=1}^L \beta_{ij}\bar{U}_j(\theta) $$
                    </li>
                    <li>Altruism coefficients:
                        \begin{gather}
                            \beta_{ii} = 1, \\
                            \beta_{ij} \in [-1,1], j\neq i
                        \end{gather}
                    </li>
                </ul>
            </section>
        </section>
        <section>
            <h2>Is there a pure Nash equilibrium?</h2>
            <h3>For $L=2$ players: Yes</h3>
            <p>The game is concave.</p>
        </section>
        <section>
            <h2>Is there a pure Nash equilibrium?</h2>
            <h3>For $L\geq 3$ players: ?</h3>
            <section>
                <p>We don&#039t have
                <ul>
                    <li>Supermodularity</li>
                    <li>Quasiconcavity</li>
                    <li>Potential function</li>
                </ul>
                </p>
            </section>
            <section>
                <img src="Research-files/images/QuasiConcavityCounterExampleScaled.jpg" title="Quasiconcavity violated" alt="A convex combination of player 3's utility between two actions that falls below the minimum of the payoffs of the two actions." />
                <p>Quasiconcavity counterexample</p>
                <p><small>from McKell et. al., 2012</small></p>
            </section>
        </section>
        <section>
            <h2>Parameter analysis</h2>
            <section>
                <img src="Research-files/images/Symmetric.png"/>
                <p>Symmetric 2-player: $\Pi_1 = \Pi_2 = 10$, $\frac{\lambda}{c} = 1$, $\beta_{12}=\beta_{21}=0$.</p>
                <p><small>from McKell et. al., 2012</small></p>
            </section>
            <section>
                <img src="Research-files/images/Lopsided.png"/>
                <p>Lopsided budget: $\Pi_1 = 100$, $ \Pi_2 = 10$, $\frac{\lambda}{c} = 1$, $\beta_{12}=\beta_{21}=0$.</p>
                <p><small>from McKell et. al., 2012</small></p>
            </section>
            <section>
                <img src="Research-files/images/RatioComp.png"/>
                <p>Comparison of $\frac{\lambda}{c}$.  $\Pi_1 = \Pi_2 = 10$,  $\beta_{12}=\beta_{21}=0$.</p>
                <p><small>from McKell et. al., 2012</small></p>
            </section>
            <section>
                <img src="Research-files/images/AltComp.png"/>
                <p>Comparison of altruisms.  $\Pi_1 = \Pi_2 = 10$,  $\frac{\lambda}{c} = 1$.</p>
                <p><small>from McKell et. al., 2012</small></p>
            </section>
        </section>
        <section>
            <h2>Mahalo</h2>
            <h3>Questions?</h3>
            <h3>Bibliography</h3>
            <ul>
                <li>Rabushka, A. and K. A. Shepsle, <i>Politics in Plural Societies: A Theory of Democratic Instability</i>, Charles E. Merrill, 1972.</li>
                <li>McKell, K. C., S.-K. Chai and G. Arslan, <i>Modeling Ethnic Conflict with Altruism</i>, submitted to the 51st IEEE CDC, 2012</li>
            </ul>
        </section>
        
    </div>
</div>
<script>
// Clay's special jQuery.
$(document).ready(function(){
// Rewrite internal link targets.
    // Look for all anchors inside of the REVEAL div.
    $('div.reveal a').filter(function(index){
        var ref = $(this).attr('href');
        return ref.indexOf('http') == -1    // Filter through all anchros with hrefs that don't contain "http".
    }).each(function(index){                // On each of these, do:
        var ref = $(this).attr('href');
        var prefix = $('base').attr('href') + 'Research-files/ConflictModel4-12.php';
        $(this).attr('href',prefix+ref);    // Reassign the href as the above prefix (which points to the page we're on) concatenated with the original reference.
    });
// Adjust image dimensions so that they are never off screen.
	$(window).load(resizeImg);
	$(window).resize(resizeImg);
});
function resizeImg(){
    var wh = $(window).height();
    var ww = $(window).width();
    // 55% of height and 80% of width seem to be nice.
    $('div.reveal section img').css({'max-height':.55*wh, 'max-width':.8*ww});
}
</script>
<script src="js/mylibs/reveal.js/lib/js/head.min.js"></script>
<script src="js/mylibs/reveal.js/js/reveal.js"></script>

<script>
    Reveal.initialize({
        // Display controls in the bottom right corner
        controls: true,

        // Display a presentation progress bar
        progress: true,

        // If true; each slide will be pushed to the browser history
        history: true,
		center: false,
		keyboard: true,
		overview: true,
		loop: false,
		autoSlide: 0,
		

        // Flags if mouse wheel navigation should be enabled
        mouseWheel: true,

        // Apply a 3D roll to links on hover
        rollingLinks: true,

        // UI style
        //theme: query.theme || 'default', // default/neon
		theme: Reveal.getQueryHash().theme,

        // Transition style
        transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/linear(2d)
		
		// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'js/mylibs/reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
					// { src: 'js/mylibs/reveal.js/plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					// { src: 'js/mylibs/reveal.js/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					// { src: 'js/mylibs/reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'js/mylibs/reveal.js/plugin/zoom-js/zoom.js', async: false, condition: function() { return !!document.body.classList; } }
					// { src: 'js/mylibs/reveal.js/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
    });

    // hljs.initHighlightingOnLoad();
</script>
    
        
	
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.  	 63	 +       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-28257077-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>