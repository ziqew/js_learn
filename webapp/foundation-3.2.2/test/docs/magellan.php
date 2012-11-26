

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

    <title>Foundation Documentation: Magellan</title>

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
<style type="text/css">
    #magellanTopNav {
        background:white;
        padding-top:10px;
        width:100%;
    }
</style>
<div class="row">
    <section role="main">
        <div class="row">
            <div class="eight columns">
                <h2>Magellan</h2>
                <h5 class="subheader">Building navigation is a necessity, but it isn't always as helpful as it could be. With Magellan, people will know exactly where they are as they scroll the page.</h5>

                <hr />

                <!-- Fixed position menu should go here to demonstrate powers -->
                <div class="row">
                    <div class="twelve columns">
                        <dl id="magellanTopNav" class="sub-nav" data-magellan-expedition="fixed">
                            <dt>Example Nav:</dt>
                            <dd class="active" data-magellan-arrival="overview"><a href="#overview">Overview</a></dd>
                            <dd data-magellan-arrival="options"><a href="#options">Options</a></dd>
                            <dd data-magellan-arrival="events"><a href="#events">Events</a></dd>
                        </dl>
                    </div>
                </div>

                <a name="overview" data-magellan-destination="overview"></a>
                <h3>Using Magellan</h3>
                <p>
                    The first thing you'll want to do is setup all the destinations
                    that Magellan should keep track of on the page. You can do this
                    using <kbd>data-magellan-destination</kbd> attributes like so:
                </p>

                <p style="font-weight:700">
                    <strong>Note:</strong> Each destination needs to have a unique name.
                </p>

<pre><code data-language='html'>
    &lt;div data-destination='fiji'&gt;
    &lt;p&gt;When this is in view the Fiji arrival will be notified.&lt;/p&gt;
    &lt;/div&gt;

    &lt;div data-destination='bahamas'&gt;
    &lt;p&gt;When this is in view the Bahamas arrival will be notified.&lt;/p&gt;
    &lt;/div&gt;

    &lt;div data-destination='hawaii'&gt;
    &lt;p&gt;When this is in view the Hawaii arrival will be notified.&lt;/p&gt;
    &lt;/div&gt;
</code></pre>
                <p>
                    Now create a container with the <kbd>data-magellan-expedition</kbd>
                    attribute. Inside of this container will need to create navigation
                    items with a <kbd>data-magellan-arrival</kbd> attribute like so:
                </p>

<pre><code data-language='html'>
    &lt;ul data-magellan-expedition&gt;
    &lt;li data-magellan-arrival='fiji'&gt;Fiji&lt;/li&gt;
    &lt;li data-magellan-arrival='bahamas'&gt;Bahamas&lt;/li&gt;
    &lt;li data-magellan-arrival='hawaii'&gt;Hawaii&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>
                <p>
                    Magellan will notify any matching <kbd>data-magellan-arrival</kbd>
                    attribute when you have approached a particular destination defined earlier.
                    The default behavior is to apply an "active" class to this element.
                </p>

                <p>
                    If you want your <kbd>data-magellan-expedition</kbd> element to remain
                    at the top of the page (like it does on this page) instead of scrolling
                    off the page use the "fixed" option like so:
                </p>

<pre><code data-language='html'>
    &lt;ul data-magellan-expedition='fixed'&gt;
    &lt;li data-magellan-arrival='fiji'&gt;Fiji&lt;/li&gt;
    &lt;li data-magellan-arrival='bahamas'&gt;Bahamas&lt;/li&gt;
    &lt;li data-magellan-arrival='hawaii'&gt;Hawaii&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>

                <hr />

                <a name="options" data-magellan-destination="options"></a>
                <h3>Options</h3>

                <p>You can change the following options on <kbd>data-magellan-expedition</kbd> elements:</p>

                <table class="small twelve">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Default</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>data-magellan-active-class</td>
                        <td>active</td>
                        <td>The class to be added to the <kbd>data-magellan-arrival</kbd> element.</td>
                    </tr>
                    </tbody>
                </table>

                <hr />

                <a name="events" data-magellan-destination="events"></a>
                <h3>Events</h3>

                <p>The following events are available and can be bound to:</p>

                <table class="small twelve">
                    <thead>
                    <tr>
                        <th>Event</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>magellan.arrival</td>
                        <td>Fired on <kbd>data-magellan-arrival</kbd> elements when they become active.</td>
                    </tr>
                    </tbody>
                </table>

                <hr />

                <div class="panel">
                    <h3>A Clear View</h3>
                    <h5 class="subheader">We designed a new lightbox plugin that makes it super easy to create awesome image galleries. Our markup is easy to use and gets out of the way!</h5>
                    <a class="button" href="clearing.php">Learn about Clearing &raquo;</a>
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
            <li ><a href="components.php">Components</a>
            </li>
            <li class="active"><a href="javascripts.php">Javascripts</a>
                <ul>
                    <li ><a href="orbit.php">Orbit</a></li>
                    <li ><a href="reveal.php">Reveal</a></li>
                    <li class="active"><a href="magellan.php">Magellan</a></li>
                    <li ><a href="clearing.php">Clearing</a></li>
                    <li ><a href="joyride.php">Joyride</a></li>
                </ul>
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