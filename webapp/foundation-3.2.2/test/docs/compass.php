

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

    <title>Foundation Documentation: Compass</title>

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
                <h2>Installing the Compass Gem</h2>
                <h5 class="subheader">Start using Foundation the way you want, with more control than ever before. We've made it really easy to install using Compass so you'll need a little bit of knowledge before you get going. Visit the <a href="http://compass-style.org">Compass</a> and <a href="http://sass-lang.com">Sass</a> sites to learn the basics if you don't already know them.</h5>

                <h4>Recommended Installation</h4>
                <p>To create your first project using our Compass extension, you'll need to have the <kbd>zurb-foundation</kbd> gem installed. This will install Foundation and all necessary dependencies. Here's the command that will do this for you:</p>
                <p class="btm-marg keystroke">[sudo] gem install zurb-foundation</p>
                <br>
                <em style="font-size: 12px;">Note: Make sure ZURB isn't all caps.</em>

                <br><br>

                <div class="row">
                    <div class="six columns">
                        <h5>Upgrading Your Gem</h5>
                        <p>To upgrade your gem to the latest public release, just paste this snippet into your command line:</p>
                        <p class="keystroke">[sudo] gem update zurb-foundation</p>
                    </div>
                    <div class="six columns">
                        <h5>Release Candidates</h5>
                        <p>Stay on top of the latest before official releases by installing release candidates with this command:</p>
                        <p class="btm-marg keystroke">[sudo] gem install zurb-foundation --pre</p>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="twelve columns">
                        <h5>Compiling Your Scss</h5>
                        <p>To compile your Scss into CSS you run a simple command that will watch for saves and compile each time you save an Scss file. The command is:</p>
                        <p class="btm-marg keystroke">compass watch</p>
                    </div>
                </div>

                <br>
                <hr>

                <a name="create-compass"></a>
                <h2>Creating your first project</h2>
                <h5 class="subheader">Compass makes it really easy to start a new project. Since you've installed the Foundation gem by now, you now have Compass, Sass and a few other necessary dependencies available at your fingertips.</h5>
                <p>Follow these two steps to get going:</p>
                <ol style="margin-left: 20px;">
                    <li><span class="keystroke">cd path/to/where-you-want-your-project</span></li>
                    <li>run <span class="keystroke">compass create &lt;project-name&gt; -r zurb-foundation --using foundation</span></li>
                </ol>

                <hr>

                <a name="compass-existing"></a>
                <h3>Working with Existing projects</h3>
                <h5 class="subheader">There are a couple situations to cover here. You might be adding Foundation to an existing project that wasn't build with Foundation or you might be upgrading Foundation for an already created Foundation Compass project.</h5>

                <h5>Adding Foundation to existing Compass projects</h5>
                <p>If you've created a project using Compass, but didn't require the Foundation gem, you'll need to install it separately. When you do this you'll get all the necessary files on top of the ones you already have. If something is a duplicate, Compass will ignore it. The steps you'll take to properly install Foundation are:</p>
                <ol style="margin-left: 20px;">
                    <li>Add <span class="keystroke">require "zurb-foundation"</span> to your config.rb file</li>
                    <li><span class="keystroke">cd path/to/your-project</span></li>
                    <li>run <span class="keystroke">compass install foundation</span></li>
                </ol>

                <h5>Upgrading Foundation Compass projects</h5>
                <p><strong>Javascript and Image Updates:</strong> If you already added Foundation to your Compass project or created the project using Foundation in the first place and just want to copy over any updated javascripts/image assets to your project, use the provided <kbd>foundation/upgrade</kbd> pattern below:</p>
                <ol style="margin-left: 20px;">
                    <li><span class="keystroke">cd /path/to/your-project</span></li>
                    <li>run <span class="keystroke">compass install -r zurb-foundation foundation/upgrade --force</span></li>
                </ol>

                <p><strong>Settings file updates:</strong> You can also upgrade Foundation as a whole, which will override the existing Foundation styles and your settings file. So if you've made changes to your settings file and want to make sure your project is on the latest version of Foundation, make sure you backup your settings file before you begin. Alternatively, you can copy/paste the settings from our file and <strong>@import</strong> your own so they don't get erased.</p>
                <p>We also recommend creating a <code>foundation-overrides.scss</code> file that you can use for your own specific styles. This will ensure that your styles don't get obliterated upon updating. <strong>We do not recommend directly editing the Foundation files if you plan to upgrade.</strong> To update you project, use the following steps:</p>
                <ol style="margin-left: 20px;">
                    <li>Make sure you've updated your system version of the gem or upgrading won't work.</li>
                    <li><span class="keystroke">cd /path/to/your-project</span></li>
                    <li>run <span class="keystroke">compass install -r zurb-foundation foundation</span></li>
                </ol>

                <hr>

                <a name="project-git"></a>
                <h3>Creating a project from Git</h3>
                <h5 class="subheader">Sometimes you want to checkout what we've got even before we decide to deploy a release candidate. For these situations, you can install using Bundler.</h5>

                <p>There are a few different ways to do this, but here's what we recommend:</p>
                <ol style="margin-left: 20px;">
                    <li>Setup a Foundation project folder: <kbd>mkdir ~/awesomeapp</kbd></li>
                    <li>Create a Gemfile with this content: <br>
                        <kbd style="margin-left: 15px;">source :rubygems</kbd> <br>
                        <kbd style="margin-left: 15px;">gem "zurb-foundation", :git => "git@github.com:zurb/foundation.git"</kbd> <br>
                        <kbd style="margin-left: 15px;">gem "compass"</kbd>
                    </li>
                    <li>Then run: <kbd>touch ~/awesomeapp/Gemfile</kbd></li>
                    <li>Change into your application directory: <kbd>cd ~/awesomeapp</kbd></li>
                    <li>Create a project using Bundler: <kbd>bundle exec compass create . -r zurb-foundation --using foundation</kbd></li>
                    <li>When you're working on your project, run: <kbd>bundle exec compass watch</kbd></li>
                </ol>

                <hr>

                <a name="gui-apps"></a>
                <h3>Working with GUI applications</h3>
                <h5 class="subheader">We want you to be able to work with Foundation in whatever way you are comfortable and we realize that not all of us are Terminal ninjas. Here's a rundown of some of the popular GUI applications and how to utilize Foundation with them.</h5>

                <h5>CodeKit Project</h5>
                <p>We're using a version of Sass and Compass that doesn't come with CodeKit. This means that you'll need to do a couple steps in order to get everything to compile correctly:</p>
                <ol style="margin-left: 20px;">
                    <li>First things first, make sure you have the gem installed.</li>
                    <li>Run <kbd>[sudo] gem environment</kbd> in the command line, note your gem executables path.</li>
                    <li>Go into <strong>Codekit prefs</strong>, click on <strong>Sass/Scss</strong></li>
                    <li>Click on <strong>"Use the Sass executable at this path:"</strong></li>
                    <li>Navigate to the <strong>bin</strong> folder at the gem path you found earlier.</li>
                    <li>Select sass.bin</li>
                    <li>Click on <strong>Compass</strong> in the preferences menu.</li>
                    <li>Click on <strong>"Use the Compass executable at this path:"</strong></li>
                    <li>Navigate to the <strong>bin</strong> folder at the gem path you found earlier.</li>
                    <li>Select compass.bin</li>
                    <li>Compile to your hearts content.</li>
                </ol>

                <p><strong>Note:</strong> CodeKit does not support adding Foundation as a "framework" through the GUI. You'll need to use the steps above to accomplish this.</p>

                <h5>LiveReload</h5>
                <p>While LiveReload works great within CodeKit, it doesn't work well on its own because you can't update it to use your system Sass and Compass directories. Do not use this application to compile Foundation.</p>

                <h5>Compass.app</h5>
                <p>You can get Compass.app to work with Foundation, but it isn't that easy. Read documentation on how to get Foundation working with this app, here: <a href="https://github.com/handlino/CompassApp/wiki/Use-Compass-Extensions">https://github.com/handlino/CompassApp/wiki/Use-Compass-Extensions</a>.</p>

                <h5>Scout</h5>
                <p>This app doesn't have support for updating the version of Sass and Compass that you use so we're not supporting it at this point.</p>

                <hr>

                <div class="panel">
                    <h3>Learn to Customize with Scss</h3>
                    <h5 class="subheader">Since you've got the gem installed, it's time to learn how to use Scss to make your experience with Foundation even more fun and customizable. We've made it really easy to change parts of Foundation with some simple variables and added more power with mixins.</h5>
                    <a class="button" href="sass.php">Scss Settings &amp; Mixins &raquo;</a>
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
            <li class="active"><a href="compass.php">Compass</a></li>
            <li ><a href="rails.php">Rails</a></li>
            <li ><a href="sass.php">Sass</a>
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