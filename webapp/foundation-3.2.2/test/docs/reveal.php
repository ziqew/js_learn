

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

    <title>Foundation Documentation: Reveal</title>

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
            <h2>Reveal</h2>
            <h5 class="subheader">Modal dialogs, or pop-up windows, are handy for prototyping and production. Foundation includes Reveal our jQuery modal plugin, to make this easy for you.</h5>

            <p><a href="#" data-reveal-id="exampleModal" class="radius button">Example Modal&hellip;</a></p>

            <hr>

            <h3>Using Reveal</h3>
            <p>Reveal is easy to hook up. Include the JS and CSS in your <code>head</code> (both of which are included in foundation.css and foundation.js, if you use the downloaded code pack). You can either call it in the JS or include a "data-reveal-id" parameter. Here are the steps to get started:</p>

            <h5>Markup</h5>
            <p><strong>Remember:</strong> Your modal should be at the end of the page, after any of your rows or columns.</p>
<pre><code data-language='html'>
    &lt;div id=&quot;myModal&quot; class=&quot;reveal-modal [expand, xlarge, large, medium, small]&quot;&gt;
    &lt;h2&gt;Awesome. I have it.&lt;/h2&gt;
    &lt;p class=&quot;lead&quot;&gt;Your couch.  It is mine.&lt;/p&gt;
    &lt;p&gt;Im a cool paragraph that lives inside of an even cooler modal. Wins&lt;/p&gt;
    &lt;a class=&quot;close-reveal-modal&quot;&gt;&amp;#215;&lt;/a&gt;
    &lt;/div&gt;
</code></pre>
            <a name="calling-reveal"></a>
            <h5>Calling Reveal</h5>
            <p>There are two ways to do call a Reveal modal. The first is to attach a handler to something (button most likely) then call Reveal:</p>
<pre><code data-language='javascript'>
    &lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
    $(&quot;#buttonForModal&quot;).click(function() {
    $(&quot;#myModal&quot;).reveal();
    });
    });
    &lt;/script&gt;
</code></pre>
            <p><strong>The new hotness:</strong> just add a data-reveal-id to the object which you want to fire the modal when clicked...</p>
<pre><code data-language='javascript'>
    &lt;a href=&quot;#&quot; class=&quot;button&quot; data-reveal-id=&quot;myModal2&quot;&gt;Click Me For A Modal&lt;/a&gt;
</code></pre>
            <p>This will launch the modal with the ID "myModal2" without attaching a handler or calling the plugin (since the plugin is always listening for this). You can also pass any of the parameters simply by putting a data-nameOfParameter="value" (i.e. data-animation="fade")</p>

            <h5>Closing Reveal Programmatically</h5>
            <p>You can close reveal using jQuery like so:</p>
<pre><code data-language='javascript'>
    $('#myModal').trigger('reveal:close');
</code></pre>
            <h4>Sizes</h4>
            <p>Out of the box, reveal supports a few different sizes, those are:<br> <kbd>small</kbd> <kbd>medium</kbd> <kbd>large</kbd> <kbd>xlarge</kbd> <kbd>expand</kbd></p>

            <hr>

            <a name="reveal-options"></a>
            <h3>Options</h3>
            <h5 class="subheader">Reveal comes with a nice list of helpful options, here's the rundown:</h5>

            <table class="small twelve">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>animation</td>
                    <td>fade<br>
                        fadeAndPop
                        none
                    </td>
                    <td>Control how your slides transition</td>
                </tr>
                <tr>
                    <td>animationSpeed</td>
                    <td>300</td>
                    <td>How fast should they progress?</td>
                </tr>
                <tr>
                    <td>closeOnBackgroundClick</td>
                    <td>true<br>
                        false
                    </td>
                    <td>If you click background, should modal close?</td>
                </tr>
                <tr>
                    <td>dismissModalClass</td>
                    <td>close-reveal-modal<br>
                    </td>
                    <td>Use our default dismiss class or make your own.</td>
                </tr>
                <tr>
                    <td>open</td>
                    <td></td>
                    <td>callback function that triggers 'before' the modal opens.</td>
                </tr>
                <tr>
                    <td>opened</td>
                    <td></td>
                    <td>callback function that triggers 'after' the modal is opened.</td>
                </tr>
                <tr>
                    <td>close</td>
                    <td></td>
                    <td>callback function that triggers 'before' the modal prepares to close.</td>
                </tr>
                <tr>
                    <td>closed</td>
                    <td></td>
                    <td>callback function that triggers 'after' the modal is closed.</td>
                </tr>
                </tbody>
            </table>

            <p>Options can be used on the "data-reveal-id" implementation too, just do it like this:</p>

            <table class="small twelve">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>data-animation</td>
                    <td>fade<br />
                        fadeAndPop<br />
                        none
                    </td>
                </tr>
                <tr>
                    <td>data-animationSpeed</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>data-closeOnBackgroundClick</td>
                    <td>true<br>
                        false
                    </td>
                </tr>
                <tr>
                    <td>data-dismissModalClass</td>
                    <td>close-reveal-modal
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="panel">
                <h3>Set Sail with Magellan</h3>
                <h5 class="subheader">Our sticky-nav plugin is easy to use and gives you exactly what you need to let people know where they are on a page.</h5>
                <a class="button" href="magellan.php">Learn about Magellan &raquo;</a>
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
                <li class="active"><a href="reveal.php">Reveal</a></li>
                <li ><a href="magellan.php">Magellan</a></li>
                <li ><a href="clearing.php">Clearing</a></li>
                <li ><a href="joyride.php">Joyride</a></li>
            </ul>
        </li>
        <li ><a href="support.php">Support</a>
        </li>
    </ul>

</section>	</div>

<div id="exampleModal" class="reveal-modal">
    <h2>This is a modal.</h2>
    <p>Reveal makes these very easy to summon and dismiss. The close button is simple an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
    <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
    <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal&hellip;</a></p>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="secondModal" class="reveal-modal">
    <h2>This is a second modal.</h2>
    <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
    <a class="close-reveal-modal">&#215;</a>
</div>

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