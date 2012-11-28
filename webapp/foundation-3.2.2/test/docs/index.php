<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="../images/favicons/apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="../images/favicons/apple-touch-icon-114x114-precomposed.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="../images/favicons/apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="../images/favicons/apple-touch-icon-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->

    <link rel="icon" href="../images/favicons/favicon.ico" type="image/x-icon"/>

    <meta name="keywords"
          content="foundation, design, frameworks, framework, css framework, html framework, html5, css3, SASS, SCSS, compass, responsive, design"/>
    <meta name="description"
          content="Documentation for Foundation by ZURB. Foundation is the most advanced responsive front-end framework in the world."/>
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2012"/>

    <title>Foundation Documentation: Get Started</title>

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
                <a href="../grid.php">Features</a>
            </li>
            <li>
                <a href="../templates.php">Add-ons</a>
            </li>
            <li>
                <a href="../case-soapbox.php">Case Studies</a>
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
                <a href="http://www.zurb.com"><h4><img alt="Zurb-logo-drop-down"
                                                       src="http://www.zurb.com/assets/logo/zurb-logo-drop-down-ec71ef7b6be82b12ab4a64a655377e1f.png"/>
                    Design Great Products Faster</h4></a>
            </div>
            <div class="four columns">
                <div class="right links">
                    <a href="http://www.zurb.com/about">About</a> | <a href="http://www.zurb.com/blog">ZURBlog </a> | <a
                    href="http://www.zurb.com/sitemap">Sitemap</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="tablet-padding">
                <div class="three columns property" id="services">
                    <a href="http://www.zurb.com/services">
                        <h4>Services</h4>

                        <p>We'll help you get online products designed better and faster than ever before and set you up
                            for future iterations.</p>
                        <span>Let's Work Together &rarr;</span>
                    </a>
                </div>

                <div class="show-on-phones"><br/><br/></div>
                <div class="three columns property" id="foundation">
                    <a href="http://foundation.zurb.com">
                        <h4>Foundation</h4>

                        <p>We developed the most advanced responsive front-end framework in the world and made it
                            free-for-all.</p>
                        <span>Discover Foundation &rarr;</span>
                    </a>
                </div>
                <div class="show-on-phones"><br/><br/></div>
                <div class="three columns property" id="apps">
                    <a href="http://zurb.com/apps">
                        <h4>ZURB<span class="apps">apps</span></h4>

                        <p>A powerful design suite that will help you prototype, iterate and collect feedback on your
                            product design.</p>
                        <span>Get Started &rarr;</span>
                    </a>
                </div>

                <div class="show-on-phones"><br/><br/></div>
                <div class="three columns property" id="expo">
                    <a href="http://zurb.com/expo">
                        <h4>Expo</h4>

                        <p>We think anyone can design great products and we will share our thoughts, ideas and design
                            resources to show you how to do it.</p>
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

<h2>Getting Started</h2>
<h5 class="subheader">Whether you are using Scss or CSS, we've made it easy to start a project so that you can help take
    over the world one responsive site at a time.</h5>

<p>Foundation is developed in <a href="http://www.sass-lang.com">Sass</a>, which is powerful CSS pre-processor that
    helps you write cleaner, more organized, CSS that you can more easily maintain over time without the typical
    headaches of vanilla CSS. On top of our minimal styling, we've written powerful Javascript plugins that will make
    useful interactions easier to implement across screen sizes.</p>

<hr>

<h3>What comes with Foundation?</h3>
<h5 class="subheader">We've got you covered when it comes to useful features and we've made it easy to take out what you
    don't need. Here's what you'll get when you create a project using our Gem or the default CSS version:</h5>


<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="grid.php">The Grid</a></h5></dt>
            <dd>Our grid works on almost any device and has support for nesting, source ordering, offsets and device
                presentation. It almost makes creating layouts too easy!
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="typography.php">Typography</a></h5></dt>
            <dd>Our type is based on a golden ratio modular scale that creates meaninful relationships for the copy on
                the page. It's easily updated using Scss or our CSS customizer.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="buttons.php">Buttons</a></h5></dt>
            <dd>Buttons are a core interactive element of the Web. We've included styles for creating simple marketing
                CTAs to complex application toolbars.
            </dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="navigation.php">Navigation</a></h5></dt>
            <dd>People have to get around. Navigation styles in Foundation include a complex top bar that supports
                3-level dropdown navigation for simple bars, sidebars and subnav pills.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="forms.php">Forms</a></h5></dt>
            <dd>Built with the Foundation Grid, you can create simple or complicated forms quickly and easily&mdash;
                validation states, custom select, radio buttons and more.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="elements.php">UI Elements</a></h5></dt>
            <dd>We've also included lots of useful elements like visibility classes (to hide or show things based on
                screen size or orientation), labels, alerts, tooltips, panels and a lot more.
            </dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="tabs.php">Tabs</a></h5></dt>
            <dd>Whether it's entire pages or simple tabbed content, Foundation's tabs get the job done. Not only
                stylish, but interactive out of the box.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="orbit.php">Orbit</a></h5></dt>
            <dd>A powerful image or content slider that works responsively and includes tons of useful options, such as
                timers, paddles, bullet thumbs and more.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="reveal.php">Reveal</a></h5></dt>
            <dd>You can easily call modals without writing any JS, even spawn subsequent modals cleanly on the same
                page. Reveal works across devices.
            </dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="clearing.php">Clearing</a></h5></dt>
            <dd>Show off your images in style with our easy to use gallery plugin. It's built with simple unordered
                lists that can be styled to your hearts content.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="magellan.php">Magellan</a></h5></dt>
            <dd>A flexible sticky navigation that knows where you are on the page. You just tell it what to recognize
                and set it off.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><a href="joyride.php">Joyride</a></h5></dt>
            <dd>This plugin lets you give users a tour of your site our app. Joyride is easy to customize using CSS or
                our Scss variables.
            </dd>
        </dl>
    </div>
</div>

<hr>

<h3>How is a project structured?</h3>
<h5 class="subheader">We follow common patterns for directory structure that are logical and easily maintained. Below is
    an explanation of each file you'll get when you create a project using our gem or download via our <a
        href="/download.php">customizer</a>.</h5>

<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-folder"></i> stylesheets</h5></dt>
            <dd>Includes <code>foundation.css</code> and <code>foundation.min.css</code> so you can choose which to use.
                We've also included <code>app.css</code> that you can use for custom styles that will sit on top of the
                Foundation core as overrides.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-folder"></i> javascripts</h5></dt>
            <dd>All of our plugins and the necessary Javascript to make Foundation work properly. The most important
                file here is <code>app.js</code>, which is used to initialize the various plugins that you might want to
                use. <strong>All JS is initiated by default</strong>.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-folder"></i> images</h5></dt>
            <dd>This directory includes all the images needed for Foundation, which actually aren't many. The only
                images included by default are used for Orbit. If you don't use Orbit, you may get rid of them.
            </dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-page"></i> index.html</h5></dt>
            <dd>A sample structure for page content, giving you something to use as a basic structural template for the
                rest of the pages in your project.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-page"></i> humans.txt</h5></dt>
            <dd>A way to tell the world about the people that worked on the sites you build, giving them kudos they
                deserve.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5><i class="foundicon-page"></i> robots.txt</h5></dt>
            <dd>Give instructions to web robots so search engines know what to do when they crawl your site for
                content.
            </dd>
        </dl>
    </div>
</div>
<br>

<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <h6 class="subheader"><strong>Using the Gem?</strong> You'll see a couple extra pieces in your project upon
                creation. These are:</h6>
            <dl>
                <dt><i class="foundicon-folder"></i> sass/</dt>
                <dd>Your main style folder is named <strong>sass/</strong> and contains <code>app.scss</code>, which
                    imports Foundation (or the parts you want). Your custom styles go below the <code>@imports</code>.
                    You can see the compiled CSS in your stylesheets directory after you manually <span
                        class="has-tip top" title="$ compass compile <filename>">compile</span> or <span
                        class="has-tip top" title="$ compass watch <directory>">watch</span>. This directory also
                    includes <code>_settings.scss</code>, which is used to control variables that help easily style
                    Foundation.
                </dd>
                <dt><i class="foundicon-settings"></i> config.rb</dt>
                <dd>This file is used by <a href="http://compass.style.org">Compass</a> to compile your project. Here
                    you can control the output style of your CSS, the structure of your directories and other useful
                    settings.
                </dd>
            </dl>
        </div>
    </div>
</div>

<hr>

<h3>HTML Page Markup</h3>
<h5 class="subheader">Our markup structure is straight forward and gives you the flexibility you need to create to your
    hearts desires. Here's an example page that includes the basics:</h5>

<pre><code data-language='html'>
    &lt;!DOCTYPE html&gt;

    &lt;!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --&gt;
    &lt;!--[if IE 8]&gt; &lt;html class=&quot;no-js lt-ie9&quot; lang=&quot;en&quot;&gt; &lt;![endif]--&gt;
    &lt;!--[if gt IE 8]&gt;&lt;!--&gt; &lt;html class=&quot;no-js&quot; lang=&quot;en&quot;&gt; &lt;!--&lt;![endif]--&gt;

    &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot; /&gt;

    &lt;!-- Set the viewport width to device width for mobile --&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width&quot; /&gt;

    &lt;title&gt;Page Title&lt;/title&gt;

    &lt;!-- Included CSS Files, use foundation.css if you do not want minified code --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;stylesheets/foundation.min.css&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;stylesheets/app.css&quot;&gt;

    &lt;!-- Custom Modernizr for Foundation --&gt;
    &lt;script src=&quot;javascripts/foundation/modernizr.foundation.js&quot;&gt;&lt;/script&gt;
    &lt;/head&gt;

    &lt;body&gt;
    &lt;!-- Page Layout HTML here --&gt;

    &lt;!-- Latest version of jQuery --&gt;
    &lt;script src=&quot;javascripts/jquery.js&quot;&gt;&lt;/script&gt;

    &lt;!-- Included JS Files (Unminified) --&gt;
    &lt;!-- [JS Files] --&gt;
    &lt;!-- We include all the unminified JS as well. Uncomment to use them instead --&gt;

    &lt;!-- Included JS Files (Minified) --&gt;
    &lt;script src=&quot;javascripts/foundation.min.js&quot;&gt;&lt;/script&gt;

    &lt;!-- Initialize JS Plugins --&gt;
    &lt;script src=&quot;javascripts/app.js&quot;&gt;&lt;/script&gt;
    &lt;/body&gt;
    &lt;/html&gt;
</code></pre>
<div class="row">
    <div class="four columns">
        <dl>
            <dt>
            <h5>Doctype &amp; Head</h5></dt>
            <dd>We use the HTML doctype declaration to tell the browser what to expect. From there we've used a <a
                href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/">technique by Paul
                Irish</a> that attaches classes to the HTML for IE. After that, we set the character set to UTF-8.
            </dd>
            <dt>Meta Viewport tag</dt>
            <dd>This is used to make sure smaller devices use the device width as the viewport width.</dd>
            <dt>Title Tag</dt>
            <dd>This one is pretty self-explanatory. You're setting the name of the current page with this value.</dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5>CSS &amp; Modernizr</h5></dt>
            <dd>The default CSS download includes everything you need to get going, including necessary styles and our
                custom Modernizr script.
            </dd>
            <dt>CSS</dt>
            <dd>We include <code>foundation.min.css</code> and <code>foundation.css</code>. The difference here is
                whether or not you want minified code or not (link whichever you want, but not both). You'll also notice
                <code>app.css</code>, which can be used for your own Foundation overrides.
            </dd>
            <dt>Modernizr</dt>
            <dd>We use this to give us the HTML5 Shiv, touch classes and JS media queries that help us control
                Foundation.
            </dd>
        </dl>
    </div>
    <div class="four columns">
        <dl>
            <dt>
            <h5>Javascripts</h5></dt>
            <dd>Our JS is linked up right before the closing body tag and includes all necessary plugins and
                initializers to hit the ground running.
            </dd>
            <dt>jQuery</dt>
            <dd>We stay as close as possible to the latest version of jQuery at all times. jQuery needs to be included
                before any Foundation JS.
            </dd>
            <dt>Foundation JS</dt>
            <dd>We include <code>foundation.min.js</code> by default, which includes all the available plugins. If you
                want to customize, we have every individual plugin commented for you to quickly pick and choose.
            </dd>
        </dl>
    </div>
</div>

<div class="panel">
    <h6 class="subheader"><strong>Using the Gem?</strong> you'll have slightly different markup:</h6>
    <dl>
        <dt>CSS</dt>
        <dd>You'll only see <code>app.css</code> since we <strong>@import</strong> foundation at the top and it compiles
            above our custom CSS.
        </dd>
        <dt>JS</dt>
        <dd>You'll see that we include each plugin separately so that you can easily remove what you don't need.</dd>
    </dl>
</div>

<hr>

<div class="panel">
    <h3>Get going!</h3>
    <h5 class="subheader">Now that you understand the gist of what Foundation is and how it works, it's time to start a
        project! We've got two different ways for you to build projects with Foundation, a Compass Gem using Scss or a
        with plain CSS.</h5>
    <a href="compass.php" class="button">Installing the Gem</a></li>
    <a href="quickstart.php" class="button secondary">Quickstart with CSS</a></li>
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
        <script type="text/javascript"
                src="http://www.zurb.com/jobs/widgets/jobs.js?limit=3&variation=foundation-sidebar"></script>
        <a id="via" href="http://zurbjobs.com">via&nbsp;<span class="jobs-link">ZURBjobs</span></a>
    </div>
</div>
</div>
</section>


<section id="sidebar" role="complementary">

    <!-- Existing Nav Structure -->
    <!-- <dl class="tabs vertical hide-on-phones">
     <dd class="active"><a href="index.php">Getting Started</a></dd>
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
        <li class="active"><a href="index.php">Getting Started</a></li>
        <li><a href="compass.php">Compass</a></li>
        <li><a href="rails.php">Rails</a></li>
        <li><a href="sass.php">Sass</a>
        </li>
        <li><a href="quickstart.php">CSS Quickstart</a></li>
        <li><a href="components.php">Components</a>
        </li>
        <li><a href="javascripts.php">Javascripts</a>
        </li>
        <li><a href="support.php">Support</a>
        </li>
    </ul>

</section>
</div>


<hr/>

<!-- Das Footer -->
<footer class="row">
    <section class="five columns">
        <h6><strong>Made by ZURB</strong></h6>

        <p>Foundation is made by <a href="http://www.zurb.com/">ZURB</a>, a product design company in Campbell,
            California. We've put more than 14 years of experience building web products, services and websites into
            this framework. <a href="../about.php">Foundation Info and Goodies &rarr;</a></p>
    </section>

    <section class="three columns">
        <h6><strong>Using Foundation?</strong></h6>

        <p>Let us know how you're using Foundation and we might feature you as an example! <a
            href="mailto:foundation@zurb.com?subject=I'm%20using%20Foundation">Get in touch &rarr;</a></p>
    </section>

    <section class="four columns">
        <h6><strong>Need some help?</strong></h6>

        <p>For answers or help visit the <a href="support.php">Support page</a>.</p>
        <ul class="inline-list">
            <li>
                <a href="http://www.facebook.com/ZURB" target="_blank"><span class="glyph social">d</span></a>
            </li>
            <li>
                <a href="https://plusone.google.com/_/+1/confirm?url=http://foundation.zurb.com&title=Foundation%20from%20ZURB"
                   target="_blank"><span class="glyph social">l</span></a>
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

<script src="../public/assets/marketing_docs.js"></script>
<script src="http://www.zurb.com/assets/zurb.mega-drop.js"></script>
<script src="../public/assets/rainbow.min.js"></script>
<script src="../public/assets/docs.js"></script>
<script>
    $(document).ready(function () {
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

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    $(document).on('click', '[data-src-download]', function (event) {
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