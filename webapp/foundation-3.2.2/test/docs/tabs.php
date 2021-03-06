

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

    <title>Foundation Documentation: Tabs</title>

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
<h2>Tabs</h2>
<h5 class="subheader">Tabs are very versatile both as organization and navigational constructs. With the base Foundation package, tabs in the markup specified below are already hooked up &mdash; no extra work required.</h5>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <h3>Simple Tabs</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#tabsEx">Example</a></dd>
            <dd><a href="#tabsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Tabs are made of <strong>two objects:</strong> a <code>dl/ul</code> object containing the tabs themselves, and a <code>ul</code> object containing the tab content. If you simply want visual tabs (as seen in this documentation) without the on-page hookup, you only need the DL/LI. If you want functional tabs, just be sure that each tab is linked to an ID, and that the corresponding tab has an ID of <code>#tabnameTab</code>. Check out these examples.</p>
<p><em>Note: The third tab is using the <a href="media-queries.php">mobile visibility classes</a> to hide on small devices.</em></p>
<ul class="tabs-content">
    <li class="active" id="tabsExTab">
        <dl class="tabs">
            <dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
            <dd><a href="#simple2">Simple Tab 2</a></dd>
            <dd class="hide-for-small"><a href="#simple3">Simple Tab 3</a></dd>
        </dl>
        <ul class="tabs-content">
            <li class="active" id="simple1Tab">This is simple tab 1s content. Pretty neat, huh?</li>
            <li id="simple2Tab">This is simple tab 2s content. Now you see it!</li>
            <li id="simple3Tab">This is simple tab 3s content.</li>
        </ul>
    </li>
    <li id="tabsCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;tabs&quot;&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#simple1&quot;&gt;Simple Tab 1&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#simple2&quot;&gt;Simple Tab 2&lt;/a&gt;&lt;/dd&gt;
    &lt;dd class=&quot;hide-for-small&quot;&gt;&lt;a href=&quot;#simple3&quot;&gt;Simple Tab 3&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
    &lt;ul class=&quot;tabs-content&quot;&gt;
    &lt;li class=&quot;active&quot; id=&quot;simple1Tab&quot;&gt;This is simple tab 1s content. Pretty neat, huh?&lt;/li&gt;
    &lt;li id=&quot;simple2Tab&quot;&gt;This is simple tab 2s content. Now you see it!&lt;/li&gt;
    &lt;li id=&quot;simple3Tab&quot;&gt;This is simple tab 3s content.&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="tab-sizing"></a>
        <h4>Tab Sizing</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#tabszEx">Example</a></dd>
            <dd><a href="#tabszCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>If you want your tabs to run the full width of their container evenly, you can add class of <code>.two-up</code>, <code>.three-up</code>, <code>.four-up</code>, and <code>.five-up</code> to them.</p>
<ul class="tabs-content">
    <li class="active" id="tabszExTab">
        <dl class="tabs three-up">
            <dd class="active"><a href="#evenTab1">Even Tab 1</a></dd>
            <dd><a href="#evenTab2">Even Tab 2</a></dd>
            <dd><a href="#evenTab3">Even Tab 3</a></dd>
        </dl>

        <dl class="tabs five-up">
            <dd class="active"><a href="#evenTab4">Tab 4</a></dd>
            <dd><a href="#evenTab5">Tab 5</a></dd>
            <dd><a href="#evenTab6">Tab 6</a></dd>
            <dd><a href="#evenTab7">Tab 7</a></dd>
            <dd><a href="#evenTab8">Tab 8</a></dd>
        </dl>
    </li>
    <li id="tabszCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;tabs three-up&quot;&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#evenTab1&quot;&gt;Even Tab 1&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab2&quot;&gt;Even Tab 2&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab3&quot;&gt;Even Tab 3&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;

    &lt;dl class=&quot;tabs five-up&quot;&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#evenTab4&quot;&gt;Tab 4&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab5&quot;&gt;Tab 5&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab6&quot;&gt;Tab 6&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab7&quot;&gt;Tab 7&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#evenTab8&quot;&gt;Tab 8&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="contained-tabs"></a>
        <h4>Contained Tabs</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#contEx">Example</a></dd>
            <dd><a href="#contCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Contained tabs have a simple added class of "contained" on the tabs-content element. What that means is the tab content has a border around it tying it to the tabs. You can still use standard column sizes inside a tab element.</p>
<p>You'll also notice in this example that a <code>dt</code> element can serve to label groups of tabs. You can alternatively use an <code>li.section-title</code> to do the same thing.</p>
<ul class="tabs-content">
    <li class="active" id="contExTab">
        <dl class="tabs contained">
            <dt>Title 1</dt>
            <dd class="active"><a href="#simpleContained1">Simple Tab 1</a></dd>
            <dd class="hide-for-small"><a href="#simpleContained2">Simple Tab 2</a></dd>
            <dt class="hide-for-small">Title 1</dt>
            <dd class="hide-for-small"><a href="#simpleContained3">Simple Tab 3</a></dd>
        </dl>
        <ul class="tabs-content contained">
            <li class="active" id="simpleContained1Tab">This is simple tab 1s content. Pretty neat, huh?</li>
            <li id="simpleContained2Tab">This is simple tab 2s content. Now you see it!</li>
            <li id="simpleContained3Tab">This is simple tab 3s content.</li>
        </ul>
    </li>
    <li id="contCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;tabs contained&quot;&gt;
    &lt;dt&gt;Title 1&lt;/dt&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#simpleContained1&quot;&gt;Simple Tab 1&lt;/a&gt;&lt;/dd&gt;
    &lt;dd class=&quot;hide-for-small&quot;&gt;&lt;a href=&quot;#simpleContained2&quot;&gt;Simple Tab 2&lt;/a&gt;&lt;/dd&gt;
    &lt;dt class=&quot;hide-for-small&quot;&gt;Title 1&lt;/dt&gt;
    &lt;dd class=&quot;hide-for-small&quot;&gt;&lt;a href=&quot;#simpleContained3&quot;&gt;Simple Tab 3&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
    &lt;ul class=&quot;tabs-content contained&quot;&gt;
    &lt;li class=&quot;active&quot; id=&quot;simpleContained1Tab&quot;&gt;This is simple tab 1s content. Pretty neat, huh?&lt;/li&gt;
    &lt;li id=&quot;simpleContained2Tab&quot;&gt;This is simple tab 2s content. Now you see it!&lt;/li&gt;
    &lt;li id=&quot;simpleContained3Tab&quot;&gt;This is simple tab 3s content.&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="pill-nav"></a>
        <h4>Pill-Style Tabs</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#pillEx">Example</a></dd>
            <dd><a href="#pillCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>If you need an alternate view for tabs (especially for filters, or similar), you can use pill-style tabs.</p>
<ul class="tabs-content">
    <li class="active" id="pillExTab">
        <dl class="tabs pill">
            <dd class="active"><a href="#pillTab1">Pill Tab 1</a></dd>
            <dd><a href="#pillTab2">Pill Tab 2</a></dd>
            <dd class="hide-for-small"><a href="#pillTab3">Pill Tab 3</a></dd>
        </dl>
    </li>
    <li id="pillCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;tabs pill&quot;&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#pillTab1&quot;&gt;Pill Tab 1&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#pillTab2&quot;&gt;Pill Tab 2&lt;/a&gt;&lt;/dd&gt;
    &lt;dd class=&quot;hide-for-small&quot;&gt;&lt;a href=&quot;#pillTab3&quot;&gt;Pill Tab 3&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="vertical-tabs"></a>
        <h4>Vertical Tabs</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#vertTabsEx">Example</a></dd>
            <dd><a href="#vertTabsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>You can also use tabs in a vertical configuration by adding a class of 'vertical' to the <code>dl/ul</code> element. These are great for more scalable nav, and you can see how they work on this page on a tablet or desktop.</p>
<ul class="tabs-content">
    <li class="active" id="vertTabsExTab">
        <dl class="vertical tabs">
            <dd class="active"><a href="#vertical1">Vertical Tab 1</a></dd>
            <dd><a href="#vertical2">Vertical Tab 2</a></dd>
            <dd><a href="#vertical3">Vertical Tab 3</a></dd>
        </dl>
    </li>
    <li id="vertTabsCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;vertical tabs&quot;&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#vertical1&quot;&gt;Vertical Tab 1&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#vertical2&quot;&gt;Vertical Tab 2&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#vertical3&quot;&gt;Vertical Tab 3&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
</code></pre>            </li>
</ul>

<h5>Mobile Tabs</h5>
<p>If you want a standard, horizontal tab group to act vertical on small devices, adding a class of "mobile" to a standard (not vertical) tab group will switch them to full width nav bars on small screens.</p>

<hr>

<div class="panel">
    <h3>What's the missing element?</h3>
    <h5 class="subheader">There are tons of common UI elements used across the web each day. We've got a lot of really good pieces for you to use and we're always looking to add more!</h5>
    <a class="button" href="elements.php">Learn about our UI Elements &raquo;</a>
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
                <li ><a href="buttons.php">Buttons</a></li>
                <li ><a href="forms.php">Forms</a></li>
                <li ><a href="navigation.php">Navigation</a></li>
                <li class="active"><a href="tabs.php">Tabs</a></li>
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