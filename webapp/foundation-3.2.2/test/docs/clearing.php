

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

    <title>Foundation Documentation: Clearing</title>

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
                <h2>Clearing</h2>
                <h5 class="subheader">Tired of trying to use Orbit to display images with different size content? So were we! Since this wasn't the original intent for Orbit, we wrote a whole new plugin! Clearing gives you the ability to create responsive lightboxes that are easy.</h5>

                <!-- Need example -->
                <hr>

                <div class="row tabs">
                    <div class="eight columns">
                        <a name="alerts"></a>
                        <h3>Using Clearing</h3>
                    </div>
                    <div class="four columns tabs">
                        <dl class="tabs pill small">
                            <dd class="active"><a href="#clearingEx">Example</a></dd>
                            <dd><a href="#clearingCode">Code</a></dd>
                        </dl>
                    </div>
                </div>
                <p>To take advantage of Clearing, you'll simply need to gather some images, decide which order you want them in and plop them into a <code>&lt;ul data-clearing&gt;</code>. From there, you have some options for adding captions with, <code>&lt;data-caption=""&gt;</code>.</p>
                <p>You can optionally choose to only show a single image from the gallery by adding a class of <code>.clearing-feature</code> to the <code>&lt;li&gt;</code> of your choice. When you click that image, the rest in the list will show up in the gallery carousel.</p>

                <ul class="tabs-content">
                    <li class="active" id="clearingExTab">
                        <div class="row">
                            <div class="four columns">
                                <ul class="block-grid three-up mobile-two-up" data-clearing>
                                    <li><a href="http://placekitten.com/g/1000/1000"><img data-caption="Maecenas sed diam eget risus varius blandit sit amet non magna." src="http://placekitten.com/g/1000/1000"></a></li>
                                    <li><img src="http://placekitten.com/g/1000/900"></li>
                                    <li><a href="http://placekitten.com/g/1000/800"><img data-caption="Integer posuere erat a ante venenatis dapibus posuere velit aliquet." src="http://placekitten.com/g/1000/800"></a></li>
                                    <li><img data-caption="Pellentesque ornare sem lacinia quam venenatis vestibulum." src="http://placekitten.com/g/1000/700"></li>
                                    <li><a href="http://placekitten.com/g/1000/600"><img data-caption="Etiam porta sem malesuada magna mollis euismod." src="http://placekitten.com/g/1000/600"></a></li>
                                    <li><img data-caption="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit." src="http://placekitten.com/g/1000/500"></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li id="clearingCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;block-grid three-up&quot; data-clearing&gt;
    &lt;li&gt;&lt;a href=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/100/100&quot;&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/100/100&quot;&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/100/100&quot;&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img data-caption=&quot;Maecenas sed diam eget risus varius blandit sit amet non magna.&quot; src=&quot;http://placekitten.com/g/1000/800&quot;&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
                </ul>

                <h5>Styling the on-page gallery</h5>
                <p>We've used our block-grid to position and style the thumbnails in the example above. You can style the list however you want as long as it has the data-clearing attribute on it.</p>

                <hr>

                <div class="panel">
                    <h3>Take a Joyride</h3>
                    <h5 class="subheader">Create jQuery Feature Tours in a Breeze. Setting up Joyride is simple, just attach the needed files, drop in your markup and choose your settings.</h5>
                    <a class="button" href="joyride.php">Learn about Joyride &raquo;</a>
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
                    <li ><a href="magellan.php">Magellan</a></li>
                    <li class="active"><a href="clearing.php">Clearing</a></li>
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