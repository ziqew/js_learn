

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

  <title>Foundation Documentation: Typography</title>

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
    			<h2>Typography</h2>
    			<h5 class="subheader">Foundation 3 uses a modular scale to generate typography. That means a great, logical relationship for your copy whether you use the Scss version or just download the CSS.</h5>

          <div class="row tabs">
            <div class="eight columns">
              <h4>How a Modular Scale Works</h4>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#modScaleEx">Example</a></dd>
                <dd><a href="#modScaleCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <ul class="tabs-content">
            <li class="active" id="modScaleExTab">
              <p>Based on some stellar work by <a href="http://www.alistapart.com/articles/more-meaningful-typography/">Tim Brown</a>, the idea of a <a href="http://www.zurb.com/article/1000/foundation-30-typography-and-modular-scal">modular scale</a> is that the size and spacing of all of the typography in the framework is derived from an initial value, another arbitrary "important" value, and a particular ratio. We chose to use the golden ratio, but there are others available.</p>
              <p>We then use Sass to generate sizes based on those values, in an ascending scale of size and spacing. If you use the Scss version of Foundation you can easily change these values, otherwise we default to a 14px base with a 44px important value (based on common UI element size).</p>
            </li>
            <li id="modScaleCodeTab">
<pre><code data-language='css'>
// Variables
$ratio: $golden;
$baseSize: 14px;
$importantModNum: 44px;

// Modular Scale SCSS Function Syntax
h6 { font-size: ms(0); } // First Number in Scale
h5 { font-size: ms(1); } // Second Number in Scale
h4 { font-size: ms(2); } // Third Number in Scale
</code></pre>            </li>
          </ul>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="headers"></a>
              <h3>Header Styles</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#headerEx">Example</a></dd>
                <dd><a href="#headerCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Foundation 3 includes a number of different styles and treatments for typographic elements, such as subheaders or small header segments.</h5>
          <ul class="tabs-content">
            <li class="active" id="headerExTab">

              <div class="row">
                <div class="five columns">
                  <h4>Basic Headers</h4>
                  <div class="typography">
                    <h1>h1 header</h1>
                    <h2>h2 header</h2>
                    <h3>h3 header</h3>
                    <h4>h4 header</h4>
                    <h5>h5 header</h5>
                    <h6>h6 header</h6>
                  </div>
                </div>
                <div class="seven columns">
                  <h4>Headers with &lt;small&gt;</h4>
                  <div class="typography">
                    <h1><small>Small header text.</small></h1>
                    <h2><small>Small header text.</small></h2>
                    <h3><small>Small header text.</small></h3>
                    <h4><small>Small header text.</small></h4>
                    <h5><small>Small header text.</small></h5>
                    <h6><small>Small header text.</small></h6>
                  </div>
                </div>
              </div>

              <h4>Subheaders</h4>
              <div class="typography">
                <h1 class="subheader">h1.subheader header</h1>
                <h2 class="subheader">h2.subheader header</h2>
                <h3 class="subheader">h3.subheader header</h3>
                <h4 class="subheader">h4.subheader header</h4>
                <h5 class="subheader">h5.subheader header</h5>
                <h6 class="subheader">h6.subheader header</h6>
              </div>
            </li>
            <li id="headerCodeTab">
<pre><code data-language='html'>
&lt;!-- Basic Headers --&gt;
&lt;h1&gt;h1 header&lt;/h1&gt;
&lt;h2&gt;h2 header&lt;/h2&gt;
&lt;h3&gt;h3 header&lt;/h3&gt;
&lt;h4&gt;h4 header&lt;/h4&gt;
&lt;h5&gt;h5 header&lt;/h5&gt;
&lt;h6&gt;h6 header&lt;/h6&gt;

&lt;!-- Headers with small text --&gt;
&lt;h1&gt;h1 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h1&gt;
&lt;h2&gt;h2 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h2&gt;
&lt;h3&gt;h3 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h3&gt;
&lt;h4&gt;h4 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h4&gt;
&lt;h5&gt;h5 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h5&gt;
&lt;h6&gt;h6 header &lt;small&gt;Small header text.&lt;/small&gt;&lt;/h6&gt;

&lt;!-- Subheaders --&gt;
&lt;h1 class=&quot;subheader&quot;&gt;h1.subheader header&lt;/h1&gt;
&lt;h2 class=&quot;subheader&quot;&gt;h2.subheader header&lt;/h2&gt;
&lt;h3 class=&quot;subheader&quot;&gt;h3.subheader header&lt;/h3&gt;
&lt;h4 class=&quot;subheader&quot;&gt;h4.subheader header&lt;/h4&gt;
&lt;h5 class=&quot;subheader&quot;&gt;h5.subheader header&lt;/h5&gt;
&lt;h6 class=&quot;subheader&quot;&gt;h6.subheader header&lt;/h6&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="paragraphs"></a>
              <h3>Paragraphs</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#paraEx">Example</a></dd>
                <dd><a href="#paraCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">In Foundation, paragraphs fall within the modular scale. This includes their line-height, giving the page a feeling of harmony as you scroll.</h5>
          <ul class="tabs-content">
            <li class="active" id="paraExTab">
              <div class="row">
                <div class="six columns">
                  <p>It's really easy to add emphasis to copy in Foundation. We've implemented some standards like <strong>bold</strong> and <em>italics</em>, as well as, our own nifty styles, such as <code>&lt;code&gt;</code>, <kbd>&lt;kbd&gt;</kbd> and <small>&lt;small&gt;</small></p>
                </div>
                <div class="six columns">
                  <aside><p>You can also put text into and <strong>&lt;aside&gt;</strong> element to give it some hierarchy on the page. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p></aside>
                </div>
              </div>
            </li>
            <li id="paraCodeTab">
<pre><code data-language='html'>
&lt;div class='six columns'&gt;
    &lt;p&gt;It's really easy to add emphasis to copy in Foundation. We've implemented some standards like &lt;strong&gt;bold&lt;/strong&gt; and &lt;em&gt;italics&lt;/em&gt;, as well as, our own nifty styles, such as &lt;code&gt;&amp;lt;code&amp;gt;&lt;/code&gt;, &lt;kbd&gt;&amp;lt;kbd&amp;gt;&lt;/kbd&gt; and &lt;small&gt;&amp;lt;small&amp;gt;&lt;/small&gt;&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class='six columns'&gt;
    &lt;aside&gt;&lt;p&gt;You can also put text into and &lt;strong&gt;&amp;lt;aside&amp;gt;&lt;/strong&gt; element to give it some hierarchy on the page. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;&lt;/aside&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>            </li>
          </ul>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="links"></a>
              <h3>Links</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#linksEx">Example</a></dd>
                <dd><a href="#linksCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Where would we be without links? Not in hypertext, that's for sure! Ah, nerd humor. Anyways. Links are very standard, and the color is preset or controlled via the _settings.scss file as the main color.</h5>
          <ul class="tabs-content">
            <li class="active" id="linksExTab">
              <div class="typography">
                <h2><a href="#">This is a header link.</a></h2>
                <h3><a href="#">This is a header link.</a></h3>
                <h4><a href="#">This is a header link.</a></h4>
                <h5><a href="#">This is a header link.</a></h5>
                <p><a href="#">This is a standard inline paragraph link.</a></p>
              </div>
            </li>
            <li id="linksCodeTab">
<pre><code data-language='html'>
&lt;h2&gt;&lt;a href=&quot;#&quot;&gt;This is a header link.&lt;/a&gt;&lt;/h2&gt;
&lt;h3&gt;&lt;a href=&quot;#&quot;&gt;This is a header link.&lt;/a&gt;&lt;/h3&gt;
&lt;h4&gt;&lt;a href=&quot;#&quot;&gt;This is a header link.&lt;/a&gt;&lt;/h4&gt;
&lt;h5&gt;&lt;a href=&quot;#&quot;&gt;This is a header link.&lt;/a&gt;&lt;/h5&gt;
&lt;p&gt;&lt;a href=&quot;#&quot;&gt;This is a standard inline paragraph link.&lt;/a&gt;&lt;/p&gt;
</code></pre>            </li>
          </ul>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="lists"></a>
              <h3>Lists</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#listEx">Example</a></dd>
                <dd><a href="#listCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Lists are helpful for, well, lists of things. Foundation 3 uses <a href="http://necolas.github.com/normalize.css/">Normalize.css</a> so lists won't be reset as they were in previous versions. However, we still provide a few simple affordances for lists.</h5>

          <ul class="tabs-content">
            <li class="active" id="listExTab">
              <h4>Unordered Lists</h4>
              <div class="row">
                <div class="four columns">
                  <h5>ul.disc</h5>
                  <ul class="disc">
                    <li>List item with a much longer description or more content.</li>
                    <li>List item</li>
                    <li>List item
                      <ul>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                      </ul>
                    </li>
                    <li>List item</li>
                    <li>List item</li>
                    <li>List item</li>
                  </ul>
                </div>
                <div class="four columns">
                  <h5>ul.circle</h5>
                  <ul class="circle">
                    <li>List item with a much longer description or more content.</li>
                    <li>List item</li>
                    <li>List item
                      <ul>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                      </ul>
                    </li>
                    <li>List item</li>
                    <li>List item</li>
                    <li>List item</li>
                  </ul>
                </div>
                <div class="four columns">
                  <h5>ul.square</h5>
                  <ul class="square">
                    <li>List item with a much longer description or more content.</li>
                    <li>List item</li>
                    <li>List item
                      <ul>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                      </ul>
                    </li>
                    <li>List item</li>
                    <li>List item</li>
                    <li>List item</li>
                  </ul>
                </div>
              </div>
            </li>
            <li id="listCodeTab">
<pre><code data-language='html'>
&lt;!-- Disc Lists --&gt;
&lt;h5&gt;ul.disc&lt;/h5&gt;
&lt;ul class=&quot;disc&quot;&gt;
  &lt;li&gt;List item with a much longer description or more content.&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item
    &lt;ul&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Circle Lists --&gt;
&lt;h5&gt;ul.circle&lt;/h5&gt;
&lt;ul class=&quot;circle&quot;&gt;
  &lt;li&gt;List item with a much longer description or more content.&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item
    &lt;ul&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Square Lists --&gt;
&lt;h5&gt;ul.square&lt;/h5&gt;
&lt;ul class=&quot;square&quot;&gt;
  &lt;li&gt;List item with a much longer description or more content.&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item
    &lt;ul&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
      &lt;li&gt;Nested List Item&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
  &lt;li&gt;List item&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Ordered Lists --&gt;
&lt;ol&gt;
  &lt;li&gt;Ordered List Item&lt;/li&gt;
  &lt;li&gt;Ordered List Item&lt;/li&gt;
  &lt;li&gt;Ordered List Item&lt;/li&gt;
  &lt;li&gt;Ordered List Item&lt;/li&gt;
&lt;/ol&gt;

&lt;!-- Definition Lists --&gt;
&lt;dl&gt;
  &lt;dt&gt;Definition Title&lt;/dt&gt;
  &lt;dd&gt;Definition text, you can add as many of these as you need. The line-height matches paragraphs.&lt;/dd&gt;
&lt;/dl&gt;
</code></pre>            </li>
          </ul>

          <div class="row">
            <div class="four columns">
              <h4>Ordered Lists</h4>
              <ol>
                <li>Ordered List Item 1</li>
                <li>Ordered List Item 2</li>
                <li>Ordered List Item 3</li>
              </ol>
            </div>
            <div class="eight columns">
              <h4>Definition Lists</h4>
              <dl>
                <dt>Definition Title</dt>
                <dd>Definition text, you can add as many of these as you need. The line-height matches paragraphs.</dd>
              </dl>
            </div>
          </div>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="quotes"></a>
  				    <h3>Blockquotes</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#blockEx">Example</a></dd>
                <dd><a href="#blockCode">Code</a></dd>
              </dl>
            </div>
          </div>
  				<h5 class="no-marg-top subheader">Sometimes other people say smart things, and you may want to mention that through a blockquote callout. We've got you covered.</p>
          <ul class="tabs-content">
            <li class="active" id="blockExTab">
              <blockquote><p>I do not fear computers. I fear the lack of them. <cite>Isaac Asimov</cite></p></blockquote>
            </li>
            <li id="blockCodeTab">
<pre><code data-language='html'>
&lt;blockquote&gt;
  &lt;p&gt;I do not fear computers. I fear the lack of them.
  &lt;cite&gt;Isaac Asimov&lt;/cite&gt;&lt;/p&gt;
&lt;/blockquote&gt;
</code></pre>            </li>
          </ul>

  				<hr />

          <a name="print-styles"></a>
  				<h4>Print Styles</h4>
  				<p>Foundation includes print styles developed by HTML5 Boilerplate to give you some basic print-specific styles. These are activated when you print through a media query. It includes:</p>

  				<ul class="disc">
  				  <li>Clearing out backgrounds, box shadows, and text shadows</li>
  				  <li>Appending link URLs after the anchor text</li>
  				  <li>Bordering blockquotes and pre elements</li>
  				  <li>Page cleanup and window minimization</li>
  				</ul>

  				<p>On top of that, Foundation includes a couple of simple classes you can use to control elements printing, or not printing. Simply attached <code>.print-only</code> on an element to only show when printing, and <code>.hide-on-print</code> to hide something when printing.</p>

          <hr>

          <div class="panel">
            <h3>Buttons Galore</h3>
            <h5 class="subheader">We know people love buttons, so do we. With that in mind, we made sure Foundation includes everything you need when it comes to building buttons.</h5>
            <a class="button" href="buttons.php">Learn about our buttons &raquo;</a>
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
          <li class="active"><a href="typography.php">Typography</a></li>
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