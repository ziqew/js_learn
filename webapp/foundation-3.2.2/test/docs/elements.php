

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

    <title>Foundation Documentation: UI Elements</title>

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
<h2>Elements</h2>
<h5 class="subheader">Prototyping and production requires more than just navigation or tabs or typography. We've created a number of additional elements to help rapidly prototype, and like everything else they are production-ready and easy to restyle or override.</h5>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="alerts"></a>
        <h3>Alerts</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#alertsEx">Example</a></dd>
            <dd><a href="#alertsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Alerts are a handy element you can drop into a form or inline on a page to communicate success, warnings, failure or just information. The syntax is extremely simple and like everything else in Foundation, easy to customize.</p>
<ul class="tabs-content">
    <li class="active" id="alertsExTab">
        <div class="alert-box">
            This is a standard alert (div.alert-box).
            <a href="" class="close">&times;</a>
        </div>

        <div class="alert-box success">
            This is a success alert (div.alert-box.success).
            <a href="" class="close">&times;</a>
        </div>

        <div class="alert-box alert">
            This is an alert (div.alert-box.alert).
            <a href="" class="close">&times;</a>
        </div>

        <div class="alert-box secondary">
            This is a secondary alert (div.alert-box.secondary).
            <a href="" class="close">&times;</a>
        </div>
    </li>
    <li id="alertsCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;alert-box&quot;&gt;
    This is a standard alert (div.alert-box).
    &lt;a href=&quot;&quot; class=&quot;close&quot;&gt;&amp;times;&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class=&quot;alert-box success&quot;&gt;
    This is a success alert (div.alert-box.success).
    &lt;a href=&quot;&quot; class=&quot;close&quot;&gt;&amp;times;&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class=&quot;alert-box alert&quot;&gt;
    This is an alert (div.alert-box.alert).
    &lt;a href=&quot;&quot; class=&quot;close&quot;&gt;&amp;times;&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class=&quot;alert-box secondary&quot;&gt;
    This is a secondary alert (div.alert-box.secondary).
    &lt;a href=&quot;&quot; class=&quot;close&quot;&gt;&amp;times;&lt;/a&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="labels"></a>
        <h3>Labels</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#labelsEx">Example</a></dd>
            <dd><a href="#labelsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Labels are useful inline styles that can be dropped into body copy to call out certain sections or to attach metadata. Examples might be noting when something was updated or that something is new. The syntax is simple, just a <code>span</code> element with a class of .label. The border styling mirrors that of the Foundation buttons.</p>
<ul class="tabs-content">
    <li class="active" id="labelsExTab">
        <div class="row">
            <div class="three columns phone-two">
                <h5>Types</h5>
                <span class="label">Normal Label</span><br>
                <span class="secondary label">Secondary Label</span><br>
                <span class="success label">Success Label</span><br>
                <span class="alert label">Alert Label</span>
            </div>
            <div class="three columns end phone-two">
                <h5>Styles</h5>
                <span class="label">Regular Label</span><br>
                <span class="radius label">Radius Label</span><br>
                <span class="round label">Round Label</span>
            </div>
        </div>
        <br>
        <p><span class="radius label">Example Label</span> This label could read a date for an update or it could include an author name or anything really. Inline labels are pretty handy when you need to draw attention or visually separate a short piece of content.</p>
    </li>
    <li id="labelsCodeTab">
<pre><code data-language='html'>
    &lt;!-- Types --&gt;
    &lt;span class=&quot;label&quot;&gt;Normal Label&lt;/span&gt;
    &lt;span class=&quot;secondary label&quot;&gt;Secondary Label&lt;/span&gt;
    &lt;span class=&quot;success label&quot;&gt;Success Label&lt;/span&gt;
    &lt;span class=&quot;alert label&quot;&gt;Alert Label&lt;/span&gt;

    &lt;!-- Styles --&gt;
    &lt;span class=&quot;label&quot;&gt;Regular Label&lt;/span&gt;
    &lt;span class=&quot;radius label&quot;&gt;Radius Label&lt;/span&gt;
    &lt;span class=&quot;round label&quot;&gt;Round Label&lt;/span&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="tooltips"></a>
        <h3>Tooltips</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#tipsEx">Example</a></dd>
            <dd><a href="#tipsCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Tooltips are a quick way to provide extended information on a term or action on a page. They work cross browser and cross platform and are easily added to a page by including the jquery.tooltip.js plugin. You can apply the <strong>has-tip</strong> class to any element.</p>
<p>By default, the tooltip takes the width of the element that it is applied to, but you can override this behavior by applying a <strong>data-width</strong> attribute to the target element. The tooltip takes on the content of the targets <strong>title</strong> attribute.</p>
<ul class="tabs-content">
    <li class="active" id="tipsExTab">
        <h5>Example in text below</h5>
        <p>The tooltips can be positioned on the <span class="has-tip" data-width="210" title="I'm on bottom and the default position.">"tip-bottom"</span>, which is the default position, <span class="has-tip tip-top noradius" data-width="210" title="I'm on the top and I'm not rounded!">"tip-top" (hehe)</span>, <span class="has-tip tip-left" data-width="90" title="I'm on the left!">"tip-left"</span>, or <span class="has-tip tip-right" data-width="120" title="I'm on the right!">"tip-right"</span> of the target element. On a small device, the tooltips are full width and bottom aligned.</p>
    </li>
    <li id="tipsCodeTab">
<pre><code data-language='html'>
    &lt;span class=&quot;has-tip&quot; data-width=&quot;210&quot; title=&quot;Bottom and the default position.&quot;&gt;&quot;tip-bottom&quot;&lt;/span&gt;
    &lt;span class=&quot;has-tip tip-top noradius&quot; data-width=&quot;210&quot; title=&quot;Top and not rounded!&quot;&gt;&quot;tip-top&quot;&lt;/span&gt;
    &lt;span class=&quot;has-tip tip-left&quot; data-width=&quot;90&quot; title=&quot;left!&quot;&gt;&quot;tip-left&quot;&lt;/span&gt;
    &lt;span class=&quot;has-tip tip-right&quot; data-width=&quot;90&quot; title=&quot;right!&quot;&gt;&quot;tip-right&quot;&lt;/span&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="accordion"></a>
        <h3>Accordion</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#accEx">Example</a></dd>
            <dd><a href="#accCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Accordions are similar to tabs as a way to selectively show a single panel of content at a time.</p>
<ul class="tabs-content">
    <li class="active" id="accExTab">
        <ul class="accordion">
            <li class="active">
                <div class="title">
                    <h5>Accordion Panel 1</h5>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>
            <li>
                <div class="title">
                    <h5>Accordion Panel 2</h5>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>
            <li>
                <div class="title">
                    <h5>Accordion Panel 3</h5>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>
        </ul>
    </li>
    <li id="accCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;accordion&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;
    &lt;div class=&quot;title&quot;&gt;
    &lt;h5&gt;Accordion Panel 1&lt;/h5&gt;
    &lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;div class=&quot;title&quot;&gt;
    &lt;h5&gt;Accordion Panel 2&lt;/h5&gt;
    &lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;div class=&quot;title&quot;&gt;
    &lt;h5&gt;Accordion Panel 3&lt;/h5&gt;
    &lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="panels"></a>
        <h3>Panels</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#panelEx">Example</a></dd>
            <dd><a href="#panelCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>A panel is a simple, helpful css class that enables you to outline sections of your page easily. This allows you to view your page sections as you add content to them, or add emphasis to a section. There are two styles built in, and they support a class of <code>.radius</code> to round them off.</p>
<ul class="tabs-content">
    <li class="active" id="panelExTab">
        <div class="row">
            <div class="six columns">
                <div class="panel">
                    <h5>This is a regular panel.</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                </div>
            </div>
            <div class="six columns">
                <div class="panel callout radius">
                    <h5>This is a callout panel.</h5>
                    <p>It's a little ostentatious, but useful for important content.</p>
                </div>
            </div>
        </div>
    </li>
    <li id="panelCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
    &lt;h5&gt;This is a regular panel.&lt;/h5&gt;
    &lt;p&gt;It has an easy to override visual style, and is appropriately subdued.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;six columns&quot;&gt;
    &lt;div class=&quot;panel callout radius&quot;&gt;
    &lt;h5&gt;This is a callout panel.&lt;/h5&gt;
    &lt;p&gt;Content...&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="inline-lists"></a>
        <h3>Inline Lists</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#listEx">Example</a></dd>
            <dd><a href="#listCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>When you just need a horizontal list of links, like in a footer, and you want more control than just spaces between them you can use this simple construct.</p>
<ul class="tabs-content">
    <li class="active" id="listExTab">
        <ul class="inline-list">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
            <li><a href="#">Link 5</a></li>
        </ul>
    </li>
    <li id="listCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;inline-list&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="table"></a>
        <h3>Tables</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#tableEx">Example</a></dd>
            <dd><a href="#tableCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Okay, they're not the sexiest things ever, but tables get the job done (for tabular data).</p>
<ul class="tabs-content">
    <li class="active" id="tableExTab">
        <table class="twelve">
            <thead>
            <tr>
                <th>Table Header</th>
                <th>Table Header</th>
                <th>Table Header</th>
                <th>Table Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Content</td>
                <td>This is longer content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>This is longer content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>This is longer content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>This is longer content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            </tbody>
        </table>
    </li>
    <li id="tableCodeTab">
<pre><code data-language='html'>
    &lt;table class=&quot;twelve&quot;&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;th&gt;Table Header&lt;/th&gt;
    &lt;th&gt;Table Header&lt;/th&gt;
    &lt;th&gt;Table Header&lt;/th&gt;
    &lt;th&gt;Table Header&lt;/th&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;This is longer content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;This is longer content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;This is longer content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;This is longer content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;td&gt;Content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;/table&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="progress-bar"></a>
        <h3>Progress Bars</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#progEx">Example</a></dd>
            <dd><a href="#progCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>Add simple progress bars to your page using our simple pattern. We've included built in ways to control the radius, height, padding and border in the Scss settings file. You can use <code>.round</code> or <code>.radius</code> to add some rounded borders. If you want to change the color, use the same classes as we use for the buttons: <code>.primary</code>, <code>.secondary</code>, <code>.alert</code>, <code>.success</code>. If you want to control the width of your progress bar, simply use the grid classes <code>.one</code>, <code>.two</code>, <code>.three</code>, etc. You can control the width of the fill meter by setting the width of the <code>span</code> element.</p>
<ul class="tabs-content">
    <li class="active" id="progExTab">
        <div class="progress six"><span class="meter"></span></div>
        <div class="radius progress success eight"><span class="meter"></span></div>
        <div class="nice round progress alert ten"><span class="meter"></span></div>
        <div class="nice secondary progress"><span class="meter"></span></div>
    </li>
    <li id="progCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;progress six&quot;&gt;&lt;span class=&quot;meter&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;radius progress success eight&quot;&gt;&lt;span class=&quot;meter&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;nice round progress alert ten&quot;&gt;&lt;span class=&quot;meter&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;nice secondary progress&quot;&gt;&lt;span class=&quot;meter&quot;&gt;&lt;/span&gt;&lt;/div&gt;
</code></pre>            </li>
</ul>

<br>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="thumbs"></a>
        <h3>Image Thumbnails</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#thEx">Example</a></dd>
            <dd><a href="#thCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>If you are going to use an image as an anchor, we've got you covered. All you've gotta do is wrap an <code>a.th</code> around your image and viola!</p>
<ul class="tabs-content">
    <li class="active" id="thExTab">
        <div class="row">
            <div class="six mobile-two columns">
                <a href="#" class="th"><img src="http://placehold.it/350x200"></a>
            </div>
            <div class="six mobile-two columns">
                <a href="#" class="th"><img src="http://placehold.it/350x200"></a>
            </div>
        </div>
    </li>
    <li id="thCodeTab">
<pre><code data-language='html'>
    &lt;a href=&quot;#&quot; class=&quot;th&quot;&gt;&lt;img src=&quot;http://placehold.it/350x200&quot;&gt;&lt;/a&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="price-tables"></a>
        <h3>Pricing Tables</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#pricEx">Example</a></dd>
            <dd><a href="#pricCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>If you're making a rockin' marketing site for a subscription-based product you are likely in need of a pricing table. You can create one with Foundation by creating a <code>class="pricing-table"</code>, using the grid to position and size. Inside you can include: <code>class="title"</code>, <code>class="price"</code>, <code>class="desc"</code>, <code>class="bullet-item"</code>, <code>class="cta-button"</code> to create the table, here's an example:</p>
<ul class="tabs-content">
    <li class="active" id="pricExTab">
        <div class="row">
            <div class="six columns">
                <ul class="pricing-table">
                    <li class="title">Standard</li>
                    <li class="price">$99.99</li>
                    <li class="description">Content...</li>
                    <li class="bullet-item">1 Database</li>
                    <li class="bullet-item">5GB Storage</li>
                    <li class="bullet-item">20 Users</li>
                    <li class="cta-button"><a class="button" href="#">Buy it Now &raquo;</a></li>
                </ul>
            </div>
            <div class="six columns">
                <ul class="pricing-table">
                    <li class="title">Standard</li>
                    <li class="price">$99.99</li>
                    <li class="description">Content...</li>
                    <li class="bullet-item">1 Database</li>
                    <li class="bullet-item">5GB Storage</li>
                    <li class="bullet-item">20 Users</li>
                    <li class="cta-button"><a class="button" href="#">Buy it Now &raquo;</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li id="pricCodeTab">
<pre><code data-language='html'>
    &lt;ul class=&quot;pricing-table&quot;&gt;
    &lt;li class=&quot;title&quot;&gt;Standard&lt;/li&gt;
    &lt;li class=&quot;price&quot;&gt;$99.99&lt;/li&gt;
    &lt;li class=&quot;description&quot;&gt;Content...&lt;/li&gt;
    &lt;li class=&quot;bullet-item&quot;&gt;1 Database&lt;/li&gt;
    &lt;li class=&quot;bullet-item&quot;&gt;5GB Storage&lt;/li&gt;
    &lt;li class=&quot;bullet-item&quot;&gt;20 Users&lt;/li&gt;
    &lt;li class=&quot;cta-button&quot;&gt;&lt;a class=&quot;button&quot; href=&quot;#&quot;&gt;Buy it Now &amp;raquo;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="row tabs">
    <div class="eight columns">
        <a name="video"></a>
        <h3>Video</h3>
    </div>
    <div class="four columns tabs">
        <dl class="tabs pill small">
            <dd class="active"><a href="#vidEx">Example</a></dd>
            <dd><a href="#vidCode">Code</a></dd>
        </dl>
    </div>
</div>
<p>If you're embedding video from YouTube, Vimeo, or another site that uses iframe, embed or object elements you can wrap your video in <code>div.flex-video</code> to create an intrinsic ratio that will properly scale your video on any device.</p>
<ul class="tabs-content">
    <li class="active" id="vidExTab">
        <dl class="tabs contained">
            <dd class="active"><a href="#video1">4:3</a></dd>
            <dd><a href="#video2">Widescreen</a></dd>
            <dd><a href="#video3">Vimeo</a></dd>
        </dl>
        <ul class="tabs-content contained">
            <li class="active" id="video1Tab">
                <div class="flex-video">
                    <iframe width="420" height="315" src="http://www.youtube.com/embed/9otNWTHOJi8" frameborder="0" allowfullscreen></iframe>
                </div>
                4:3 is the default size for the .flex-video element, and the assumption for .flex-video for chrome (controls) height is based on YouTube.
            </li>
            <li id="video2Tab">
                <div class="flex-video widescreen">
                    <iframe width="560" height="315" src="http://www.youtube.com/embed/N966cATFWjI" frameborder="0" allowfullscreen></iframe>
                </div>
                By adding a class of .widescreen we change the ratio to 16:9, ideal for more recent video and most popular YouTube or Vimeo embeds.
            </li>
            <li id="video3Tab">
                <div class="flex-video widescreen vimeo">
                    <iframe src="http://player.vimeo.com/video/21762736?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                Because Vimeo places their chrome on the player itself, adding a class of .vimeo creates a container that is sized for the video only - no extra padding for the controls.
            </li>
        </ul>
    </li>
    <li id="vidCodeTab">
<pre><code data-language='html'>
    &lt;div class=&quot;flex-video&quot;&gt;
    &lt;iframe width=&quot;420&quot; height=&quot;315&quot; src=&quot;http://www.youtube.com/embed/9otNWTHOJi8&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
    &lt;/div&gt;

    &lt;div class=&quot;flex-video widescreen&quot;&gt;
    &lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;http://www.youtube.com/embed/N966cATFWjI&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
    &lt;/div&gt;

    &lt;div class=&quot;flex-video widescreen vimeo&quot;&gt;
    &lt;iframe src=&quot;http://player.vimeo.com/video/21762736?title=0&amp;amp;byline=0&amp;amp;portrait=0&quot; width=&quot;400&quot; height=&quot;225&quot; frameborder=&quot;0&quot; webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;
    &lt;/div&gt;
</code></pre>            </li>
</ul>

<hr>

<div class="panel">
    <h3>Javascripts Shmavascripts</h3>
    <h5 class="subheader">We've been working really hard on updating our Javascript library to be more robust and powerful so that you can build better things.</h5>
    <a class="button" href="javascripts.php">Learn about our Javascripts &raquo;</a>
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
                <li ><a href="tabs.php">Tabs</a></li>
                <li class="active"><a href="elements.php">Elements</a></li>
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