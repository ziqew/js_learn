

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

  <title>Foundation Documentation: Sass Mixins</title>

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
        <div class="nine columns">
          <h2>Unlock the Power of Sass</h2>
          <h5 class="subheader">We're dedicated to maintaining Foundation using Sass (the Scss syntax to be exact) and we want to make it the best it can be. Sass gives us the ability to let you choose what parts to import or how it looks.</h5>

          <h3>Mixins &amp; Functions</h3>
          <p>We wrote some awesome mixins and function that you can use for semantic grids, CSS triangles and more! These can be used on any project in conjunction with mixins provided by Compass or some you create yourself!</p>

          <hr>

          <a name="semantic-grid"></a>
          <h4>Semantic Grid Mixins</h4>
          <p>Are you tired of adding extra divs just to include classes for building your grid? We are too! Our semantic grid mixins will help you write more semantic markup. Here's how they work:</p>
          <table class="small">
            <thead>
              <th width="30%">Mixin Syntax</th>
              <th width="45%">Description</th>
              <th>Options</th>
            </thead>
            <tbody>
              <tr>
                <td>@include outerRow();</td>
                <td>Create container rows to start the grid.</td>
                <td></td>
              </tr>
              <tr>
                <td>@include innerRow(<em>options</em>);</td>
                <td>Create nested rows, but they must be inside a column.</td>
                <td><strong><em>collapse</em></strong><br>Collapse the margins of an inner row.</td>
              </tr>
              <tr>
                <td>@include column(#, <em>options</em>);</td>
                <td>Create columns inside of a row.<br><strong>Must contain number.</strong></td>
                <td><strong><em>center</em></strong><br>Center columns within the row.<br><br>
                    <strong><em>collapse</em></strong><br>Collapse column gutter for post/pre-fix elements.
                </td>
              </tr>
              <tr>
                <td>@include offsetBy(#);</td>
                <td>Offset columns to the right.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
              <tr>
                <td>@include push(#);</td>
                <td>Source ordering to push columns to the right.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
              <tr>
                <td>@include pull(#);</td>
                <td>Source ordering to pull columns to the left.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
              <tr>
                <td>@include mobileRow();</td>
                <td>Create a row that appears only on mobile.</td>
                <td></td>
              </tr>
              <tr>
                <td>@include mobileColumn(#);</td>
                <td>Create mobile columns inside mobile rows.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
              <tr>
                <td>@include mobilePush(#);</td>
                <td>Source ordering to push mobile columns to the right.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
              <tr>
                <td>@include mobilePull(#);</td>
                <td>Source ordering to pull mobile columns to the left.<br><strong>Must contain number.</strong></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <div class="row">
            <div class="six columns">
              <h6>Markup Example</h6>
<pre><code data-language='html'>
&lt;header&gt;
  &lt;aside&gt;&lt;/aside&gt;
  &lt;section&gt;
    &lt;article&gt;
      &lt;header&gt;&lt;/header&gt;
      &lt;div&gt;&lt;/div&gt;
    &lt;/article&gt;
  &lt;/section&gt;
&lt;/header&gt;
</code></pre>            </div>
            <div class="six columns">
              <h6>Scss Example</h6>
<pre><code data-language='css'>
header { @include outerRow();
  aside { @include column(4); }
  section { @include column(8);
    article { @include innerRow();
      header { @include column(2); min-width: 0; }
      div { @include column(10); }
    }
  }
}
</code></pre>            </div>
          </div>

          <hr>

          <div class="row">
            <div class="four columns">
              <a name="modular-scale"></a>
              <h4>Modular Scale</h4>
              <p>The typography in Foundation is set to a specific <a href="https://github.com/scottkellum/modular-scale">modular scale</a>, which you can update in your <code>_settings.scss</code> file. In order to utilize the scale, you must follow the correct syntax.</p>
            </div>
            <div class="eight columns">
              <br>
              <table class="small twelve">
                <thead>
                  <tr>
                    <th width="30%">Function</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ms(#);</td>
                    <td>This function calculates the number of your scale for you based on its step (1, 2, 3, 4, etc).</td>
                  </tr>
                </tbody>
              </table>
              <pre><code data-language='css'>
.element { font-size: ms(0); /* 0 = first in scale, 1,2,3 and so on... */ }
</code></pre>            </div>
          </div>

          <hr>

          <a name="font-size"></a>
          <div class="row">
            <div class="four columns">
              <h4>Font Size<br><small>Older usage pattern, still works fine.</small></h5>
              <p>If you feel like breaking out of the modular scale or not using the provided function, you can use our font-size mixin!</p>
            </div>
            <div class="eight columns">
              <br>
              <table class="small twelve">
                <thead>
                  <tr>
                    <th>Function</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>@include font-size(size);</td>
                    <td>Outputs <strong>px</strong> and <strong>rem</strong> for the number you include!</td>
                  </tr>
                </tbody>
              </table>
<pre><code data-language='css'>
.element { @include font-size(18); }
</code></pre>            </div>
          </div>

          <hr>

          <div class="row">
            <div class="four columns">
              <a name="clearfix"></a>
              <h4>Clearfix</h4>
              <p>We use this mixin for our grid and semantic grid mixins. It will employ the classic clearfix style for making sure thing clear correctly.</p>
            </div>
            <div class="eight columns">
              <br>
              <table class="small twelve">
                <thead>
                  <tr>
                    <th>Function</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>@include clearfix()</td>
                    <td>Make sure you element clears everything in the flow.</td>
                  </tr>
                </tbody>
              </table>
<pre><code data-language='css'>
.element { @include clearfix(); }
</code></pre>            </div>
          </div>

          <hr>

          <div class="row">
            <div class="four columns">
              <a name="css-triangle"></a>
              <h4>CSS Triangles</h4>
              <p>If you are unfamiliar with CSS triangles, <a href="http://css-tricks.com/snippets/css/css-triangle/">learn more here</a>. We use them all over in foundation for things like the arrows in dropdowns and pips on tooltips flyouts.</p>
            </div>
            <div class="eight columns">
              <br>
              <table class="small twelve">
                <thead>
                  <tr>
                    <th>Function</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>@include cssTriangle()</td>
                    <td>Make sure you element clears everything in the flow.</td>
                  </tr>
                </tbody>
              </table>
<pre><code data-language='css'>
.example { @include cssTriangle(5px, #fff, bottom); }
</code></pre>            </div>
          </div>

          <hr>

          <div class="panel">
            <h3>See What We've Got</h3>
            <h5 class="subheader">Foundation includes many pre-styled elements for you to use on your projects. The great thing about our styles is that they are easily overridden or built upon. We like to stay out of the way when it comes to building a styleguide for your project.</h5>
            <a class="button" href="components.php">Check out our components &raquo;</a>
          </div>

        </div>
        <div class="three columns">
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
    <li class="active"><a href="sass.php">Sass</a>
              <ul>
          <li ><a href="sass.php">@imports</a></li>
          <li ><a href="sass-settings.php">Settings</a></li>
          <li class="active"><a href="sass-mixins.php">Mixins</a></li>
        </ul>
          </li>
    <li ><a href="quickstart.php">CSS Quickstart</a></li>
    <li ><a href="components.php">Components</a>
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