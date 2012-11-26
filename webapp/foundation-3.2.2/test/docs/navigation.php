

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

    <title>Foundation Documentation: Navigation</title>

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
<h2>Navigation</h2>
<h5 class="subheader">Direct users around in style. There are navigation options for a number of situations, and everything is designed to work cross-device.</h5>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <h3>Top Bar</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#topbarEx">Example</a></dd>
            <dd><a href="#topbarCode">Code</a></dd>
        </dl>
    </div>
</div>
<h5 class="subheader no-marg-top">The navigation top bar in Foundation gives you a lot of control over how you build and style your own version. We wanted to leave as much control in your hands as possible without causing headaches.</h5>
<p>Try it out as a fixed bar on the top of the page or even as a piece inside the grid. By default, the responsive layout kicks in at 940px, but you can change that by updating your Scss settings file or changing it with the customizer upon download.</p>

<ul class="tabs-content">
    <li class="active" id="topbarExTab">
        <div class="row">
            <div class="twelve columns">
                <nav class="top-bar">
                    <ul>
                        <!-- Title Area -->
                        <li class="name">
                            <h1>
                                <a href="#">
                                    Top Bar Title
                                </a>
                            </h1>
                        </li>
                        <li class="toggle-topbar"><a href="#"></a></li>
                    </ul>

                    <section>
                        <!-- Left Nav Section -->
                        <ul class="left">
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a class="active" href="#">Item 1</a>
                                <ul class="dropdown">
                                    <li><label>Section Name</label></li>
                                    <li class="has-dropdown">
                                        <a href="#" class="">Level 1, Has Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Level 2</a></li>
                                            <li><a href="#">Level 2</a></li>
                                            <li class="has-dropdown"><a href="#">Level 2, Has Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><label>Section</label></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Level 2</a></li>
                                            <li><a href="#">Level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level 1</a></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li class="divider"></li>
                                    <li><label>Section Name</label></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li><a href="#">Level 1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">See all &rarr;</a></li>
                                </ul>
                            </li>
                            <li class="divider hide-for-small"></li>
                        </ul>

                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li class="divider show-for-medium-and-up"></li>
                            <li class="has-dropdown">
                                <a href="#">Item 2</a>
                                <ul class="dropdown">
                                    <li><label>Section Name</label></li>
                                    <li><a href="#" class="">Level 1</a></li>
                                    <li><a href="#">Dropdown Option</a></li>
                                    <li><a href="#">Dropdown Option</a></li>
                                    <li class="divider"></li>
                                    <li><label>Section Name</label></li>
                                    <li><a href="#">Dropdown Option</a></li>
                                    <li><a href="#">Dropdown Option</a></li>
                                    <li><a href="#">Dropdown Option</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">See all &rarr;</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </nav>
            </div>
        </div>
    </li>
    <li id="topbarCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;twelve columns&quot;&gt;
    &lt;nav class=&quot;top-bar&quot;&gt;
    &lt;ul&gt;
    &lt;!-- Title Area --&gt;
    &lt;li class=&quot;name&quot;&gt;
    &lt;h1&gt;
    &lt;a href=&quot;#&quot;&gt;
    Top Bar Title
    &lt;/a&gt;
    &lt;/h1&gt;
    &lt;/li&gt;
    &lt;li class=&quot;toggle-topbar&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;section&gt;
    &lt;!-- Left Nav Section --&gt;
    &lt;ul class=&quot;left&quot;&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li class=&quot;has-dropdown&quot;&gt;
    &lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;Item 1&lt;/a&gt;
    &lt;ul class=&quot;dropdown&quot;&gt;
    &lt;li&gt;&lt;label&gt;Section Name&lt;/label&gt;&lt;/li&gt;
    &lt;li class=&quot;has-dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;&quot;&gt;Level 1, Has Dropdown&lt;/a&gt;
    &lt;ul class=&quot;dropdown&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;has-dropdown&quot;&gt;&lt;a href=&quot;#&quot;&gt;Level 2, Has Dropdown&lt;/a&gt;
    &lt;ul class=&quot;dropdown&quot;&gt;
    &lt;li&gt;&lt;label&gt;Section&lt;/label&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 2&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;label&gt;Section Name&lt;/label&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;See all &amp;rarr;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;divider hide-for-small&quot;&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- Right Nav Section --&gt;
    &lt;ul class=&quot;right&quot;&gt;
    &lt;li class=&quot;divider show-for-medium-and-up&quot;&gt;&lt;/li&gt;
    &lt;li class=&quot;has-dropdown&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Item 2&lt;/a&gt;
    &lt;ul class=&quot;dropdown&quot;&gt;
    &lt;li&gt;&lt;label&gt;Section Name&lt;/label&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;&quot;&gt;Level 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Option&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Option&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;label&gt;Section Name&lt;/label&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Option&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Option&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Option&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;See all &amp;rarr;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/section&gt;
    &lt;/nav&gt;
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<div class="row tabs" style="margin-top: -20px;">
    <div class="eight columns">
        <a name="build-nav"></a>
        <h4>Building the Bar</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#btopEx">Explanation</a></dd>
            <dd><a href="#btopCode">Code</a></dd>
        </dl>
    </div>
</div>
<h5 class="subheader no-marg-top">The top bar contains a lot of different parts. You can see the complete code above, or learn how to build it piece-by-piece below.</h5>
<ul class="tabs-content">
    <li class="active" id="btopExTab">
        <h5>Basic Needs</h5>
        <p>The top bar has three main elements, three of which are needed for proper functionality: the title <code>ul</code>, one of the <code>section</code> <code>ul class="right/left</code> elements and the <code>li.toggle-topbar</code> element that will expand the menu in the repsonsive layout. You can leave out the <code>li class="name"</code> as long as you include the <code>.toggle-topbar</code> element.</p>

        <h5>Positioning the Bar</h5>
        <p>The top bar is built with a single <code>nav</code> element with a class of <code>top-bar</code>. It will take on full browser width by default. To make the top bar stay fixed as you scroll, wrap it in <code>div class="fixed"</code>. If you want your navigation to be set to your grid width, wrap it in <code>div class="contain-to-grid"</code>. You may use <code>fixed</code> and <code>contain-to-grid</code> together.</p>

        <h5>Building the Nav</h5>
        <p>When building your bar it is good to be aware of how many links your are going to need in it so you can customize your responsive breakpoint accordingly. Build your navigation with <code>ul.left</code> and/or <code>ul.right</code> depending where you want links. To add items simply include <code>li</code> elements with and anchor inside them for your top-level link. To build a dropdown menu you'll need to add <code>has-dropdown</code> to the <code>li</code> and include <code>ul.dropdown</code> right after that anchor. Add a class of <code>active</code> to mark the current page.</p>

        <h5>Other Elements</h5>
        <p>To make this navigation nice and flexible, we've included patterns for elements like buttons, inputs and dividers. To create dividers between your navigation, just add an empty <code>li.divider</code> and you'll get some separation. You can use a small Foundation button in the nav, just include <code>has-button</code> as a class for its parent <code>li</code>. You can include two different input types: search and text. To use these, add a class of <code>search</code> to the parent <code>li</code>.</p>
    </li>
    <li id="btopCodeTab">
<pre><code data-language='html'>
    &lt;!-- Basic Needs --&gt;
    &lt;nav class=&quot;top-bar&quot;&gt;
    &lt;ul&gt;
    &lt;li class=&quot;name&quot;&gt;&lt;h1&gt;&lt;a href=&quot;#&quot;&gt;Title&lt;/a&gt;&lt;/h1&gt;&lt;/li&gt;
    &lt;li class=&quot;toggle-topbar&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;section&gt;
    &lt;ul class=&quot;left&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;right&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/section&gt;
    &lt;/nav&gt;

    &lt;!-- Positioning the Top Bar --&gt;
    &lt;div class=&quot;fixed contain-to-grid&quot;&gt;
    &lt;!-- &lt;nav&gt; goes here --&gt;
    &lt;/div&gt;

    &lt;!-- Building the Nav --&gt;
    &lt;section&gt;
    &lt;ul class=&quot;left&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;

    &lt;li class=&quot;has-dropdown&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;

    &lt;ul class=&quot;dropdown&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dropdown Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;right&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/section&gt;

    &lt;!-- Other elements for Top Bar --&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;

    &lt;li class=&quot;search&quot;&gt;
    &lt;form class=&quot;collapse&quot;&gt;
    &lt;input type=&quot;text&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;secondary radius button&quot;&gt;Search&lt;/button&gt;
    &lt;/form&gt;
    &lt;/li&gt;

    &lt;li class=&quot;search&quot;&gt;
    &lt;form&gt;
    &lt;input type=&quot;search&quot;&gt;
    &lt;/form&gt;
    &lt;/li&gt;

    &lt;li class=&quot;has-button&quot;&gt;
    &lt;a class=&quot;small button&quot; href=&quot;#&quot;&gt;Button!&lt;/a&gt;
    &lt;/li&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="nav-bar"></a>
        <h3>Nav Bar</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#navbarEx">Example</a></dd>
            <dd><a href="#navbarCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>The default top nav bar for Foundation includes the main nav options as well as hover dropdowns that support either a list of anchors or arbitrary content (even Grid content).</p>
<ul class="tabs-content">
    <li class="active" id="navbarExTab">
        <ul class="nav-bar">
            <li class="active"><a href="#">Nav Item 1</a></li>
            <li class="has-flyout">
                <a href="#">Nav Item 2</a>
                <a href="#" class="flyout-toggle"><span> </span></a>
                <ul class="flyout">
                    <li><a href="#">Sub Nav Item 1</a></li>
                    <li><a href="#">Sub Nav Item 2</a></li>
                    <li><a href="#">Sub Nav 3</a></li>
                    <li><a href="#">Sub Nav 4</a></li>
                    <li><a href="#">Sub Nav Item 5</a></li>
                </ul>
            </li>
            <li class="has-flyout">
                <a href="#">Nav Item 3</a>
                <a href="#" class="flyout-toggle"><span> </span></a>
                <div class="flyout">
                    <h5>Regular Dropdown</h5>
                    <div class="row">
                        <div class="six columns">
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                        </div>
                        <div class="six columns">
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="has-flyout">
                <a href="#">Nav Item 4</a>
                <a href="#" class="flyout-toggle"><span> </span></a>
                <div class="flyout large right">
                    <h5>Large Dropdown</h5>
                    <div class="row">
                        <div class="four columns">
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                        </div>
                        <div class="four columns">
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                            <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                        </div>
                        <div class="four columns">
                            <img src="http://placehold.it/200x250" />
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <h5>Dropdown Lists</h5>
        <p>In the nav bar you can use a dropdown to only contain a <code>ul</code> of anchors, which will act as a dropdown on hover. The individual entry includes a main link (which can lead to a top-level page) and the dropdown element. Note that dropdowns require the parent to have <code>.has-flyout</code>.

        <h5>Arbitrary Content Dropdowns</h5>
        <p>You can also have dropdowns with a specific size which can contain any kind of content, including rows and columns.</p>

        <h5>Flyout Direction</h5>
        <p>Flyouts are pinned left by default, but you can pin them right in instances where they may run off the page or over other content by adding <code>.right</code> to the <code>div.flyout</code> element.</p>
        <p>Flyouts also go down by default, but if your nav bar is on the bottom you can have the flyouts expand up by adding a class of <code>.up</code> to the <code>.flyout</code> element.</p>
    </li>
    <li id="navbarCodeTab">
<pre><code data-language='html'>
    &lt;!-- Entire Navbar Code --&gt;
    &lt;ul class=&quot;nav-bar&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Nav Item 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 2&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;ul class=&quot;flyout&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 3&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout&quot;&gt;
    &lt;h5&gt;Regular Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 4&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout large right&quot;&gt;
    &lt;h5&gt;Large Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    &lt;img src=&quot;http://placehold.it/200x250&quot; /&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- Dropdown Lists for Navbar --&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 2&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;ul class=&quot;flyout&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;

    &lt;!-- Arbitrary Content Dropdowns for Navbar --&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 3&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout [small, large]&quot;&gt;
    &lt;h5&gt;Regular Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;

    &lt;!-- Flyout Directions for Navbar --&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 4&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout large right&quot;&gt;
    &lt;h5&gt;Large Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eight columns&quot;&gt;
    &lt;p&gt;This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    &lt;img src=&quot;http://placehold.it/200x250&quot; /&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;

    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 4&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout up&quot;&gt;
    &lt;h5&gt;Large Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eight columns&quot;&gt;
    &lt;p&gt;This is example text and will expand up, not down.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    &lt;img src=&quot;http://placehold.it/200x250&quot; /&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="vertical-nav"></a>
        <h3>Vertical Nav</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#vertEx">Example</a></dd>
            <dd><a href="#vertCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="vertExTab">
        <div class="row">
            <div class="four columns">

                <ul class="nav-bar vertical">
                    <li class="active"><a href="#">Nav Item 1</a></li>
                    <li class="has-flyout">
                        <a href="#">Nav Item 2</a>
                        <a href="#" class="flyout-toggle"><span> </span></a>
                        <ul class="flyout">
                            <li><a href="#">Sub Nav Item 1</a></li>
                            <li><a href="#">Sub Nav Item 2</a></li>
                            <li><a href="#">Sub Nav 3</a></li>
                            <li><a href="#">Sub Nav 4</a></li>
                            <li><a href="#">Sub Nav Item 5</a></li>
                        </ul>
                    </li>
                    <li class="has-flyout">
                        <a href="#">Nav Item 3</a>
                        <a href="#" class="flyout-toggle"><span> </span></a>
                        <div class="flyout">
                            <h5>Regular Dropdown</h5>
                            <div class="row">
                                <div class="six columns">
                                    <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                                </div>
                                <div class="six columns">
                                    <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Nav Item 4</a>
                    </li>
                </ul>

            </div>
            <div class="eight columns">
                <p>The same nav bar seen above, with the same structure, can be made a vertical nav bar that still supports flyout content by adding a class of <code>.vertical</code> to the element. This is ideal for sidebar navigation, and is very similar to the vertical tabs seen on the Tabs documentation page.</p>
            </div>
        </div>
    </li>
    <li id="vertCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;nav-bar vertical&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Nav Item 1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 2&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;ul class=&quot;flyout&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav 4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sub Nav Item 5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;has-flyout&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 3&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;flyout-toggle&quot;&gt;&lt;span&gt; &lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;flyout&quot;&gt;
    &lt;h5&gt;Regular Dropdown&lt;/h5&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;p&gt;This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;a href=&quot;#&quot;&gt;Nav Item 4&lt;/a&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="side-nav"></a>
        <h3>Side Nav</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#sidenavEx">Example</a></dd>
            <dd><a href="#sidenavCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Side nav, like you'll see on the Foundation main site, is useful for sections either of a site or of the page.</p>
<ul class="tabs-content">
    <li class="active" id="sidenavExTab">
        <ul class="four side-nav">
            <li class="active"><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li class="divider"></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
        </ul>
    </li>
    <li id="sidenavCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;four side-nav&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Link 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 4&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="subnav"></a>
        <h3>Sub Nav</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#subEx">Example</a></dd>
            <dd><a href="#subCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>This simple subnav is great for moving between different states of a page. We use these frequently to show iterations of something, typically by date, but they're also handy for these like filters.</p>
<ul class="tabs-content">
    <li class="active" id="subExTab">
        <dl class="sub-nav">
            <dt>Filter:</dt>
            <dd class="active"><a href="#">All</a></dd>
            <dd><a href="#">Active</a></dd>
            <dd><a href="#">Pending</a></dd>
            <dd><a href="#">Suspended</a></dd>
        </dl>
    </li>
    <li id="subCodeTab">
<pre><code data-language='html'>
    &lt;dl class=&quot;sub-nav&quot;&gt;
    &lt;dt&gt;Filter:&lt;/dt&gt;
    &lt;dd class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;All&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#&quot;&gt;Pending&lt;/a&gt;&lt;/dd&gt;
    &lt;dd&gt;&lt;a href=&quot;#&quot;&gt;Suspended&lt;/a&gt;&lt;/dd&gt;
    &lt;/dl&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="pagination"></a>
        <h3>Pagination</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#pagEx">Example</a></dd>
            <dd><a href="#pagCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Moving between pages has become less common with the advent of longer pages and AJAX loading, but it can still be useful for long repetitive listings or content.</p>
<ul class="tabs-content">
    <li class="active" id="pagExTab">
        <ul class="pagination">
            <li class="arrow unavailable"><a href="">&laquo;</a></li>
            <li class="current"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="unavailable"><a href="">&hellip;</a></li>
            <li><a href="">12</a></li>
            <li><a href="">13</a></li>
            <li class="arrow"><a href="">&raquo;</a></li>
        </ul>
    </li>
    <li id="pagCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;arrow unavailable&quot;&gt;&lt;a href=&quot;&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;current&quot;&gt;&lt;a href=&quot;&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;unavailable&quot;&gt;&lt;a href=&quot;&quot;&gt;&amp;hellip;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;12&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;13&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;arrow&quot;&gt;&lt;a href=&quot;&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="breadcrumbs"></a>
        <h3>Breadcrumbs</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#breadEx">Example</a></dd>
            <dd><a href="#breadCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Walking through a linear flow, or want to show where someone is in the hierarchy? Breadcrumbs are totally boss. Breadcrumbs are built with a UL just like pagination, and they can support span or anchor elements with <code>current</code> and <code>unavailable</code> classes.</p>
<ul class="tabs-content">
    <li class="active" id="breadExTab">
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li class="unavailable"><a href="#">Gene Splicing</a></li>
            <li class="current"><a href="#">Home</a></li>
        </ul>
        <br>
        <ul class="breadcrumbs">
            <li><span>Home</span></li>
            <li><span>Features</span></li>
            <li><span>Gene Splicing</span></li>
            <li class="current"><span>Home</span></li>
        </ul>
    </li>
    <li id="breadCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;breadcrumbs&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Features&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;unavailable&quot;&gt;&lt;a href=&quot;#&quot;&gt;Gene Splicing&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;current&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;breadcrumbs&quot;&gt;
    &lt;li&gt;&lt;span&gt;Home&lt;/span&gt;&lt;/li&gt;
    &lt;li&gt;&lt;span&gt;Features&lt;/span&gt;&lt;/li&gt;
    &lt;li&gt;&lt;span&gt;Gene Splicing&lt;/span&gt;&lt;/li&gt;
    &lt;li class=&quot;current&quot;&gt;&lt;span&gt;Home&lt;/span&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="panel">
    <h3>Totally Tabular, Dude</h3>
    <h5 class="subheader">Foundation has your back when it comes to separating content logically on the page. With our simple tabs you'll get going in no time.</h5>
    <a class="button" href="tabs.php">Learn about our tabs &raquo;</a>
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
                <li class="active"><a href="navigation.php">Navigation</a></li>
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