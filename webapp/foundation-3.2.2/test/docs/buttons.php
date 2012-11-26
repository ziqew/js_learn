

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

  <title>Foundation Documentation: Buttons</title>

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
    			<h2>Buttons</h2>
    			<h5 class="subheader">Buttons are a convenient tool when it comes to more traditional actions. To that end, Foundation includes a lot of easy to use button styles that you can customize or override to fit your needs.</h5>

          <div class="row tabs">
            <div class="eight columns">
              <h3>Styles, Sizes &amp; Options</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#btnEx">Example</a></dd>
                <dd><a href="#btnCode">Code</a></dd>
              </dl>
            </div>
          </div>
  				<p>Foundation buttons have a number of parameters and styles &mdash; you can see a few examples below. The out of the box classes include size, type (color) and style (square, slightly rounded, and completely rounded).</p>
          <ul class="tabs-content">
            <li class="active" id="btnExTab">
              <div class="row">
                <div class="four columns">
                  <h5>Sizes</h5>
                  <a class="tiny button" href="#">Tiny</a><br><br>
                  <a class="small button" href="#">Small</a><br><br>
                  <a class="button" href="#">Medium</a><br><br>
                  <a class="large button" href="#">Large</a>
                </div>
                <div class="four columns">
                  <h5>Type</h5>
                  <a class="button" href="#">Normal</a><br><br>
                  <a class="secondary button" href="#">Secondary</a><br><br>
                  <a class="success button" href="#">Success</a><br><br>
                  <a class="alert button" href="#">Alert</a>
                </div>
                <div class="four columns">
                  <h5>Styles</h5>
                  <a class="button" href="#">Square</a><br><br>
                  <a class="radius button" href="#">Radius</a><br><br>
                  <a class="round button" href="#">Round</a>
                </div>
              </div>

              <br>
              <p>Button classes can also be applied to <code>button</code> elements, as well as <code>input type="submit"</code> elements.</p>

              <button class="button">Form Button</button>
              <input type="submit" class="button" value="Input Submit Button" />
              <a href="#" class="button">Regular Button &raquo;</a>
            </li>
            <li id="btnCodeTab">
<pre><code data-language='html'>
&lt;!-- Sizes --&gt;
&lt;a class=&quot;tiny button&quot; href=&quot;#&quot;&gt;Tiny&lt;/a&gt;
&lt;a class=&quot;small button&quot; href=&quot;#&quot;&gt;Small&lt;/a&gt;
&lt;a class=&quot;button&quot; href=&quot;#&quot;&gt;Medium&lt;/a&gt;
&lt;a class=&quot;large button&quot; href=&quot;#&quot;&gt;Large&lt;/a&gt;

&lt;!-- Types --&gt;
&lt;a class=&quot;button&quot; href=&quot;#&quot;&gt;Normal&lt;/a&gt;
&lt;a class=&quot;secondary button&quot; href=&quot;#&quot;&gt;Secondary&lt;/a&gt;
&lt;a class=&quot;success button&quot; href=&quot;#&quot;&gt;Success&lt;/a&gt;
&lt;a class=&quot;alert button&quot; href=&quot;#&quot;&gt;Alert&lt;/a&gt;

&lt;!-- Styles --&gt;
&lt;a class=&quot;button&quot; href=&quot;#&quot;&gt;Square&lt;/a&gt;
&lt;a class=&quot;radius button&quot; href=&quot;#&quot;&gt;Radius&lt;/a&gt;
&lt;a class=&quot;round button&quot; href=&quot;#&quot;&gt;Round&lt;/a&gt;

&lt;!-- Inputs and Submits --&gt;
&lt;button class=&quot;button&quot;&gt;Form Button&lt;/button&gt;
&lt;input type=&quot;submit&quot; class=&quot;button&quot; value=&quot;Input Submit Button&quot; /&gt;
</code></pre>            </li>
          </ul>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="button-groups"></a>
              <h3>Button Groups</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#btnGrpEx">Example</a></dd>
                <dd><a href="#btnGrpCode">Code</a></dd>
              </dl>
            </div>
          </div>
  				<h5 class="no-marg-top subheader">When you need a group of actions, button groups give you some easy-to-use options.</h5>
          <ul class="tabs-content">
            <li class="active" id="btnGrpExTab">
              <h5>Button Group - Radius</h5>
              <p>A button group is simply a <code>ul.button-group</code> in which each <code>li</code> contains a button. You can attach a button style, such as radius or rounded, to the entire group, and Foundation will apply the style to the first and last buttons in the group.</p>
              <ul class="button-group radius">
                <li><a href="#" class="button radius">Button 1</a></li>
                <li><a href="#" class="button radius">Button 2</a></li>
                <li><a href="#" class="button radius">Button 3</a></li>
              </ul>

              <h5 style="margin-top: 30px;">Even Button Groups</h5>
              <p>If you want a button group to fill a grid column with evenly sized actions, you can simply add two classes to the group: <code>.even</code> and either <code>.two-up</code>, <code>.three-up</code>, <code>.four-up</code>, or <code>.five-up</code>.

              <ul class="button-group even three-up">
                <li><a href="#" class="button">Button 1</a></li>
                <li><a href="#" class="button">Button 2</a></li>
                <li><a href="#" class="button">Button 3</a></li>
              </ul>

              <h5 style="margin-top: 30px;">Button Bars</h5>
              <p>A button bar is a group of button groups (I N C E P T I O N), perfect for situations where you want groups of actions that are all related to a similar element or page. Simply wrap two or more button groups in a <code>div.button-bar</code> and Foundation takes care of the rest.</p>

              <div class="button-bar">
                <ul class="button-group">
                  <li><a href="#" class="button">Button 1</a></li>
                  <li><a href="#" class="button">Button 2</a></li>
                  <li><a href="#" class="button">Button 3</a></li>
                </ul>

                <ul class="button-group">
                  <li><a href="#" class="button">Button 1</a></li>
                  <li><a href="#" class="button">Button 2</a></li>
                  <li><a href="#" class="button">Button 3</a></li>
                </ul>
              </div>

              <p>Buttons within groups or bars can also be individually set to a particular type (color) or size. Obviously if you create a button bar with different sized buttons the visual presentation may suffer a bit, but we wanted these to be very flexible.</p>
            </li>
            <li id="btnGrpCodeTab">
<pre><code data-language='html'>
&lt;!-- Basic Button Groups --&gt;
&lt;ul class=&quot;button-group radius&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button radius&quot;&gt;Button 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button radius&quot;&gt;Button 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button radius&quot;&gt;Button 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Even Button Groups --&gt;
&lt;ul class=&quot;button-group even three-up&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Button Bar --&gt;
&lt;div class=&quot;button-bar&quot;&gt;
  &lt;ul class=&quot;button-group&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;ul class=&quot;button-group&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Button 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="dropdown-buttons"></a>
              <h3>Dropdown Buttons</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#dropBtnEx">Example</a></dd>
                <dd><a href="#dropBtnCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="subheader">Foundation 3 includes two types of dropdown buttons: buttons which create a dropdown when you click them and buttons which have a dropdown when you click specifically on the down-arrow part of the button (a split button).</h5>
          <ul class="tabs-content">
            <li class="active" id="dropBtnExTab">
              <p>These are useful when an action has several possible outcomes to select from, or when there are secondary choices you can make in lieu of a primary action. Dropdown buttons use the same classes as any other button, but a different structure. If you need your dropdown to go up, simple add a class of <code>.up</code> to <code>.button.dropdown</code>.</p>
              <div href="#" class="large button dropdown">
                Dropdown Button
                <ul>
                  <li><a href="#">Dropdown Item</a></li>
                  <li><a href="#">Another Dropdown Item</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Last Item</a></li>
                </ul>
              </div>
            </li>
            <li id="dropBtnCodeTab">
<pre><code data-language='html'>
&lt;div href=&quot;#&quot; class=&quot;large button dropdown&quot;&gt;
  Dropdown Button
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Item&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another Dropdown Item&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Last Item&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="split-buttons"></a>
              <h3>Split Button</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#splitEx">Example</a></dd>
                <dd><a href="#splitCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <p>Split buttons in turn use similar classes, and a different structure than regular or dropdown buttons. They require an affordance for the clickable area that engages the dropdown and for the normal button action. We use a <code>&lt;span&gt;</code> for this affordance.</p>
          <ul class="tabs-content">
            <li class="active" id="splitExTab">
              <div href="#" class="large alert button split dropdown">
                <a href="#">Split Button</a>
                  <span></span>
                <ul>
                  <li><a href="#">Dropdown Item</a></li>
                  <li><a href="#">Another Dropdown Item</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Last Item</a></li>
                </ul>
              </div>
            </li>
            <li id="splitCodeTab">
<pre><code data-language='html'>
&lt;div href=&quot;#&quot; class=&quot;large alert button split dropdown&quot;&gt;
  &lt;a href=&quot;#&quot;&gt;Split Button&lt;/a&gt;
    &lt;span&gt;&lt;/span&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Item&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another Dropdown Item&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Last Item&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;!--
  Notice that in a split button, the &lt;span&gt; is the dropdown
  affordance and the main anchor is the primary button action.
--&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="panel">
            <h3>Get your Forms in Formation</h3>
            <h5 class="subheader">Forms can be a pain in the ass to build, but they don't have to be. Using our grid, you can build really complex form layouts in no time at all!</h5>
            <a class="button" href="forms.php">Learn about our forms &raquo;</a>
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
          <li ><a href="media-queries.php">Media Queries</a></li>
          <li ><a href="typography.php">Typography</a></li>
          <li class="active"><a href="buttons.php">Buttons</a></li>
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

</section>	</div>


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