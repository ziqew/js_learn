

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- For third-generation iPad with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/favicons/apple-touch-icon-144x144-precomposed.png">
  <!-- For iPhone with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/favicons/apple-touch-icon-114x114-precomposed.png">
  <!-- For first- and second-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/favicons/apple-touch-icon-72x72-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="../images/favicons/apple-touch-icon-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->

  <link rel="icon" href="../images/favicons/favicon.ico" type="image/x-icon" />

  <meta name="keywords" content="foundation, design, frameworks, framework, css framework, html framework, html5, css3, SASS, SCSS, compass, responsive, design" />
  <meta name="description" content="Documentation for Foundation by ZURB. Foundation is the most advanced responsive front-end framework in the world." />
  <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
  <meta name="copyright" content="ZURB, inc. Copyright (c) 2012" />

  <title>Foundation Documentation: MQ</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="http://www.zurb.com/assets/foundation.top-bar.css">
  <link rel="stylesheet" href="http://www.zurb.com/assets/zurb.mega-drop.css">
	<link rel="stylesheet" href="../stylesheets/docs/presentation.css">

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body class="off-canvas">

  <!-- ZURBar -->
  <div class="container top-bar home-border">
    <div class="attached">
      <div class="name" onclick="void(0);">
        <span><a href="http://foundation.zurb.com">Foundation</a> <a href="#" class="toggle-nav"></a></span>
  		</div>

  		<ul class="right">
        <li class="show-for-small">
          <a href="../index.php">Home</a>
        </li>
  			<li>
  			  <a href="../grid.php" >Features</a>
  			</li>
        <li>
          <a href="../templates.php">Add-ons</a>
        </li>
  			<li>
  			  <a href="../case-soapbox.php" >Case Studies</a>
  			</li>
  			<li>
  			  <a href="index.php">Docs</a>
  			</li>
  		  <li>
  		    <a href="http://github.com/zurb/foundation">GitHub</a>
  			</li>
  			<li class="download"><a class="small button src-download" href="../download.php">Download</a></li>
  		</ul>
  	</div>
  </div>

  <!-- INSERT MEGA DROP DOWN HERE -->
  <div class="container" id="megaDrop">
  <div class="mobile-main-nav-padding">

    <div class="row top">
      <div class="eight columns">
        <a href="http://www.zurb.com"><h4><img alt="Zurb-logo-drop-down" src="http://www.zurb.com/assets/logo/zurb-logo-drop-down-ec71ef7b6be82b12ab4a64a655377e1f.png" /> Design Great Products Faster</h4></a>
      </div>
      <div class="four columns">
        <div class="right links">
          <a href="http://www.zurb.com/about">About</a> | <a href="http://www.zurb.com/blog">ZURBlog </a> | <a href="http://www.zurb.com/sitemap">Sitemap</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="tablet-padding">
        <div class="three columns property" id="services">
          <a href="http://www.zurb.com/services">
            <h4>Services</h4>
            <p>We'll help you get online products designed better and faster than ever before and set you up for future iterations.</p>
            <span>Let's Work Together &rarr;</span>
          </a>
        </div>

        <div class="show-on-phones"><br /><br /></div>
        <div class="three columns property" id="foundation">
          <a href="http://foundation.zurb.com">
            <h4>Foundation</h4>
            <p>We developed the most advanced responsive front-end framework in the world and made it free-for-all.</p>
            <span>Discover Foundation &rarr;</span>
          </a>
        </div>
        <div class="show-on-phones"><br /><br /></div>
        <div class="three columns property" id="apps">
          <a href="http://zurb.com/apps">
            <h4>ZURB<span class="apps">apps</span></h4>
            <p>A powerful design suite that will help you prototype, iterate and collect feedback on your product design.</p>
            <span>Get Started &rarr;</span>
          </a>
        </div>

        <div class="show-on-phones"><br /><br /></div>
        <div class="three columns property" id="expo">
          <a href="http://zurb.com/expo">
            <h4>Expo</h4>
            <p>We think anyone can design great products and we will share our thoughts, ideas and design resources to show you how to do it.</p>
            <span>Learn More &rarr;</span>
          </a>
        </div>
      </div>
    </div>


  </div>
</div>
  <!-- /ZURBar -->

	<header id="header" class="row">
	  <div class="eight columns">
	    <h1><a href="index.php">Foundation 3 Documentation</a></h1>
	    <h4 class="subheader">Everything you need to know to build for the future.</h4>

  	  <div class="show-for-small menu-action">
  	    <a class='sidebar-button small secondary button' id='sidebarButton' href="#sidebar">
    	    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="18px" height="18px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
            <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="8.907" x2="48" y2="8.907"/>
            <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="24.173" x2="48" y2="24.173"/>
            <line fill="none" stroke="#000000" stroke-width="8" stroke-miterlimit="10" x1="0" y1="39.439" x2="48" y2="39.439"/>
            Menu
          </svg>
  	    </a>
  	  </div>
	  </div>
	</header>

  <div class="row">
    <section role="main">
      <div class="row">
        <div class="eight columns">
          <h2>Foundation Media Queries</h2>
          <h5 class="subheader">We built Foundation with lots of different devices in mind, but none in particular. Since most of Foundation is controlled by the grid, the percentage widths take care of many layouts until you hit our single small device breakpoint of &lt;768px.</h5>

          <h3>A Single Breakpoint?</h3>
          <p>The Foundation grid is written to use percentage widths for all of the columns. This enables us to handle layouts for desktops and tablets pretty easily, but we included a single breakpoint at 768px for devices that fall below that width.</p>
<pre><code data-language='css'>
@media only screen and (max-width: 767px) {
  /* Small Device Styles here */
}
</code></pre>          <hr>

          <a name="visibility"></a>
          <h3>Visibility Classes</h3>
          <p>Foundation 3 allows you to easily turn elements on and off based on certain device criteria, like screen size, touch, or orientation.</p>

          <div class="row tabs">
            <div class="seven columns">
              <h4>Screen Size <small>show-for</small></h4>
            </div>
            <div class="five columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#screenEx">Example</a></dd>
                <dd><a href="#screenCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="screenExTab">
              <p class="panel">The following text should describe the device you are using:
                <strong class="show-for-xlarge">You are on a very large screen.</strong>
                <strong class="show-for-large">You are on a large screen.</strong>
                <strong class="show-for-large-up">You are on a large or very large screen.</strong>
                <strong class="show-for-medium">You are on a medium screen.</strong>
                <strong class="show-for-medium-down">You are on a medium or small screen.</strong>
                <strong class="show-for-small">You are on a small screen, like a smartphone.</strong>
              </p>
            </li>
            <li id="screenCodeTab">
<pre><code data-language='html'>
&lt;p class=&quot;panel&quot;&gt;The following text should describe the device you are using:
  &lt;strong class=&quot;show-for-xlarge&quot;&gt;You are on a very large screen.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-large&quot;&gt;You are on a large screen.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-large-up&quot;&gt;You are on a large or very large screen.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-medium&quot;&gt;You are on a medium screen.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-medium-down&quot;&gt;You are on a medium or small screen.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-small&quot;&gt;You are on a small screen, like a smartphone.&lt;/strong&gt;
&lt;/p&gt;
</code></pre>            </li>
          </ul>

          <div class="row tabs">
            <div class="seven columns">
              <h4>Screen Size <small>hide-for</small></h4>
            </div>
            <div class="five columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#screenExAlt">Example</a></dd>
                <dd><a href="#screenCodeAlt">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="screenExAltTab">
              <p class="panel">Using the opposite rules, the following text should inversely describe the device you are using:
                <strong class="hide-for-xlarge">You are not on a very large screen.</strong>
                <strong class="hide-for-large">You are not on a large screen.</strong>
                <strong class="hide-for-large-up">You are not on a large or very large screen.</strong>
                <strong class="hide-for-medium">You are not on a medium screen.</strong>
                <strong class="hide-for-medium-down">You are not on a medium or small screen.</strong>
                <strong class="hide-for-small">You are not on a small screen.</strong>
              </p>
            </li>
            <li id="screenCodeAltTab">
<pre><code data-language='html'>
&lt;p class=&quot;panel&quot;&gt;Using the opposite rules, the following text should inversely describe the device you are using:
  &lt;strong class=&quot;hide-for-xlarge&quot;&gt;You are not on a very large screen.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-large&quot;&gt;You are not on a large screen.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-large-up&quot;&gt;You are not on a large or very large screen.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-medium&quot;&gt;You are not on a medium screen.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-medium-down&quot;&gt;You are not on a medium or small screen.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-small&quot;&gt;You are not on a small screen.&lt;/strong&gt;
&lt;/p&gt;
</code></pre>            </li>
          </ul>

          <div class="row tabs">
            <div class="seven columns">
              <h4>Orientation Detection</h4>
            </div>
            <div class="five columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#orientEx">Example</a></dd>
                <dd><a href="#orientCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="orientExTab">
              <p class="panel">The following text should describe the device you are using:
                <strong class="show-for-landscape">You are in landscape orientation.</strong>
                <strong class="show-for-portrait">You are in portrait orientation.</strong>
              </p>
            </li>
            <li id="orientCodeTab">
<pre><code data-language='html'>
&lt;p class=&quot;panel&quot;&gt;The following text should describe the device you are using:
  &lt;strong class=&quot;show-for-landscape&quot;&gt;You are in landscape orientation.&lt;/strong&gt;
  &lt;strong class=&quot;show-for-portrait&quot;&gt;You are in portrait orientation.&lt;/strong&gt;
&lt;/p&gt;
</code></pre>            </li>
          </ul>

          <div class="row tabs">
            <div class="seven columns">
              <h4>Touch Detection</h4>
            </div>
            <div class="five columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#touchEx">Example</a></dd>
                <dd><a href="#touchCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="touchExTab">
              <p class="panel">The following text should describe the device you are using:
                <strong class="show-for-touch">You are on a touch-enabled device.</strong>
                <strong class="hide-for-touch">You are not on a touch-enabled device.</strong>
              </p>
            </li>
            <li id="touchCodeTab">
<pre><code data-language='html'>
&lt;p class=&quot;panel&quot;&gt;The following text should describe the device you are using:
  &lt;strong class=&quot;show-for-touch&quot;&gt;You are on a touch-enabled device.&lt;/strong&gt;
  &lt;strong class=&quot;hide-for-touch&quot;&gt;You are not on a touch-enabled device.&lt;/strong&gt;
&lt;/p&gt;
</code></pre>            </li>
          </ul>

          <p><strong>Note:</strong> These classes have been listed in order of precendence. Touch classes will override orientation, which will override size.</p>

          <a name="mq-viewer"></a>
          <div class="row tabs">
            <div class="seven columns">
              <h4>Media Query Viewer</h4>
            </div>
            <div class="five columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#mqEx">Details</a></dd>
                <dd><a href="#mqCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="mqExTab">
              <p>Easily add the ability to show which media query you are currently viewing. To activate the viewer, make sure you have <strong>jquery.foundation.mediaQueryToggle.js</strong> linked up on your page. From there, simply add the markup to your page or press <kbd>M</kbd>. The keyboard toggle won't work on mobile devices so make sure you add the markup in those cases.</p>
            </li>
            <li id="mqCodeTab">
<pre><code data-language='html'>
&lt;div id=&quot;fqv&quot; style=&quot;position:fixed;top:4px;left:4px;z-index:999;color:#fff;&quot;&gt;&lt;p style=&quot;font-size:12px;background:rgba(0,0,0,0.75);padding:5px;margin-bottom:1px;line-height:1.2;&quot;&gt;&lt;span class=&quot;left&quot;&gt;Media:&lt;/span&gt; &lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-xlarge&quot;&gt;Extra Large&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-large&quot;&gt;Large&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-medium&quot;&gt;Medium&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-small&quot;&gt;Small&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-landscape&quot;&gt;Landscape&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-portrait&quot;&gt;Portrait&lt;/span&gt;&lt;span style=&quot;font-weight:bold;&quot; class=&quot;show-for-touch&quot;&gt;Touch&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;
</code></pre>            </li>
          </ul>

          <a name="breakpoints"></a>
          <h4>Foundation breakpoints breakdown</h4>
          <p>Here is the CSS media queries we use to create the visibility classes:</p>
<pre><code data-language='css'>
/* Very large screens */
@media only screen and (min-width: 1441px) { ... }

/* Medium screens */
@media only screen and (max-width: 1279px) and (min-width: 768px) { ... }

/* Small screens */
@media only screen and (max-width: 767px) { ... }

/* Landscape Orientation */
@media screen and (orientation: landscape) { ... }

/* Portrait Orientation */
@media screen and (orientation: portrait) { ... }

/* Touch Detection */
.touch .your-class { ... }
</code></pre>
          <hr>

          <div class="panel">
            <h3>Typography with Relationship</h3>
            <h5 class="subheader">We built our typography around a golden modular scale that gives us a set of numbers to base our sizes on, creating harmony on the page.</h5>
            <a class="button" href="typography.php">Learn about our typography &raquo;</a>
          </div>
        </div>
        <div class="four columns">
          				<div class="panel secondary hide-on-phones">
					<p>Grab the copy of Foundation best for you, whether that's Scss or CSS, everything or just bits and pieces.</p>
					<p>
						<a href="../download.php" class="small button mobile src-download">Install Foundation</a>
					</p>
				</div>


				<!-- ==========================
				ZURBjobs
				=============================== -->

				<div class="jobs hide-on-phones">
					<h5>Awesome product jobs:</h5>
					<script type="text/javascript" src="http://www.zurb.com/jobs/widgets/jobs.js?limit=3&variation=foundation-sidebar"></script>
					<a id="via" href="http://zurbjobs.com">via&nbsp;<span class="jobs-link">ZURBjobs</span></a>
				</div>
        </div>
      </div>
    </section>

    <section id="sidebar" role="complementary">

  <!-- Existing Nav Structure -->
  <!-- <dl class="tabs vertical hide-on-phones">
    <dd ><a href="index.php">Getting Started</a></dd>
    <dd ><a href="installing.php">CSS Version</a></dd>
    <dd ><a href="gem-install.php">Gem Versions</a></dd>
    <dd ><a href="grid.php">The Grid</a></dd>
    <dd ><a href="typography.php">Typography</a></dd>
    <dd ><a href="buttons.php">Buttons</a></dd>
    <dd ><a href="forms.php">Forms</a></dd>
    <dd ><a href="navigation.php">Navigation</a></dd>
    <dd ><a href="tabs.php">Tabs</a></dd>
    <dd ><a href="elements.php">Elements</a></dd>
    <dd ><a href="orbit.php">Orbit</a></dd>
    <dd ><a href="reveal.php">Reveal</a></dd>
    <dd ><a href="javascripts.php">Javascripts</a></dd>
    <dd ><a href="support.php">Support</a></dd>
  </dl> -->

  <!-- New Nav Structure -->
  <ul class="tabs vertical hide-on-phones">
    <li ><a href="index.php">Getting Started</a></li>
    <li ><a href="compass.php">Compass</a></li>
    <li ><a href="rails.php">Rails</a></li>
    <li ><a href="sass.php">Sass</a>
          </li>
    <li ><a href="quickstart.php">CSS Quickstart</a></li>
    <li class="active"><a href="components.php">Components</a>
              <ul>
          <li ><a href="components.php">Overview</a></li>
          <li ><a href="grid.php">The Grid</a></li>
          <li class="active"><a href="media-queries.php">Media Queries</a></li>
          <li ><a href="typography.php">Typography</a></li>
          <li ><a href="buttons.php">Buttons</a></li>
          <li ><a href="forms.php">Forms</a></li>
          <li ><a href="navigation.php">Navigation</a></li>
          <li ><a href="tabs.php">Tabs</a></li>
          <li ><a href="elements.php">Elements</a></li>
        </ul>
          </li>
    <li ><a href="javascripts.php">Javascripts</a>
          </li>
    <li ><a href="support.php">Support</a>
          </li>
  </ul>

</section>  </div>


  <hr />

	 <!-- Das Footer -->
	  <footer class="row">
	    <section class="five columns">
	      <h6><strong>Made by ZURB</strong></h6>
        <p>Foundation is made by <a href="http://www.zurb.com/">ZURB</a>, a product design company in Campbell, California. We've put more than 14 years of experience building web products, services and websites into this framework. <a href="../about.php">Foundation Info and Goodies &rarr;</a></p>
	    </section>

	    <section class="three columns">
	      <h6><strong>Using Foundation?</strong></h6>
	      <p>Let us know how you're using Foundation and we might feature you as an example! <a href="mailto:foundation@zurb.com?subject=I'm%20using%20Foundation">Get in touch &rarr;</a></p>
	    </section>

	    <section class="four columns">
	      <h6><strong>Need some help?</strong></h6>
	      <p>For answers or help visit the <a href="support.php">Support page</a>.</p>
	      <ul class="inline-list">
        	<li>
      	    <a href="http://www.facebook.com/ZURB" target="_blank"><span class="glyph social">d</span></a>
      		</li>
      		<li>
            <a href="https://plusone.google.com/_/+1/confirm?url=http://foundation.zurb.com&title=Foundation%20from%20ZURB" target="_blank"><span class="glyph social">l</span></a>
      		</li>
      		<li>
      			<a href="http://www.twitter.com/foundationzurb" target="_blank"><span class="glyph social">e</span></a>
      		</li>
      	</ul>
	    </section>
	  </footer>

	  <div id="copyright">
      <div class="row">
        <div class="four columns">
          <p>Site content &copy; 2012 ZURB, inc.</p>
        </div>
        <div class="eight columns">
          <ul class="inline-list right">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../download.php">Download</a></li>
            <li><a href="index.php">Documentation</a></li>
            <li><a href="installing.php">Install</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="http://feeds.feedburner.com/zurb/blog">Subscribe to the ZURBlog</a></li>
          </ul>
        </div>
      </div>
    </div>

		<div id="navModal" class="reveal-modal">
			<h3>Foundation Docs</h3>
			<dl class="nice tabs vertical">
				<dd><a href="index.php">Getting Started</a></dd>
				<dd><a href="grid.php">Grid</a></dd>
				<dd><a href="buttons.php">Buttons</a></dd>
				<dd><a href="forms.php">Forms</a></dd>
				<dd><a href="layout.php">Layout</a></dd>
				<dd><a href="ui.php">UI</a></dd>
				<dd><a href="orbit.php">Orbit</a></dd>
				<dd><a href="reveal.php">Reveal</a></dd>
				<dd><a href="gems.php">Gems</a></dd>
				<dd><a href="qa.php">QA</a></dd>
			</dl>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	</div>
	<script src="../public/assets/marketing_docs.js"></script>
	<script src="http://www.zurb.com/assets/zurb.mega-drop.js"></script>
  <script src="../public/assets/rainbow.min.js"></script>
  <script src="../public/assets/docs.js"></script>
  <script>
    $(document).ready(function() {
      Rainbow.color();
    });
  </script>
  <script>

    var _gaq = _gaq || [];
  	_gaq.push(
  	  ['_setAccount', 'UA-2195009-2'],
  	  ['_trackPageview'],
  	  ['b._setAccount', 'UA-2195009-27'],
  	  ['b._trackPageview']
  	);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    $(document).on('click', '[data-src-download]', function(event){
      var version = $(event.currentTarget).attr('data-src-download');
      _gaq.push(['_trackEvent', 'Foundation', 'Downloaded', version]);
    });
    var doc = $(document);
    doc.on('click.fndtn.clearing', 'a.clearing-close', function () {
      $('#sidebar').show();
    });
    doc.on('click.fndtn.clearing', 'ul[data-clearing] li', function () {
      $('#sidebar').hide();
    });
  </script>
</body>
</html>