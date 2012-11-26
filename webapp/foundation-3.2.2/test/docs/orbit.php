

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

    <title>Foundation Documentation: Orbit</title>

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
<h2>Orbit</h2>
<h5 class="subheader">Orbit is an easy to use, powerful image slider built to be responsive, just like Foundation.</h5>

<div id="featured">
    <img src="../images/orbit-demo/demo1.jpg" />
    <img src="../images/orbit-demo/demo2.jpg" />
    <img src="../images/orbit-demo/demo3.jpg" />
</div>

<p>First, ensure you're including the Orbit JS and CSS. If you're using the SCSS version of Foundation, these will be part of your environment already, and if you download Foundation as simple CSS the two files will be part of <strong>foundation.js</strong> and <strong>foundation.css</strong>, respectively. Also ensure you're including jQuery, also provided as part of any Foundation distribution. <strong>If you are using the Scss version, make sure that you uncomment <code>relative asset = true</code> in your config.rb file.</strong></p>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="orbit-setup"></a>
        <h3>Setting Up Your Slider</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#setupEx">Explanation</a></dd>
            <dd><a href="#setupCode">Code</a></dd>
        </dl>
    </div>
</div>
<ul class="tabs-content">
    <li class="active" id="setupExTab">
        <p>Your Orbit slider is simply a <code>div</code> with a unique ID. For our examples we'll use <code>&lt;div id="featured"&gt;</code>, an example of which you can see above. The markup looks like this:</p>

        <h5>Activating Orbit</h5>
        <p>With your <code>#featured</code> element in place, we just need to call Orbit. <strong>Remember:</strong> your call to Orbit needs to come <em>after</em> you've included jQuery and foundation.js. By default, those are at the end of your document, so this code snippet should come at the very end. That's all you need to trigger Orbit on a series of images. It includes the timer element, and the left and right hand paddles.</p>
    </li>
    <li id="setupCodeTab">
<pre><code data-language='html'>
    &lt;div id=&quot;featured&quot;&gt;
    &lt;img src=&quot;../images/orbit-demo/demo1.jpg&quot; /&gt;
    &lt;img src=&quot;../images/orbit-demo/demo2.jpg&quot; /&gt;
    &lt;img src=&quot;../images/orbit-demo/demo3.jpg&quot; /&gt;
    &lt;/div&gt;
</code></pre>
<pre><code data-language='javascript'>
    &lt;script type=&quot;text/javascript&quot;&gt;
    $(window).load(function() {
    $(&quot;#featured&quot;).orbit();
    });
    &lt;/script&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="orbit-options"></a>
        <h3>Options</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#optEx">List</a></dd>
            <dd><a href="#optCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Orbit has a number of options available, which you can specify when you call <code>.orbit()</code>. In the example above, we kept all of the default values, but you can optionally use any of these options:</p>
<ul class="tabs-content">
    <li class="active" id="optExTab">
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
                    horizontal-slide<br>
                    vertical-slide<br>
                    horizontal-push
                </td>
                <td>The animation used for transitions</td>
            </tr>
            <tr>
                <td>animationSpeed</td>
                <td>800</td>
                <td>How fast animations happen</td>
            </tr>
            <tr>
                <td>timer</td>
                <td>true<br>
                    false
                </td>
                <td>Do you want a timer or not?</td>
            </tr>
            <tr>
                <td>resetTimerOnClick</td>
                <td>true<br>
                    false
                </td>
                <td>Reset timer or pause on click</td>
            </tr>
            <tr>
                <td>advanceSpeed</td>
                <td>4000</td>
                <td>If timer is enables, time between transitions</td>
            </tr>
            <tr>
                <td>pauseOnHover</td>
                <td>true<br>
                    false
                </td>
                <td>Do you want hover to pause slider?</td>
            </tr>
            <tr>
                <td>startClockOnMouseOut</td>
                <td>true<br>
                    false
                </td>
                <td>If clock should start on MouseOut</td>
            </tr>
            <tr>
                <td>startClockOnMouseOutAfter</td>
                <td>1000</td>
                <td>How long after MouseOut should timer start again?</td>
            </tr>
            <tr>
                <td>directionalNav</td>
                <td>true<br>
                    false
                </td>
                <td>Do you want directional nav?</td>
            </tr>
            <tr>
                <td>captions</td>
                <td>true<br>
                    false
                </td>
                <td>Do you want captions?</td>
            </tr>
            <tr>
                <td>captionAnimation</td>
                <td>fade<br>
                    slideOpen<br>
                    none
                </td>
                <td>Animation style for caption entrance</td>
            </tr>
            <tr>
                <td>captionAnimationSpeed</td>
                <td>800</td>
                <td>How quickly should captions animate?</td>
            </tr>
            <tr>
                <td>bullets</td>
                <td>true<br>
                    false
                </td>
                <td>Do you want bullet navigation?</td>
            </tr>
            <tr>
                <td>bulletThumbs</td>
                <td>true<br>
                    false</td>
                <td>Do you want thumbnails bullets?</td>
            </tr>
            <tr>
                <td>bulletThumbLocation</td>
                <td>''</td>
                <td>Location of where thumbs will be from Orbit file</td>
            </tr>
            <tr>
                <td>afterSlideChange</td>
                <td>function(){},</td>
                <td>Empty Function for you to use after slide change</td>
            </tr>
            <tr>
                <td>fluid</td>
                <td>true<br>
                    false<br>
                    Aspect Ratio
                </td>
                <td>Control responsiveness of Orbit slides</td>
            </tr>
            </tbody>
        </table>
    </li>
    <li id="optCodeTab">
<pre><code data-language='javascript'>
    $('#featured').orbit({
    animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
    animationSpeed: 800,                // how fast animtions are
    timer: true,                        // true or false to have the timer
    resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
    advanceSpeed: 4000,                 // if timer is enabled, time between transitions
    pauseOnHover: false,                // if you hover pauses the slider
    startClockOnMouseOut: false,        // if clock should start on MouseOut
    startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
    directionalNav: true,               // manual advancing directional navs
    captions: true,                     // do you want captions?
    captionAnimation: 'fade',           // fade, slideOpen, none
    captionAnimationSpeed: 800,         // if so how quickly should they animate in
    bullets: false,                     // true or false to activate the bullet navigation
    bulletThumbs: false,                // thumbnails for the bullets
    bulletThumbLocation: '',            // location from this file where thumbs will be
    afterSlideChange: function(){},     // empty function
    fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
    });
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="content-sliders"></a>
        <h3>Content Sliders</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#contEx">Example</a></dd>
            <dd><a href="#contCode">Code</a></dd>
        </dl>
    </div>
</div>
<h5 class="subheader">While Orbit was created as a simple image slider, it also supports <code>div</code> elements with arbitrary content. You could have a slider of text blocks, actions, or really anything.</h5>
<p><strong>Remember:</strong> for a content slider to work without any images, you need to specify an aspect ratio when you call .orbit(). As shown in the options above, the option needed is <code>fluid: 16x9</code> or another ratio.</p>
<p><strong>Note:</strong> We put some simple styles on our content slider, notably a background and padding on the <code>div</code> elements. Orbit stacks your slides, so transparent slides will will be visible on top of each other.</p>
<ul class="tabs-content">
    <li class="active" id="contExTab">
        <div id="featuredContent">
            <div>
                <h4>This is a content slider.</h4>
                <p>Each slide holds arbitrary content, like text or actions.</p>
            </div>
            <div>
                <h4>We can include text and buttons, like this!</h4>
                <p>We take no responsibility for what happens if you click this button.</p>
                <p><a href="http://www.youtube.com/watch?v=dQw4w9WgXcQ" class="button" target="_blank">Rock My World!</a></p>
            </div>
            <div>
                <h4>What? You didn't click it?</h4>
                <p>We'll give you the benefit of the doubt. Maybe you did, and now you're back!</p>
            </div>
        </div>

    </li>
    <li id="contCodeTab">
<pre><code data-language='html'>
    &lt;div id=&quot;featuredContent&quot;&gt;
    &lt;div&gt;
    &lt;h4&gt;This is a content slider.&lt;/h4&gt;
    &lt;p&gt;Each slide holds arbitrary content, like text or actions.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div&gt;
    &lt;h4&gt;We can include text and buttons, like this!&lt;/h4&gt;
    &lt;p&gt;We take no responsibility for what happens if you click this button.&lt;/p&gt;
    &lt;p&gt;&lt;a href=&quot;http://www.youtube.com/watch?v=dQw4w9WgXcQ&quot; class=&quot;button&quot; target=&quot;_blank&quot;&gt;Rock My World!&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
    &lt;div&gt;
    &lt;h4&gt;What? You did not click it?&lt;/h4&gt;
    &lt;p&gt;We give you the benefit of the doubt. Maybe you did, and now you are back!&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre><pre><code data-language='javascript'>
        &lt;script type='text/javascript'&gt;
        $(window).load(function() {
        $('#featuredContent').orbit({ fluid: '16x6' });
        });
        &lt;/script&gt;
    </code></pre>            </li>
</ul>

<hr>

<a name="bullets"></a>
<h4>Custom Bullets</h4>
<p>By setting <code>bulletThumbs</code> to true and a path for <code>bulletThumbLocation</code>, orbit will pull in custom bullets for the slider and apply them to a generated <code>ul.orbit-bullets</code> element which you can customize with CSS.</p>
<pre><code data-language='html'>
    &lt;ul class=&quot;orbit-bullets&quot;&gt;
    &lt;li class=&quot;has-thumb active&quot; style=&quot;background-image: url(/path/to/bullets/bullet-one.jpg); background-position: initial initial; background-repeat: no-repeat no-repeat; &quot;&gt;1&lt;/li&gt;
    &lt;li class=&quot;has-thumb&quot; style=&quot;background-image: url(/path/to/bullets/bullet-two.jpg); background-position: initial initial; background-repeat: no-repeat no-repeat; &quot;&gt;2&lt;/li&gt;
    &lt;li class=&quot;has-thumb&quot; style=&quot;background-image: url(/path/to/bullets/bullet-three.jpg); background-position: initial initial; background-repeat: no-repeat no-repeat; &quot;&gt;3&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>
<p>Each <code>li</code> in the list is associated with an index of a slide in your slider. The filenames for the images are specified on the slider element itself with a <code>data-thumb</code> attribute.</p>
<pre><code data-language='html'>
    &lt;div id=&quot;featuredBullets&quot;&gt;
    &lt;img src=&quot;slide-1.jpg&quot; data-thumb=&quot;bullet-one.jpg&quot; /&gt;
    &lt;img src=&quot;slide-2.jpg&quot; data-thumb=&quot;bullet-two.jpg&quot; /&gt;
    &lt;img src=&quot;slide-3.jpg&quot; data-thumb=&quot;bullet-three.jpg&quot; /&gt;
    &lt;/div&gt;
</code></pre>
<hr>

<a name="orbit-captions"></a>
<h3>Adding Captions</h3>
<p>Another awesome feature in Orbit is the ability to add captions for each slide. The process is simple, just add <code>data-caption="#captionId"</code> to the content <code>div</code> or <code>img</code>. Then, below your <code>div id="featured"</code>, add <code>span class="orbit-caption" id="captionId"</code> that will hold your caption content. You can add as many as slides you have available, just make sure the data-caption and the id of the span are the same and that you add # to the data-caption like in the code below.</p>
<pre><code data-language='html'>
    &lt;div id=&quot;featuredContent&quot;&gt;
    &lt;div data-caption=&quot;#captionOne&quot;&gt;
    &lt;h4&gt;This is a content slider.&lt;/h4&gt;
    &lt;p&gt;Each slide holds arbitrary content, like text or actions.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-caption=&quot;#captionTwo&quot;&gt;
    &lt;h4&gt;We can include text and buttons, like this!&lt;/h4&gt;
    &lt;p&gt;We take no responsibility for what happens if you click this button.&lt;/p&gt;
    &lt;p&gt;&lt;a href=&quot;http://www.youtube.com/watch?v=dQw4w9WgXcQ&quot; class=&quot;button&quot; target=&quot;_blank&quot;&gt;Rock My World!&lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-caption=&quot;#captionThree&quot;&gt;
    &lt;h4&gt;What? You did not click it?&lt;/h4&gt;
    &lt;p&gt;We gave you the benefit of the doubt. Maybe you did, and now you are back!&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;span class=&quot;orbit-caption&quot; id=&quot;captionOne&quot;&gt;Here is a caption...&lt;/span&gt;
    &lt;span class=&quot;orbit-caption&quot; id=&quot;captionTwo&quot;&gt;Here is a caption2...&lt;/span&gt;
    &lt;span class=&quot;orbit-caption&quot; id=&quot;captionThree&quot;&gt;Here is a caption3...&lt;/span&gt;

</code></pre>
<hr>

<a name="directional-nav"></a>
<h3>Directional Navigation on Hover</h3>
<p>Want to have your Orbit navigation appear on hover? We've got you covered! It isn't part of the JS options or anything like that, just simple CSS. Below is the Scss/CSS needed for the effect.</p>
<pre><code data-language='css'>
    /* Scss */
    .orbit-wrapper {
    .slider-nav span { @include opacity(0); @include single-transition(opacity, 400ms); }
    &amp;:hover .slider-nav span { @include opacity(1); }
    }

    /* CSS */
    .orbit-wrapper .slider-nav span { filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0; -webkit-transition: opacity 400ms; -moz-transition: opacity 400ms; -o-transition: opacity 400ms; transition: opacity 400ms; }
    .orbit-wrapper:hover .slider-nav span { filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1; }
</code></pre>
<hr>

<a name="loading"></a>
<h3>Graceful Orbit Loading State</h3>
<p>Since Orbit executes through Javascript, before it kicks in you might see your images or content all stacked on top of each other. To avoid this you can make use of a property of Orbit: it adds a class of <code>.orbit</code> once it executes, meaning you can target your <code>div#featured</code> with specific styles that will be overriden when the class is added.</p>
<p>For example, if we want Orbit to load a simple light grey screen with a spinner, the CSS would look like this:</p>
<pre><code data-language='css'>
    #featured { background: url(spinner.gif) center center #f4f4f4; height: 300px; }
    #featured img { display: none; }

    #featured.orbit { background: none; }
    #featured.orbit img { display: block; }
</code></pre>
<p>We hide the images by default, and give the <code>#featured</code> block a fixed height and background with a spinner. Once Orbit loads the images are displayed and we remove that background.</p>

<hr>

<div class="panel">
    <h3>Reveal Your Magic</h3>
    <h5 class="subheader">Our handy jQuery modal plugin makes it really easy to let content stay off the page until you need it.</h5>
    <a class="button" href="reveal.php">Learn about Reveal &raquo;</a>
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
                <li class="active"><a href="orbit.php">Orbit</a></li>
                <li ><a href="reveal.php">Reveal</a></li>
                <li ><a href="magellan.php">Magellan</a></li>
                <li ><a href="clearing.php">Clearing</a></li>
                <li ><a href="joyride.php">Joyride</a></li>
            </ul>
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
<script type="text/javascript">
    $(window).load(function() {
        $('#featured').orbit();
        $('#featuredContent').orbit({ fluid: '2x1' });
        $('#featuredBullets').orbit({
            animation: 'horizontal-slide',                  // fade, horizontal-slide, vertical-slide, horizontal-push
            animationSpeed: 800,                // how fast animtions are
            timer: true,       // true or false to have the timer
            advanceSpeed: 4000,     // if timer is enabled, time between transitions
            pauseOnHover: false,      // if you hover pauses the slider
            startClockOnMouseOut: false,    // if clock should start on MouseOut
            startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
            directionalNav: false,      // manual advancing directional navs
            captions: true,       // do you want captions?
            captionAnimation: 'fade',     // fade, slideOpen, none
            captionAnimationSpeed: 800,   // if so how quickly should they animate in
            bullets: true,       // true or false to activate the bullet navigation
            bulletThumbs: true,    // thumbnails for the bullets
            bulletThumbLocation: '../images/orbit-demo/bullets/',    // location from this file where thumbs will be
            afterSlideChange: $.noop    // empty function
        });
    });
</script>
