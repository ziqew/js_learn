
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114-precomposed.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="images/favicons/apple-touch-icon-precomposed.png">

    <link rel="icon" href="images/favicons/favicon.ico" type="image/x-icon" />

    <meta name="keywords" content="foundation, design, frameworks, framework, css framework, html framework, html5, css3, SASS, SCSS, compass, responsive, design" />
    <meta name="description" content="Foundation by ZURB is the most advanced responsive front-end framework in the world." />
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2012" />

    <title>Foundation: HTML Templates</title>

    <!-- Included CSS Files -->
    <link rel="stylesheet" href="http://www.zurb.com/assets/foundation.top-bar.css">
    <link rel="stylesheet" href="http://www.zurb.com/assets/zurb.mega-drop.css">
    <link rel="stylesheet" href="stylesheets/presentation.css">


    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>


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
                <a href="docs/grid.php" >Features</a>
            </li>
            <li>
                <a href="templates.php">Add-ons</a>
            </li>
            <li>
                <a href="case-jekyll.php" >Case Studies</a>
            </li>
            <li>
                <a href="">Docs</a>
            </li>
            <li>
                <a href="http://github.com/zurb/foundation">GitHub</a>
            </li>
            <li class="download"><a class="small blue nice button src-download" href="download.php">Download</a></li>
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

<header>
    <div class="row">
        <div class="twelve columns">
            <h1>HTML Templates</h1>
            <h4>Cook your site faster with some canned HTML!</h4>
        </div>
    </div>
</header>

<section id="mainContent">

<div class="row">

<div class="ten columns push-two">
<p class="show-for-small"><a href="docs/index.php">&larr; Back to Home</a></p>

<h3>How to Use Our Templates</h3>
<p>Using the grid you can build tons of layouts. Without using a single line of CSS outside of what comes with Foundation, we've created eight layouts for you to start from and build on. It's dead simple to use these simple HTML templates, just grab the code and drop it between the <code>&lt;body&gt;</code> tags of a Foundation page.</p>

<h4>Available Templates</h4>
<h6 class="subhead">Click to view the templates in the browser. Press <kbd>option/alt</kbd> to download them for your next project.</h6>

<br>
<div class="fndtn-templates add-ons">
<div class="row">

<!-- Banded -->
<div class="three mobile-one columns">
    <a href="page-templates/banded.html">
        <div class="template">
            <div class="row">
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 12px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 12px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 65px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
                <div class="eight columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="eight columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Banded
        <span><a href="#" data-reveal-id="bandedModal">See HTML</a></span>
    </p>
</div>

<!-- Blog -->
<div class="three mobile-one columns">
    <a href="page-templates/blog.html">
        <div class="template">
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 20px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="nine columns">
                    <span class="display" style="width: 100%; height: 150px;"></span>
                </div>

                <div class="three columns">
                    <span class="display" style="width: 100%; height: 150px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 15px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Blog
        <span><a href="#" data-reveal-id="blogModal">See HTML</a></span>
    </p>
</div>

<!-- Feed -->
<div class="three mobile-one columns">
    <a href="page-templates/feed.html">
        <div class="template">
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 20px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="two columns">
                    <span class="display" style="width: 100%; height: 120px;"></span>
                </div>

                <div class="eight columns">
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                        <div class="ten columns">
                            <span class="display" style="width: 100%; height: 15px;"></span>
                        </div>
                    </div>
                </div>

                <div class="two columns">
                    <span class="display" style="width: 100%; height: 40px;"></span>
                    <span class="display" style="width: 100%; height: 60px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 15px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Feed
        <span><a href="#" data-reveal-id="feedModal">See HTML</a></span>
    </p>
</div>

<!-- Grid -->
<div class="three mobile-one columns">
    <a href="page-templates/grid.html">
        <div class="template">
            <div class="row">
                <div class="display" style="width: 100%; height: 12px;"></div>
            </div>
            <div class="row">
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="six columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="two columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 50px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 30px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 10px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Grid
        <span><a href="#" data-reveal-id="gridModal">See HTML</a></span>
    </p>
</div>

</div>

<div class="row">

    <!-- Orbit Home -->
    <div class="three mobile-one columns">
        <a href="page-templates/homepage-1.html">
            <div class="template">
                <div class="row">
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 14px;"></span>
                    </div>
                    <div class="five columns">
                        <span class="display" style="width: 100%; height: 14px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 75px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <span class="display" style="width: 100%; height: 70px;"></span>
                    </div>
                    <div class="four columns">
                        <span class="display" style="width: 100%; height: 70px;"></span>
                    </div>
                    <div class="four columns">
                        <span class="display" style="width: 100%; height: 70px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve column">
                        <span class="display" style="width: 100%; height: 14px;"></span>
                    </div>
                </div>
            </div>
        </a>
        <p class="get-code">
            Orbit Home
            <span><a href="#" data-reveal-id="orbitHomeModal">See HTML</a></span>
        </p>
    </div>

    <!-- Banner Home -->
    <div class="three mobile-one columns">
        <a href="page-templates/homepage-2.html">
            <div class="template">
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 12px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 80px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="eight columns">
                        <span class="display" style="width: 100%; height: 50px;"></span>
                    </div>
                    <div class="four columns">
                        <div class="row">
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 22px;"></span>
                            </div>
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 22px;"></span>
                            </div>
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 22px;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 23px;"></span>
                            </div>
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 23px;"></span>
                            </div>
                            <div class="four columns">
                                <span class="display" style="width: 100%; height: 23px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 23px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 4px;"></span>
                    </div>
                </div>
            </div>
        </a>
        <p class="get-code">
            Banner Home
            <span><a href="#" data-reveal-id="bannerHomeModal">See HTML</a></span>
        </p>
    </div>

    <!-- Sidebar -->
    <div class="three mobile-one columns">
        <a href="page-templates/sidebar.html">
            <div class="template">
                <div class="row">
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 13px;"></span>
                    </div>
                    <div class="six columns">
                        <span class="display" style="width: 100%; height: 13px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <div class="row">
                            <div class="twelve column">
                                <span class="display" style="width: 100%; height: 80px;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve column">
                                <span class="display" style="width: 100%; height: 40px;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="eight columns">
                        <span class="display" style="width: 100%; height: 150px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 15px;"></span>
                    </div>
                </div>
            </div>
        </a>
        <p class="get-code">
            Sidebar
            <span><a href="#" data-reveal-id="sidebarModal">See HTML</a></span>
        </p>
    </div>

    <!-- Contact -->
    <div class="three mobile-one columns">
        <a href="page-templates/contact.html">
            <div class="template">
                <div class="row">
                    <div class="display" style="width: 100%; height: 12px;"></div>
                </div>
                <div class="row">
                    <div class="eight columns">
                        <div class="row">
                            <div class="twelve columns">
                                <span class="display" style="width: 100%; height: 25px;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <span class="display" style="width: 100%; height: 100px;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="five columns">
                                <span class="display" style="width: 100%; height: 10px;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="row">
                            <div class="twelve columns">
                                <span class="display" style="width: 100%; height: 50px;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <span class="display" style="width: 100%; height: 20px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 20px;"></span>
                    </div>
                </div>
            </div>
        </a>
        <p class="get-code">
            Contact
            <span><a data-reveal-id="contactModal" href="#">See HTML</a></span>
        </p>
    </div>

</div>

<div class="row">

<!-- Marketing -->
<div class="three mobile-one columns">
    <a href="page-templates/marketing.html">
        <div class="template">
            <div class="row">
                <div class="display" style="width: 100%; height: 12px;"></div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 60px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 90px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 90px;"></span>
                </div>
                <div class="four columns">
                    <span class="display" style="width: 100%; height: 90px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 20px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Marketing
        <span><a data-reveal-id="marketingModal" href="#">See HTML</a></span>
    </p>
</div>

<!-- Realty -->
<div class="three mobile-one columns">
    <a href="page-templates/realty.html">
        <div class="template">
            <div class="row">
                <span class="display" style="width: 100%; height: 12px;"></span>
            </div>
            <div class="row">
                <span class="display" style="width: 100%; height: 65px;"></span>
            </div>
            <div class="row">
                <div class="three columns">
                    <span class="display" style="width: 100%; height: 85px;"></span>
                </div>
                <div class="nine columns">
                    <span class="display" style="width: 100%; height: 60px;"></span>
                    <div class="row">
                        <div class="six columns">
                            <span class="display" style="width: 100%; height: 20px;"></span>
                        </div>
                        <div class="six columns">
                            <span class="display" style="width: 100%; height: 20px;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 20px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Realty
        <span><a data-reveal-id="realtyModal" href="#">See HTML</a></span>
    </p>
</div>

<!-- So Boxy -->
<div class="three mobile-one columns">
    <a href="page-templates/so-boxy.html">
        <div class="template">
            <div class="row">
                <span class="display" style="width: 100%; height: 15px;"></span>
            </div>
            <div class="row">
                <div class="six columns">
                    <span class="display" style="width: 100%; height: 70px;"></span>
                </div>
                <div class="six columns">
                    <div class="row">
                        <div class="twelve columns">
                            <span class="display" style="width: 100%; height: 40px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="six columns mobile-two">
                            <span class="display" style="width: 100%; height: 25px;"></span>
                        </div>
                        <div class="six columns mobile-two">
                            <span class="display" style="width: 100%; height: 25px;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 25px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="three column mobile-two">
                    <span class="display" style="width: 100%; height: 45px;"></span>
                </div>
                <div class="three column mobile-two">
                    <span class="display" style="width: 100%; height: 45px;"></span>
                </div>
                <div class="three column hide-for-small">
                    <span class="display" style="width: 100%; height: 45px;"></span>
                </div>
                <div class="three column hide-for-small">
                    <span class="display" style="width: 100%; height: 45px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 25px;"></span>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        So Boxy
        <span><a data-reveal-id="boxyModal" href="#">See HTML</a></span>
    </p>
</div>

<!-- Store -->
<div class="three mobile-one columns">
    <a href="page-templates/store.html">
        <div class="template">
            <div class="row">
                <div class="twelve columns">
                    <span class="display" style="width: 100%; height: 13px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <div class="row">
                        <div class="twelve columns">
                            <span class="display" style="width: 100%; height: 50px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <span class="display" style="width: 100%; height: 20px;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <span class="display" style="width: 100%; height: 12px;"></span>
                        </div>
                    </div>
                </div>
                <div class="eight columns">
                    <ul class="block-grid three-up mobile-two-up">
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                        <li>
                            <span class="display" style="width: 100%; height: 35px;"></span>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="twelve columns">
                            <span class="display" style="width: 100%; height: 20px;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <p class="get-code">
        Store
        <span><a data-reveal-id="storeModal" href="#">See HTML</a></span>
    </p>
</div>

</div>

<div class="row">

    <!-- Workspace -->
    <div class="three mobile-one columns">
        <a href="page-templates/workspace.html">
            <div class="template">
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 14px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 65px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 50px;"></span>
                    </div>
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 50px;"></span>
                    </div>
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 50px;"></span>
                    </div>
                    <div class="three columns">
                        <span class="display" style="width: 100%; height: 50px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="eight columns">
                        <span class="display" style="width: 100%; height: 30px;"></span>
                    </div>
                    <div class="four columns">
                        <span class="display" style="width: 100%; height: 30px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <span class="display" style="width: 100%; height: 20px;"></span>
                    </div>
                </div>
            </div>
        </a>
        <p class="get-code">
            Workspace
            <span><a data-reveal-id="workspaceModal" href="#">See HTML</a></span>
        </p>
    </div>
    <!-- <div class="three mobile-one columns">
     <a href="page-templates/marketing.html">
       <div class="template">

       </div>
     </a>
     <p class="get-code">
       Title
       <span><a data-reveal-id="contactModal" href="#">See HTML</a></span>
     </p>
   </div>
   <div class="three mobile-one columns">
     <a href="page-templates/marketing.html">
       <div class="template">

       </div>
     </a>
     <p class="get-code">
       Title
       <span><a data-reveal-id="contactModal" href="#">See HTML</a></span>
     </p>
   </div>
   <div class="three mobile-one columns">
     <a href="page-templates/marketing.html">
       <div class="template">

       </div>
     </a>
     <p class="get-code">
       Title
       <span><a data-reveal-id="contactModal" href="#">See HTML</a></span>
     </p>
   </div> -->

</div>

</div>
</div>

<div class="two columns pull-ten">
    <ul class="side-nav">
        <li><a href="docs/index.php">&larr; Home</a></li>
        <li class="divider"></li>
        <li class="active"><a href="templates.php">HTML Templates</a></li>
        <li><a href="icon-fonts.php">Icon Fonts</a></li>
        <li><a href="off-canvas.php">Off-Canvas Layouts</a></li>
        <li><a href="responsive-tables.php">Responsive Tables</a></li>
        <li><a href="social-icons.php">SVG Social Icons</a></li>
        <li><a href="stencils.php">Stencils</a></li>
    </ul>
</div>
</div>

</section>

<div id="bandedModal" class="reveal-modal large">
    <h3>Banded Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712225/7d999e662b75ff18f2fe414f11d27a5f206ee029/banded-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712225.js?file=banded-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="blogModal" class="reveal-modal large">
    <h3>Blog Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712227/4f506189c7d4d7b443fa05e3b3be6785cbfa1927/blog-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712227.js?file=blog-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="feedModal" class="reveal-modal large">
    <h3>Feed Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712238/ba986eec226a6a415666517b91e3e9ffdecf38a1/feed-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712238.js?file=feed-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="gridModal" class="reveal-modal large">
    <h3>Grid Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712241/96f45acfbf0d9fa57ef72956f8d80fee81d72abc/grid-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712241.js?file=grid-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="orbitHomeModal" class="reveal-modal large">
    <h3>Orbit Homepage Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712258/dca05071c090be1f3af8d86d6834ca0b8f314df3/orbit-home-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712258.js?file=orbit-home-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="bannerHomeModal" class="reveal-modal large">
    <h3>Banner Homepage Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://gist.github.com/raw/3712264/668b2553dd410fafba001e44eb05564d5f5e10cf/banner-home-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712264.js?file=banner-home-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="sidebarModal" class="reveal-modal large">
    <h3>Sidebar Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://gist.github.com/raw/3712276/bdc345500be3244c1fbb3ba69de8511125f0b5a3/sidebar-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712276.js?file=sidebar-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="contactModal" class="reveal-modal large">
    <h3>Contact Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3712119/3bafc94f6778d1456e6fcbf144f4daa4be81a3fc/contact-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3712119.js?file=contact-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="marketingModal" class="reveal-modal large">
    <h3>Marketing Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3956137/487df6f0c06fae865a60f49a205bcda8f686f538/marketing-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3956137.js?file=marketing-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="realtyModal" class="reveal-modal large">
    <h3>Realty Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3956145/c2812d285a6dc1e467928a6b34c641c923be7067/realty-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3956145.js?file=realty-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="boxyModal" class="reveal-modal large">
    <h3>So Boxy Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3956151/9fc5fc144b5c7cf411d0866cf767f6fbeafd6737/boxy-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3956151.js?file=boxy-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="storeModal" class="reveal-modal large">
    <h3>Store Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3956157/9d701dfcf38cb07f04b67e4c001a2b3eeb50327c/store-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3956157.js?file=store-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="workspaceModal" class="reveal-modal large">
    <h3>Workspace Page Template</h3>
    <h5>Copy the HTML and paste it between your <code>&lt;body&gt;</code> tags in a Foundation page. <a rel="nofollow" target="_blank" href="https://raw.github.com/gist/3956161/d3e5e352f4df79b23d1aad586c08c5ca1fbe391a/workspace-template.html">View Raw</a></h5>
    <div class="gist-wrap"><script src="https://gist.github.com/3956161.js?file=workspace-template.html"></script></div>
    <a class="close-reveal-modal">&#215;</a>
</div>


<footer class="row">
    <section class="five columns">
        <h6><strong>Made by ZURB</strong></h6>
        <p>Foundation is made by <a href="http://www.zurb.com/">ZURB</a>, a product design company in Campbell, California. We've put more than 14 years of experience building web products, services and websites into this framework. <a href="../about.php">Foundation Info and Goodies &rarr;</a></p>
    </section>

    <section class="three columns">
        <h6><strong>Using Foundation?</strong></h6>
        <p>Let us know how you're using Foundation and we might feature you as an example!<br /><a href="mailto:foundation@zurb.com?subject=I'm%20using%20Foundation">Get in touch &rarr;</a></p>
    </section>

    <section class="four columns">
        <h6><strong>Need some help?</strong></h6>
        <p class="support">For answers or help visit the <a href="docs/support.php">Support page</a>.</p>

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

<div id="newsletter">
    <div class="row">

        <div class="eight columns">
            <h5>Stay on top of what's happening in responsive design with Responsive Reading.</h5>
            <p>Curious? <a href="http://createsend.com/t/y-F96435232C4163B3">Read Last Month's Edition &raquo;</a></p>
        </div>

        <div class="four columns">
            <div class="row collapse">
                <form method="post">
                    <div class="eight mobile-three columns">
                        <input type="text" name="email" placeholder="signup@example.com" />            </div>
                    <div class="four mobile-one columns">
                        <input type="submit" href="#" class="postfix small button expand" value="Sign Up" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="copyright">
    <div class="row">
        <div class="four columns">
            <p>Site content &copy; 2012 ZURB, inc.</p>
        </div>
        <div class="eight columns">
            <ul class="inline-list right">
                <li><a href="docs/index.php">Home</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="docs/index.php">Documentation</a></li>
                <li><a href="docs/installing.php">Install</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="http://feeds.feedburner.com/zurb/blog">Subscribe to the ZURBlog</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="public/assets/marketing.js"></script>
<script src="http://www.zurb.com/assets/zurb.mega-drop.js"></script>

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

    // Template Toggle for Customizer
    $('.toggle-layer').find('input[type=checkbox]').on('click', function() {
        if ($(this).is(':checked')) {
            $('#fndTemps').slideDown();
        } else {
            $('#fndTemps').slideUp();
        }
    });

    $('#fndTemps > div > div > div > div > a').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        $(this).find(':input[type=checkbox]').attr('checked', $(this).hasClass('selected'));
    });

</script>
</body>
</html>
