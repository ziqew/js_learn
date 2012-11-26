

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

    <title>Foundation Documentation: Grid</title>

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
<a name="grid"></a>
<h2>The Grid</h2>
<h5 class="subheader">Create powerful multi-device layouts quickly and easily with the 12-column, nestable Foundation grid. If you're familiar with grid systems, you'll feel right at home.</h5>

<h3>The Basics</h3>
<p>The grid is built around two key elements: rows and columns. Rows create a max-width and contain the columns; columns create the actual structure. For layouts to work properly, always put your page content inside a row and a column.</p>

<p>What you need to know is that <strong>columns don't have a fixed width.</strong> They can vary based on the resolution of the screen, or the size of the window (try scaling down this window to see what we mean). Design with that in mind.</p>

<h4>Technical Details</h4>
<p>The Foundation 3 grid, like everything else in Foundation 3, is built with <code>box-sizing: border-box</code>, a powerful CSS property that tells the browser to consider border and padding as part of the width of an object rather than as an addition. That enables us to construct the grid extremely simply, which is good news for anyone who lamented how difficult it was to modify the Foundation 2 grid.</p>
<p>Gutters are created simply with padding on the columns. That means columns have simple widths like 25%, or 50%. Adjusting the padding adjusts the gutters, and this can be controlled either through Scss variables, the download customizer, or through the CSS itself.</p>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <h3>Examples</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#gridBasics">Example</a></dd>
            <dd><a href="#gridCode">Code</a></dd>
        </dl>
    </div>
</div>

<p>Below is a visible example of the grid. Each column block is sized based on how many of the 12 columns it takes up, and where you see thicker borders it's because two columns are running against each other.</p>

<ul class="tabs-content">
<li class="active" id="gridBasicsTab">
    <div class="row display">
        <div class="four columns">
            .four.columns
        </div>
        <div class="four columns">
            .four.columns
        </div>
        <div class="four columns">
            .four.columns
        </div>
    </div>
    <div class="row display">
        <div class="three columns">
            .three.columns
        </div>
        <div class="six columns">
            .six.columns
        </div>
        <div class="three columns">
            .three.columns
        </div>
    </div>
    <div class="row display">
        <div class="two columns">
            .two.columns
        </div>
        <div class="eight columns">
            .eight.columns
        </div>
        <div class="two columns">
            .two.columns
        </div>
    </div>
    <div class="row display">
        <div class="one columns">
            .one
        </div>
        <div class="eleven columns">
            .eleven.columns
        </div>
    </div>
    <div class="row display">
        <div class="two columns">
            .two.columns
        </div>
        <div class="ten columns">
            .ten.columns
        </div>
    </div>
    <div class="row display">
        <div class="three columns">
            .three.columns
        </div>
        <div class="nine columns">
            .nine.columns
        </div>
    </div>
    <div class="row display">
        <div class="four columns">
            .four.columns
        </div>
        <div class="eight columns">
            .eight.columns
        </div>
    </div>
    <div class="row display">
        <div class="five columns">
            .five.columns
        </div>
        <div class="seven columns">
            .seven.columns
        </div>
    </div>
    <div class="row display">
        <div class="six columns">
            .six.columns
        </div>
        <div class="six columns">
            .six.columns
        </div>
    </div>
    <div class="row display">
        <div class="seven columns">
            .seven.columns
        </div>
        <div class="five columns">
            .five.columns
        </div>
    </div>
    <div class="row display">
        <div class="eight columns">
            .eight.columns
        </div>
        <div class="four columns">
            .four.columns
        </div>
    </div>
    <div class="row display">
        <div class="nine columns">
            .nine.columns
        </div>
        <div class="three columns">
            .three.columns
        </div>
    </div>
    <div class="row display">
        <div class="ten columns">
            .ten.columns
        </div>
        <div class="two columns">
            .two.columns
        </div>
    </div>
    <div class="row display">
        <div class="eleven columns">
            .eleven.columns
        </div>
        <div class="one columns">
            .one
        </div>
    </div>
    <div class="row display">
        <div class="twelve columns">
            .twelve.columns
        </div>
    </div>
</li>
<li id="gridCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;three columns&quot;&gt;
    .three.columns
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    .six.columns
    &lt;/div&gt;
    &lt;div class=&quot;three columns&quot;&gt;
    .three.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two columns&quot;&gt;
    .two.columns
    &lt;/div&gt;
    &lt;div class=&quot;eight columns&quot;&gt;
    .eight.columns
    &lt;/div&gt;
    &lt;div class=&quot;two columns&quot;&gt;
    .two.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;div class=&quot;eleven columns&quot;&gt;
    .eleven.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two columns&quot;&gt;
    .two.columns
    &lt;/div&gt;
    &lt;div class=&quot;ten columns&quot;&gt;
    .ten.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;three columns&quot;&gt;
    .three.columns
    &lt;/div&gt;
    &lt;div class=&quot;nine columns&quot;&gt;
    .nine.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;div class=&quot;eight columns&quot;&gt;
    .eight.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;five columns&quot;&gt;
    .five.columns
    &lt;/div&gt;
    &lt;div class=&quot;seven columns&quot;&gt;
    .seven.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    .six.columns
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    .six.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;seven columns&quot;&gt;
    .seven.columns
    &lt;/div&gt;
    &lt;div class=&quot;five columns&quot;&gt;
    .five.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eight columns&quot;&gt;
    .eight.columns
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;nine columns&quot;&gt;
    .nine.columns
    &lt;/div&gt;
    &lt;div class=&quot;three columns&quot;&gt;
    .three.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;ten columns&quot;&gt;
    .ten.columns
    &lt;/div&gt;
    &lt;div class=&quot;two columns&quot;&gt;
    .two.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eleven columns&quot;&gt;
    .eleven.columns
    &lt;/div&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;twelve columns&quot;&gt;
    .twelve.columns
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<p><strong>Note:</strong> In order to work around browsers' different rounding behaviours, Foundation will float the last column in a row to the right so the edge aligns. If your row doesn't have a count that adds up to 12 columns, you can tag the last column with <code>class="end"</code> in order to override that behaviour.</p>
<p>This won't work by default in IE8 since it doesn't support <code>:after</code> but you can simply add a new class to override this if you run into this problem.</p>

<div class="row display">
    <div class="four columns">
        .four.columns
    </div>
    <div class="four columns">
        .four.columns
    </div>
</div>
<div class="row display">
    <div class="four columns">
        .four.columns
    </div>
    <div class="four columns end">
        .four.columns.end
    </div>
</div>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="nesting"></a>
        <h3>Nesting Support</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#nestingBasics">Example</a></dd>
            <dd><a href="#nestingCode">Code</a></dd>
        </dl>
    </div>
</div>

<ul class="tabs-content">
    <li class="active" id="nestingBasicsTab">
        <p>The grid allows for nesting down as far as you'd like, though at a certain point it will get absurd. You can use this nesting to create quite complex layouts, as well as some other tricks like form layouts or visual elements.</p>
        <div class="row display">
            <div class="twelve columns">
                .twelve
                <div class="row">
                    <div class="four columns">.four</div>
                    <div class="four columns">
                        .four
                        <div class="row">
                            <div class="four columns">.four</div>
                            <div class="four columns">.four</div>
                            <div class="four columns">.four</div>
                        </div>
                    </div>
                    <div class="four columns">.four</div>
                </div>
            </div>
        </div>
    </li>
    <li id="nestingCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;twelve columns&quot;&gt;
    .twelve
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;.four&lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
    .four
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;.four&lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;.four&lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;.four&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;.four&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="offsets"></a>
        <h3>Offsets</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#offsetsEx">Example</a></dd>
            <dd><a href="#offsetsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Offsets allow you to create additional space between columns in a row. The offsets run from offset-by-one all the way up to offset-by-eleven. Like the rest of the grid, they're nestable.</p>

<ul class="tabs-content">
    <li class="active" id="offsetsExTab">
        <div class="row display">
            <div class="one columns">
                .one
            </div>
            <div class="eleven columns">
                .eleven.columns
            </div>
        </div>
        <div class="row display">
            <div class="one columns">
                .one
            </div>
            <div class="ten columns offset-by-one">
                .ten.columns.offset-by-one
            </div>
        </div>
        <div class="row display">
            <div class="one columns">
                .one
            </div>
            <div class="nine columns offset-by-two">
                .nine.columns.offset-by-two
            </div>
        </div>
        <div class="row display">
            <div class="one columns">
                .one
            </div>
            <div class="eight columns offset-by-three">
                .eight.columns.offset-by-three
            </div>
        </div>
        <div class="row display">
            <div class="seven columns offset-by-five">
                .seven.columns.offset-by-five
            </div>
        </div>
        <div class="row display">
            <div class="six columns offset-by-six">
                .six.columns.offset-by-six
            </div>
        </div>
        <div class="row display">
            <div class="five columns offset-by-seven">
                .five.columns.offset-by-seven
            </div>
        </div>
        <div class="row display">
            <div class="four columns offset-by-eight">
                .four.columns.offset-by-eight
            </div>
        </div>
    </li>
    <li id="offsetsCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;div class=&quot;eleven columns&quot;&gt;
    .eleven.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;div class=&quot;ten columns offset-by-one&quot;&gt;
    .ten.columns.offset-by-one
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;div class=&quot;nine columns offset-by-two&quot;&gt;
    .nine.columns.offset-by-two
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns&quot;&gt;
    .one
    &lt;/div&gt;
    &lt;div class=&quot;eight columns offset-by-three&quot;&gt;
    .eight.columns.offset-by-three
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;seven columns offset-by-five&quot;&gt;
    .seven.columns.offset-by-five
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns offset-by-six&quot;&gt;
    .six.columns.offset-by-six
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;five columns offset-by-seven&quot;&gt;
    .five.columns.offset-by-seven
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns offset-by-eight&quot;&gt;
    .four.columns.offset-by-eight
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="centered"></a>
        <h3>Centered Columns</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#centerEx">Example</a></dd>
            <dd><a href="#centerCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Centered columns are placed in the middle of the row. This does not center their content, but centers the grid element itself. This is a convenient way to make sure a block is centered, even if you change the number of columns it contains. Note: There cannot be any other column blocks in the row for this to work.</p>

<ul class="tabs-content">
    <li class="active" id="centerExTab">
        <div class="row display">
            <div class="one columns centered">
                .one.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="two columns centered">
                .two.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="three columns centered">
                .three.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="four columns centered">
                .four.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="five columns centered">
                .five.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="six columns centered">
                .six.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="seven columns centered">
                .seven.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="eight columns centered">
                .eight.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="nine columns centered">
                .nine.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="ten columns centered">
                .ten.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="eleven columns centered">
                .eleven.columns.centered
            </div>
        </div>
        <div class="row display">
            <div class="twelve columns centered">
                .twelve.columns.centered
            </div>
        </div>
    </li>
    <li id="centerCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;one columns centered&quot;&gt;
    .one.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two columns centered&quot;&gt;
    .two.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;three columns centered&quot;&gt;
    .three.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns centered&quot;&gt;
    .four.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;five columns centered&quot;&gt;
    .five.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns centered&quot;&gt;
    .six.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;seven columns centered&quot;&gt;
    .seven.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eight columns centered&quot;&gt;
    .eight.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;nine columns centered&quot;&gt;
    .nine.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;ten columns centered&quot;&gt;
    .ten.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eleven columns centered&quot;&gt;
    .eleven.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;twelve columns centered&quot;&gt;
    .twelve.columns.centered
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="ordering"></a>
        <h3>Source Ordering</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#sourceDetails">Example</a></dd>
            <dd><a href="#sourceCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Sometimes within the grid you want the order of your markup to not necessarily be the same as the order items are flowed into the grid. Using our source ordering classes, <code>.push-#/pull-#</code>, you can shift columns around on desktops and tablets. On phones, the grid will still be linearized into the order of the markup.</p>
<p>The syntax supports push and pull for two to ten columns, and is added directly to the columns themselves.</p>

<ul class="tabs-content">
    <li class="active" id="sourceDetailsTab">
        <div class="row display">
            <div class="two columns push-ten">
                .two.columns
            </div>
            <div class="ten columns pull-two">
                .ten.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="three columns push-nine">
                .three.columns
            </div>
            <div class="nine columns pull-three">
                .nine.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="four columns push-eight">
                .four.columns
            </div>
            <div class="eight columns pull-four">
                .eight.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="five columns push-seven">
                .five.columns
            </div>
            <div class="seven columns pull-five">
                .seven.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="six columns push-six">
                .six.columns
            </div>
            <div class="six columns pull-six">
                .six.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="seven columns push-five">
                .seven.columns
            </div>
            <div class="five columns pull-seven">
                .five.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="eight columns push-four">
                .eight.columns
            </div>
            <div class="four columns pull-eight">
                .four.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="nine columns push-three">
                .nine.columns
            </div>
            <div class="three columns pull-nine">
                .three.columns (last)
            </div>
        </div>
        <div class="row display">
            <div class="ten columns push-two">
                .ten.columns
            </div>
            <div class="two columns pull-ten">
                .two (last)
            </div>
        </div>
    </li>
    <li id="sourceCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two columns push-ten&quot;&gt;
    .two.columns
    &lt;/div&gt;
    &lt;div class=&quot;ten columns pull-two&quot;&gt;
    .ten.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;three columns push-nine&quot;&gt;
    .three.columns
    &lt;/div&gt;
    &lt;div class=&quot;nine columns pull-three&quot;&gt;
    .nine.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns push-eight&quot;&gt;
    .four.columns
    &lt;/div&gt;
    &lt;div class=&quot;eight columns pull-four&quot;&gt;
    .eight.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;five columns push-seven&quot;&gt;
    .five.columns
    &lt;/div&gt;
    &lt;div class=&quot;seven columns pull-five&quot;&gt;
    .seven.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns push-six&quot;&gt;
    .six.columns
    &lt;/div&gt;
    &lt;div class=&quot;six columns pull-six&quot;&gt;
    .six.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;seven columns push-five&quot;&gt;
    .seven.columns
    &lt;/div&gt;
    &lt;div class=&quot;five columns pull-seven&quot;&gt;
    .five.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;eight columns push-four&quot;&gt;
    .eight.columns
    &lt;/div&gt;
    &lt;div class=&quot;four columns pull-eight&quot;&gt;
    .four.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;nine columns push-three&quot;&gt;
    .nine.columns
    &lt;/div&gt;
    &lt;div class=&quot;three columns pull-nine&quot;&gt;
    .three.columns (last)
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;ten columns push-two&quot;&gt;
    .ten.columns
    &lt;/div&gt;
    &lt;div class=&quot;two columns pull-ten&quot;&gt;
    .two (last)
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="mobile-grid"></a>
        <h3>Mobile Grid</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#mobileEx">Example</a></dd>
            <dd><a href="#mobileCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>The grid has two modes of adapting for small displays like phones. The first requires no work at all &mdash; the grid will linearize on a small device so your columns stack vertically. This is useful to quickly adapt a desktop layout to a simple scrolling mobile layout. When you're creating your layout you can optionally attach classes that take your existing grid elements and attach them to a four column phone grid.</p>

<ul class="tabs-content">
    <li class="active" id="mobileExTab">
        <div class="row display">
            <div class="three mobile-one columns">
                .three.mobile-one.columns
            </div>
            <div class="nine mobile-three columns">
                .nine.mobile-three.columns
            </div>
        </div>
        <div class="row display">
            <div class="six mobile-two columns">
                .six.mobile-two.columns
            </div>
            <div class="six mobile-two columns">
                .six.mobile-two.columns
            </div>
        </div>
        <div class="row display">
            <div class="nine mobile-three columns">
                .nine.mobile-three.columns
            </div>
            <div class="three mobile-one columns">
                .three.mobile-one.columns
            </div>
        </div>
    </li>
    <li id="mobileCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;three mobile-one columns&quot;&gt;
    .three.mobile-one.columns
    &lt;/div&gt;
    &lt;div class=&quot;nine mobile-three columns&quot;&gt;
    .nine.mobile-three.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six mobile-two columns&quot;&gt;
    .six.mobile-two.columns
    &lt;/div&gt;
    &lt;div class=&quot;six mobile-two columns&quot;&gt;
    .six.mobile-two.columns
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;nine mobile-three columns&quot;&gt;
    .nine.mobile-three.columns
    &lt;/div&gt;
    &lt;div class=&quot;three mobile-one columns&quot;&gt;
    .three.mobile-one.columns
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<h4>Mobile Source Ordering</h4>
<p>You can use the same push and pull style classes on the 4-column phone grid. The syntax includes <code>.pull-one-mobile</code>, <code>.pull-two-mobile</code>, <code>.pull-three-mobile</code>, as well as <code>.push-one-mobile</code>, <code>.push-two-mobile</code>, <code>.push-three-mobile</code>.</p>

<hr>

<a name="block-grids"></a>
<h3>Block Grids</h3>
<p>Block grids are made from a <code>ul.block-grid</code> with <code>#-up</code> styles chained to it. You control how many you have in your Scss setting file or the customizer. These are ideal for blocked-in content generated by an application, as they do not require rows or even numbers of elements to display correctly.</p>
<p>By default, these blocks will stay in their N-up configuration on mobile devices, but you can add a class of "mobile" to have them reshuffle on smartphones into one element per line, just like the grid. If you want to use a different layout for mobile, say <code>.five-up</code> for large screens and <code>.three-up</code> for small devices, you can simply use classes like, <code>.mobile-three-up</code>.</p>

<div class="row tabs">
    <div class="eight columns">
        <h4>Two-up</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#twoBlockEx">Example</a></dd>
            <dd><a href="#twoBlockCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="twoBlockExTab">
        <ul class="display block-grid two-up">
            <li>Two-up element</li>
            <li>Two-up element</li>
            <li>Two-up element</li>
            <li>Two-up element</li>
            <li>Two-up element</li>
        </ul>
    </li>
    <li id="twoBlockCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;block-grid two-up&quot;&gt;
    &lt;li&gt;Two-up element&lt;/li&gt;
    &lt;li&gt;Two-up element&lt;/li&gt;
    &lt;li&gt;Two-up element&lt;/li&gt;
    &lt;li&gt;Two-up element&lt;/li&gt;
    &lt;li&gt;Two-up element&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<div class="row tabs">
    <div class="eight columns">
        <h4>Three-up / Five-up Mobile</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#threeBlockEx">Example</a></dd>
            <dd><a href="#threeBlockCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="threeBlockExTab">
        <ul class="display block-grid three-up mobile-five-up">
            <li>Three-up element</li>
            <li>Three-up element</li>
            <li>Three-up element</li>
            <li>Three-up element</li>
            <li>Three-up element</li>
        </ul>
    </li>
    <li id="threeBlockCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;block-grid three-up mobile-five-up&quot;&gt;
    &lt;li&gt;Three-up element&lt;/li&gt;
    &lt;li&gt;Three-up element&lt;/li&gt;
    &lt;li&gt;Three-up element&lt;/li&gt;
    &lt;li&gt;Three-up element&lt;/li&gt;
    &lt;li&gt;Three-up element&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<div class="row tabs">
    <div class="eight columns">
        <h4>Four-up / Stacked Mobileup</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#fourBlockEx">Example</a></dd>
            <dd><a href="#fourBlockCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="fourBlockExTab">
        <ul class="display block-grid four-up mobile">
            <li>Four-up element</li>
            <li>Four-up element</li>
            <li>Four-up element</li>
            <li>Four-up element</li>
            <li>Four-up element</li>
            <li>Four-up element</li>
        </ul>
    </li>
    <li id="fourBlockCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;block-grid four-up mobile&quot;&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;li&gt;Four-up element&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<div class="row tabs">
    <div class="eight columns">
        <h4>Six-up / Two-up Mobile</h4>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#sixBlockEx">Example</a></dd>
            <dd><a href="#sixBlockCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="sixBlockExTab">
        <ul class="display block-grid six-up mobile-two-up">
            <li>Six-up element</li>
            <li>Six-up element</li>
            <li>Six-up element</li>
            <li>Six-up element</li>
            <li>Six-up element</li>
            <li>Six-up element</li>
        </ul>
    </li>
    <li id="sixBlockCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;block-grid six-up mobile-two-up&quot;&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;li&gt;Six-up element&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<h5>Clearing issues with IE8</h5>
<p>Sometimes there are clearing issues in IE8. If you are seeing these issues, simply uncomment the Block Grid section within your foundation app.js file. If you don't have those line in your app.js file, copy them below:</p>
<pre><code data-language='javascript'>
    $('.block-grid.two-up&gt;li:nth-child(2n+1)').css({clear: 'both'});
    $('.block-grid.three-up&gt;li:nth-child(3n+1)').css({clear: 'both'});
    $('.block-grid.four-up&gt;li:nth-child(4n+1)').css({clear: 'both'});
    $('.block-grid.five-up&gt;li:nth-child(5n+1)').css({clear: 'both'});
</code></pre>          <hr>

<h5>Don't want mobile?</h5>
<p>You can either not include it in your custom imports for your Scss project or uncheck it in the customizer. The trick to making this work is to set the <code>max-width</code> of your <code>.row</code> so that it doesn't scale.</p>

<hr>

<div class="panel">
    <h3>One breakpoint to rule them all</h3>
    <h5 class="subheader">We've designed the Foundation to work around our grid that has a single breakpoint for small devices below 768px.</h5>
    <a class="button" href="media-queries.php">Learn about our media queries &raquo;</a>
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
        <!--<script type="text/javascript" src="http://www.zurb.com/jobs/widgets/jobs.js?limit=3&variation=foundation-sidebar"></script>
        <a id="via" href="http://zurbjobs.com">via&nbsp;<span class="jobs-link">ZURBjobs</span></a>-->
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
                <li class="active"><a href="grid.php">The Grid</a></li>
                <li ><a href="media-queries.php">Media Queries</a></li>
                <li ><a href="typography.php">Typography</a></li>
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