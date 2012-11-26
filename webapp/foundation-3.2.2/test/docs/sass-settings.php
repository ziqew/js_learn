

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

  <title>Foundation Documentation: Sass Settings</title>

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
          <h2>Unlock the Power of Sass</h2>
          <h5 class="subheader">We're dedicated to maintaining Foundation using Sass (the Scss syntax to be exact) and we want to make it the best it can be. Sass gives us the ability to let you choose what parts to import or how it looks.</h5>

          <h3>Foundation Settings</h3>
          <p>Work with your own colors, font sizes, radii, etc by adjusting the <code>_settings.scss</code> file in your new project! We include this file with every new compass project, this file contains the default variables used throughout Foundation, which you can uncomment and change to match your needs or add to a settings file of your own and copy them in.</p>

          <p>By default, these settings are uncommented which includes all of Foundation. You will always want to keep your settings uncommented, but you can comment the second import when you are customizing.</p>

          <div class="foundation-settings">
            <a href="#" class="expand-all small round secondary button">Expand All</a>
            <h4 class="open">Grid Settings <small>Click to collapse</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$rowWidth</td>
                  <td>Control the width of your grid, set this to a <strong>px</strong> value or <strong>100%</strong> for full-width.</td>
                  <td>1000px</td>
                </tr>
                <tr>
                  <td>$columnGutter</td>
                  <td>The space between each column, <strong>$/2 = padding for sides of cols</strong>.</td>
                  <td>30px</td>
                </tr>
                <tr>
                  <td>$totalColumns</td>
                  <td>Set anywhere between <strong>1-24</strong> to control how many columns you've got.</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>$mobileTotalColumns</td>
                  <td>Set how many mobile columns you've got.</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>$blockGridElements</td>
                  <td>Set how many block-grid elements can be set per row, max 24.</td>
                  <td>12</td>
                </tr>
              </tbody>
            </table>

            <h4>Color Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$mainColor</td>
                  <td>Used for many default UI accent colors and for primary buttons.</td>
                  <td>#2ba6cb</td>
                </tr>
                <tr>
                  <td>$secondaryColor</td>
                  <td>Used for secondary buttons, alerts, etc.</td>
                  <td>#e9e9e9</td>
                </tr>
                <tr>
                  <td>$alertColor</td>
                  <td>Used to denote warning or alert across UI elements.</td>
                  <td>#c60f13</td>
                </tr>
                <tr>
                  <td>$successColor</td>
                  <td>Denotes sucess for buttons and such across the UI.</td>
                  <td>#5da423</td>
                </tr>
                <tr>
                  <td>$txtColor</td>
                  <td>This is the default text color for typography and such.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$highlightColor</td>
                  <td>Control which color is used with <code>.highlight</code> elements.</td>
                  <td>#ffff99</td>
                </tr>
                <tr>
                  <td>$black</td>
                  <td>Control how black your default black is.</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$white</td>
                  <td>Control how white your default white is.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$shinyEdge</td>
                  <td>This is the shiny edge we use to add dimension to UI elements.</td>
                  <td>rgba(#fff, .5)</td>
                </tr>
                <tr>
                  <td>$darkEdge</td>
                  <td>This adds a shadowy edge for things like active button states.</td>
                  <td>rgba(#000, .2)</td>
                </tr>
              </tbody>
            </table>

            <h4>Typography Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$headerFontFamily</td>
                  <td>Font stack used for default headings.</td>
                  <td>"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif</td>
                </tr>
                <tr>
                  <td>$headerFontWeight</td>
                  <td>Font weight used for default headings.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$headerFontColor</td>
                  <td>Font color used for default headings.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$bodyFontFamily</td>
                  <td>Font stack used for default body copy.</td>
                  <td>"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif</td>
                </tr>
                <tr>
                  <td>$bodyFontWeight</td>
                  <td>Font weight used for default body copy.</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$bodyFontColor</td>
                  <td>Font color used for default body copy.</td>
                  <td>$txtColor</td>
                </tr>
              </tbody>
            </table>

            <h4>Text Direction Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$textDirection</td>
                  <td>Adjust the default text direction to <strong>ltr</strong> or <strong>rtl</strong> for all Foundation elements.</td>
                  <td>ltr</td>
                </tr>
              </tbody>
            </table>

            <h4>Button Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$buttonRadius</td>
                  <td>This will set the border radius for <code>.radius</code> buttons</td>
                  <td>3px</td>
                </tr>
                <tr>
                  <td>$btnBase</td>
                  <td>Based off top-padding, this value controls the scale relationship for buttons.</td>
                  <td>10px</td>
                </tr>
                <tr>
                  <td>$tinyBtnBase</td>
                  <td>Adjust the offset for tiny buttons.</td>
                  <td>$btnBase - 5</td>
                </tr>
                <tr>
                  <td>$smallBtnBase</td>
                  <td>Adjust the offset for small buttons.</td>
                  <td>$btnBase - 3</td>
                </tr>
                <tr>
                  <td>$largeBtnBase</td>
                  <td>Adjust the offset for large buttons.</td>
                  <td>$btnBase + 5</td>
                </tr>
              </tbody>
            </table>

            <h4>Form Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$formSpacing</td>
                  <td>Space between forms when they're inline using the grid.</td>
                  <td>12px</td>
                </tr>
                <tr>
                  <td>$labelFontWeight</td>
                  <td>Font weight for form labels.</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>$labelTxtColor</td>
                  <td>The text color for form labels.</td>
                  <td>lighten(#000, 30%)</td>
                </tr>
                <tr>
                  <td>$labelBtmMargin</td>
                  <td>How far you want inputs from labels.</td>
                  <td>3px</td>
                </tr>
                <tr>
                  <td>$inputTxtColor</td>
                  <td>Text color for inputs.</td>
                  <td>rgba(0,0,0,0.75)</td>
                </tr>
                <tr>
                  <td>$inputFontSize</td>
                  <td>Font size for input text.</td>
                  <td>14px</td>
                </tr>
                <tr>
                  <td>$inputBgColor</td>
                  <td>Background color for inputs.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$inputFocusBgColor</td>
                  <td>Background color for inputs on focus.</td>
                  <td>darken(#fff, 2%)</td>
                </tr>
                <tr>
                  <td>$inputBorderColor</td>
                  <td>Border color for inputs.</td>
                  <td>darken(#fff, 20%)</td>
                </tr>
                <tr>
                  <td>$inputFocusBorderColor</td>
                  <td>Border color of inputs on focus.</td>
                  <td>darken(#fff, 30%)</td>
                </tr>
                <tr>
                  <td>$inputBorderStyle</td>
                  <td>Border style for inputs.</td>
                  <td>solid</td>
                </tr>
                <tr>
                  <td>$inputBorderWidth</td>
                  <td>Border width for inputs.</td>
                  <td>1px</td>
                </tr>
                <tr>
                  <td>$inputBorderRadius</td>
                  <td>Border radius for inputs.</td>
                  <td>2px</td>
                </tr>
                <tr>
                  <td>$fieldsetBorderRadius</td>
                  <td>Border radius for fieldsets.</td>
                  <td>3px</td>
                </tr>
              </tbody>
            </table>

            <h4>Custom Form Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$custFormBorderColor</td>
                  <td>Border color for custom form elements.</td>
                  <td>#ccc</td>
                </tr>
                <tr>
                  <td>$custFormBgColor</td>
                  <td>Background color for custom form elements.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$custCheckColor</td>
                  <td>Checkmark color for custom checkboxes.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$custSelectCurrentFontColor</td>
                  <td>Font color for currently selected option</code>.</td>
                  <td>#141414</td>
                </tr>
                <tr>
                  <td>$custSelectBgColor</td>
                  <td>Background color for custom select list element.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$custSelectBorderColor</td>
                  <td>Border color for custom selects.</td>
                  <td>#ddd</td>
                </tr>
                <tr>
                  <td>$custSelectTriangleColor</td>
                  <td>Triangle background color for custom selects.</td>
                  <td>#aaa</td>
                </tr>
                <tr>
                  <td>$custSelectTriangleColorOpen</td>
                  <td>Background color for open triangle.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$custSelectDropHeight</td>
                  <td>Control the height of your custom select dropdowns.</td>
                  <td>200px</td>
                </tr>
                <tr>
                  <td>$custDropdownBgColor</td>
                  <td>Custom dropdown background color for selects.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$custDropdownBorderColor</td>
                  <td>Border color for custom select dropdown element.</td>
                  <td>darken(#fff, 20%)</td>
                </tr>
                <tr>
                  <td>$custDropdownFontColor</td>
                  <td>Font color for option list on custom selects.</td>
                  <td>#555</td>
                </tr>
                <tr>
                  <td>$custDropdownSelectedBgColor</td>
                  <td>Highlight color for selected option.</td>
                  <td>lighten(#2ba6cb, 40%)</td>
                </tr>
                <tr>
                  <td>$custDropdownSelectedFontColor</td>
                  <td>Font color for selected option.</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$custFormDisabledBgColor</td>
                  <td>Background color for disabled custom forms.</td>
                  <td>#ddd</td>
                </tr>
              </tbody>
            </table>

            <h4>Tabs Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$tabHeight</td>
                  <td>Set the height of your tab elements.</td>
                  <td>40px</td>
                </tr>
                <tr>
                  <td>$tabTermFontSize</td>
                  <td>Set the font size for tabs.</td>
                  <td>12px</td>
                </tr>
              </tbody>
            </table>

            <h4>Nav Bar Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$navBarHeight</td>
                  <td>Set the height of your navigation bars.</td>
                  <td>40px</td>
                </tr>
                <tr>
                  <td>$navFlyoutBaseWidth</td>
                  <td>Base width for navigatoin bar flyouts.</td>
                  <td>250px</td>
                </tr>
              </tbody>
            </table>

            <h4>Top Bar Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$topBarBgColor</td>
                  <td>Background color for top bar.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$topBarHeight</td>
                  <td>Height for the desktop view of the top bar.</td>
                  <td>45px</td>
                </tr>
                <tr>
                  <td>$topBarHeightMobile</td>
                  <td>Height for the mobile view of the top bar.</td>
                  <td>45px</td>
                </tr>
                <tr>
                  <td>$topBarBtmMargin</td>
                  <td>Bottom margin for top bar when it isn't set to fixed.</td>
                  <td>30px</td>
                </tr>
                <tr>
                  <td>$topBarTitleWeight</td>
                  <td>Font weight for the title.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$topBarTitleSize</td>
                  <td>Font size for the title.</td>
                  <td>17px</td>
                </tr>
                <tr>
                  <td>$topBarLinkColor</td>
                  <td>Link color for the top bar.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$topBarLinkWeight</td>
                  <td>Font weight for links in the top bar.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$topBarLinkSize</td>
                  <td>Font size for links in the top bar.</td>
                  <td>13px</td>
                </tr>
                <tr>
                  <td>$topBarDropBgColor</td>
                  <td>Background color for dropdown element.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$topBarDropLinkColor</td>
                  <td>Link color inside the dropdown element.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$topBarDropToggleSize</td>
                  <td>Triangle size for the top bar.</td>
                  <td>5px</td>
                </tr>
                <tr>
                  <td>$topBarDropToggleColor</td>
                  <td>Triangle color for the top bar.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$topBarDropToggleAlpha</td>
                  <td>Opacity for the triangles in the top bar.</td>
                  <td>0.5</td>
                </tr>
                <tr>
                  <td>$topBarSearchWidth</td>
                  <td>Width for the search field elements in the top bar.</td>
                  <td>200px</td>
                </tr>
                <tr>
                  <td>$topBarBreakPoint</td>
                  <td>Set your own custom breakpoint for the top bar.</td>
                  <td>940px</td>
                </tr>
                <tr>
                  <td>$topBarNavToggleSize</td>
                  <td>Triangle size for mobile navigation toggle.</td>
                  <td>8px</td>
                </tr>
              </tbody>
            </table>

            <h4>UI Element Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th width="50%">Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$thumbRadius</td>
                  <td>Border radius for thumbnail elements.</td>
                  <td>3px</td>
                </tr>
                <tr>
                  <td>$linkListBottomMargin</td>
                  <td>Bottom margin for inline link lists.</td>
                  <td>17px -22px</td>
                </tr>
                <tr>
                  <td>$tableBorderRadius</td>
                  <td>Border radius for tables.</td>
                  <td>3px</td>
                </tr>
                <tr>
                  <td colspan="3"><h5>Progress Bar Settings</h5></td>
                </tr>
                <tr>
                  <td>$progBarHeight</td>
                  <td>Height of progress bar elements.</td>
                  <td>25px</td>
                </tr>
                <tr>
                  <td>$progBarBorderColor</td>
                  <td>Border color for progress bar elements.</td>
                  <td>darken(#fff, 20%)</td>
                </tr>
                <tr>
                  <td>$progBarBorderSize</td>
                  <td>Border size for progress bar elements.</td>
                  <td>1px</td>
                </tr>
                <tr>
                  <td>$progBarPad</td>
                  <td>Inside padding for progress bar element.</td>
                  <td>2px</td>
                </tr>
                <tr>
                  <td colspan="3"><h5>Tooltip Settings</h5></td>
                </tr>
                <tr>
                  <td>$hasTipBorderBottom</td>
                  <td>Bottom border settings for items with a tooltip.</td>
                  <td>dotted 1px #ccc</td>
                </tr>
                <tr>
                  <td>$hasTipFontWeight</td>
                  <td>Font weight for items with a tooltip.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$hasTipFontColor</td>
                  <td>Font color for items with a tooltip.</td>
                  <td>#333</td>
                </tr>
                <tr>
                  <td>$hasTipBorderBottomHover</td>
                  <td>Bottom border settings for items with a tooltip on hover.</td>
                  <td>dotted 1px darken($mainColor, 20%)</td>
                </tr>
                <tr>
                  <td>$hasTipFontColorHover</td>
                  <td>Font color of item with tooltips on hover.</td>
                  <td>$mainColor</td>
                </tr>
                <tr>
                  <td>$tooltipBackgroundColor</td>
                  <td>Background for tooltips.</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$tooltipBackgroundOpacity</td>
                  <td>Background Opacity for Tooltips.</td>
                  <td>0.85</td>
                </tr>
                <tr>
                  <td>$tooltipFontSize</td>
                  <td>Font size for text inside tooltips.</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>$tooltipFontWeight</td>
                  <td>Font weight for text inside tooltips.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$tooltipFontColor</td>
                  <td>Font color for text inside tooltips.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$tapToCloseFontSize</td>
                  <td>"Tap to close" font size.</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>$tapToCloseFontWeight</td>
                  <td>"Tap to close" Font weight.</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$tapToCloseFontColor</td>
                  <td>"Tap to close" Font color.</td>
                  <td>#888</td>
                </tr>
                <tr>
                  <td>$tooltipFontSizeScreenSm</td>
                  <td>Font size for tooltips on small devices.</td>
                  <td>14</td>
                </tr>
                <tr>
                  <td>$tooltipBgOpacityScreenSm</td>
                  <td>Background opacity for tooltips on small devices.</td>
                  <td>0.85</td>
                </tr>
                <tr>
                  <td>$tooltipBorderRadius</td>
                  <td>Border radius for rounded tooltips.</td>
                  <td>4px</td>
                </tr>
                <tr>
                  <td colspan="3"><h5>Pricing Table Settings</h5></td>
                </tr>
                <tr>
                  <td>$priceTableBorder</td>
                  <td>Border color for pricing table.</td>
                  <td>solid 1px #ddd</td>
                </tr>
                <tr>
                  <td>$priceTitleBgColor</td>
                  <td>Background color for pricing table.</td>
                  <td>#ddd</td>
                </tr>
                <tr>
                  <td>$priceTitlePadding</td>
                  <td>Padding around pricing table title.</td>
                  <td>15px 20px</td>
                </tr>
                <tr>
                  <td>$priceTitleAlign</td>
                  <td>Text alignment for pricing table title.</td>
                  <td>center</td>
                </tr>
                <tr>
                  <td>$priceTitleColor</td>
                  <td>Font color for pricing table title.</td>
                  <td>#333</td>
                </tr>
                <tr>
                  <td>$priceTitleWeight</td>
                  <td>Font weight for pricing table title.</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$priceTitleSize</td>
                  <td>Font size for pricing table title.</td>
                  <td>16px</td>
                </tr>
                <tr>
                  <td>$priceMoneyBgColor</td>
                  <td>Background color for price section.</td>
                  <td>#eee</td>
                </tr>
                <tr>
                  <td>$priceMoneyPadding</td>
                  <td>Padding around pricing table price.</td>
                  <td>15px 20px</td>
                </tr>
                <tr>
                  <td>$priceMoneyAlign</td>
                  <td>Text alignment for pricing table price cell.</td>
                  <td>center</td>
                </tr>
                <tr>
                  <td>$priceMoneyColor</td>
                  <td>Font color for pricing table price text.</td>
                  <td>#333</td>
                </tr>
                <tr>
                  <td>$priceMoneyWeight</td>
                  <td>Font weight for pricing table price text.</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$priceMoneySize</td>
                  <td>Font size for pricing table price text.</td>
                  <td>20px</td>
                </tr>
                <tr>
                  <td>$priceBgColor</td>
                  <td>Background color for pricing table price cell.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$priceDescColor</td>
                  <td>Font color for pricing table description.</td>
                  <td>#777</td>
                </tr>
                <tr>
                  <td>$priceDescPadding</td>
                  <td>Padding inside pricing table description cell.</td>
                  <td>15px</td>
                </tr>
                <tr>
                  <td>$priceDescAlign</td>
                  <td>Text alignment for pricing table description.</td>
                  <td>center</td>
                </tr>
                <tr>
                  <td>$priceDescFontSize</td>
                  <td>Font size for pricing table description.</td>
                  <td>12px</td>
                </tr>
                <tr>
                  <td>$priceDescWeight</td>
                  <td>Font weight for pricing table description.</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$priceDescLineHeight</td>
                  <td>Line height for pricing table description.</td>
                  <td>1.4</td>
                </tr>
                <tr>
                  <td>$priceDescBtmBorder</td>
                  <td>Bottom border styles for pricing table description.</td>
                  <td>dotted 1px #ddd</td>
                </tr>
                <tr>
                  <td>$priceItemColor</td>
                  <td>Font color for bulleted items in pricing table.</td>
                  <td>#333</td>
                </tr>
                <tr>
                  <td>$priceItemPadding</td>
                  <td>padding for bulleted items in pricing table.</td>
                  <td>15px</td>
                </tr>
                <tr>
                  <td>$priceItemAlign</td>
                  <td>Text alignment for bulleted items in pricing table.</td>
                  <td>center</td>
                </tr>
                <tr>
                  <td>$priceItemFontSize</td>
                  <td>Font size for bulleted items in pricing table.</td>
                  <td>14px</td>
                </tr>
                <tr>
                  <td>$priceItemWeight</td>
                  <td>Font weight for bulleted items in pricing table.</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$priceItemBtmBorder</td>
                  <td>Bottom border styles for bulleted items in pricing table.</td>
                  <td>dotted 1px #ddd</td>
                </tr>
                <tr>
                  <td>$priceCtaBgColor</td>
                  <td>Background color for CTA cell in pricing tables.</td>
                  <td>#f5f5f5</td>
                </tr>
                <tr>
                  <td>$priceCtaAlign</td>
                  <td>Text alignment color for CTA cell in pricing tables.</td>
                  <td>center</td>
                </tr>
                <tr>
                  <td>$priceCtaPadding</td>
                  <td>Padding inside CTA cell for pricing tables.</td>
                  <td>20px</td>
                </tr>
              </tbody>
            </table>

            <h4>Orbit Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$orbitCaptionBgColorOldBrowser</td>
                  <td>Background color for captions in browsers that don't support rgba.</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$orbitCaptionBgColor</td>
                  <td>Background color for Orbit captions.</td>
                  <td>rgba(0,0,0,.6)</td>
                </tr>
                <tr>
                  <td>$orbitCaptionFontColor</td>
                  <td>Font size for Orbit captions.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$orbitBulletNavColor</td>
                  <td>Color of Orbit bullet navigation.</td>
                  <td>#999</td>
                </tr>
                <tr>
                  <td>$orbitBulletNavColorActive</td>
                  <td>Active color of Orbit bullet navigation.</td>
                  <td>#222</td>
                </tr>
                <tr>
                  <td>$orbitHasThumbBorderColor</td>
                  <td>Border color for Orbit thumbnails.</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$orbitHasThumbBorderWidth</td>
                  <td>Border width for Orbit thumbnails.</td>
                  <td>2px</td>
                </tr>
                <tr>
                  <td>$orbitHasThumbBorderStyle</td>
                  <td>Border style for Orbit thumbnails.</td>
                  <td>solid</td>
                </tr>
                <tr>
                  <td>$orbitSlideNumBgColor</td>
                  <td>Background color for slide numbers.</td>
                  <td>rgba(0,0,0,0.7)</td>
                </tr>
                <tr>
                  <td>$orbitSlideNumFontColor</td>
                  <td>Font color for slide numbers.</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$orbitSlideNumPadding</td>
                  <td>Padding around slide numbers.</td>
                  <td>5px</td>
                </tr>
              </tbody>
            </table>

            <h4>Clearing Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$clearingBg</td>
                  <td>Background color for clearing blackout</td>
                  <td>rgba(0,0,0,0.8)</td>
                </tr>
                <tr>
                  <td>$clearingOldBrowserBg</td>
                  <td>Old browser blackout background color</td>
                  <td>rgb(0,0,0)</td>
                </tr>
                <tr>
                  <td>$clearingCaptionBg</td>
                  <td>Caption background color</td>
                  <td>rgba(0,0,0,0.7)</td>
                </tr>
                <tr>
                  <td>$clearingCaptionOldBrowserBg</td>
                  <td>Old browser captions background color</td>
                  <td>rgb(0,0,0)</td>
                </tr>
                <tr>
                  <td>$clearingCaptionFontColor</td>
                  <td>Caption font color</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$clearingCloseColor</td>
                  <td>Close button font color</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$clearingArrowColor</td>
                  <td>Arrow colors</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$clearingArrowSize</td>
                  <td>Arrow size</td>
                  <td>16px</td>
                </tr>
                <tr>
                  <td>$clearingCarouselBg</td>
                  <td>Carousel Background Color</td>
                  <td>rgba(0,0,0,0.75)</td>
                </tr>
                <tr>
                  <td>$clearingCarouselOldBrowserBg</td>
                  <td>Old Browser Carousel Background Color</td>
                  <td>rgb(0,0,0)</td>
                </tr>
                <tr>
                  <td>$clearingCarouselHeight</td>
                  <td>Height of clearing carousel</td>
                  <td>150px</td>
                </tr>
                <tr>
                  <td>$clearingCarouselThumbWidth</td>
                  <td>Width of thumbnails</td>
                  <td>175px</td>
                </tr>
                <tr>
                  <td>$clearingActiveImgHeight</td>
                  <td>Height of image area</td>
                  <td>75%</td>
                </tr>
                <tr>
                  <td>$clearingCarouselThumbActiveBorder</td>
                  <td>Active indicator border for thumbnails</td>
                  <td>4px solid rgb(255,255,255)</td>
                </tr>
                <tr>
                  <td>$clearingImgBg</td>
                  <td>Image Background</td>
                  <td>#rgba(0,0,0,0.75)</td>
                </tr>
                <tr>
                  <td>$clearingImgOldBrowserBg</td>
                  <td>Old browser Image Background</td>
                  <td>rgb(0,0,0)</td>
                </tr>
              </tbody>
            </table>

            <h4>Joyride Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$tipBg</td>
                  <td>Background color for tip container</td>
                  <td>rgba(0,0,0,0.8)</td>
                </tr>
                <tr>
                  <td>$tipBgIE8</td>
                  <td>IE8 Fallback for non rgba background</td>
                  <td>#000</td>
                </tr>
                <tr>
                  <td>$tipFontColor</td>
                  <td>Font color for tip paragraphs</td>
                  <td>#fff</td>
                </tr>
                <tr>
                  <td>$tipHeaderWeight</td>
                  <td>Font weight for tip headers</td>
                  <td>bold</td>
                </tr>
                <tr>
                  <td>$tipDefaultWidth</td>
                  <td>Default width for tip container</td>
                  <td>300px</td>
                </tr>
                <tr>
                  <td>$tipBorderRadius</td>
                  <td>Border radius for tip container</td>
                  <td>4px</td>
                </tr>
                <tr>
                  <td>$tipPadding</td>
                  <td>Padding around tip content</td>
                  <td>18px 20px 24px</td>
                </tr>
                <tr>
                  <td>$tipNubSize</td>
                  <td>Triangle nub size for tip container</td>
                  <td>14px</td>
                </tr>
                <tr>
                  <td>$tipFontSize</td>
                  <td>Font size for tip paragraphs</td>
                  <td>14px</td>
                </tr>
                <tr>
                  <td>$tipTimerWidth</td>
                  <td>Width of the tip timer</td>
                  <td>50px</td>
                </tr>
                <tr>
                  <td>$tipTimerHeight</td>
                  <td>Height of the tip timer</td>
                  <td>3px</td>
                </tr>
                <tr>
                  <td>$tipTimerBorder</td>
                  <td>Border styles for timer</td>
                  <td>solid 1px #555</td>
                </tr>
                <tr>
                  <td>$tipTimerColor</td>
                  <td>Fill color for timer</td>
                  <td>#666</td>
                </tr>
                <tr>
                  <td>$tipCloseColor</td>
                  <td>Font color for close link</td>
                  <td>#777</td>
                </tr>
                <tr>
                  <td>$tipCloseSize</td>
                  <td>Font size for close link</td>
                  <td>20px</td>
                </tr>
                <tr>
                  <td>$tipCloseWeight</td>
                  <td>Font weight for close link</td>
                  <td>normal</td>
                </tr>
                <tr>
                  <td>$tipScreenFill</td>
                  <td>Background color for screen fill on modal tips</td>
                  <td>rgba(0,0,0,0.5)</td>
                </tr>
              </tbody>
            </table>

            <h4>Modular Scale Settings <small>Click to expand</small></h4>
            <table class="small twelve">
              <thead>
                <tr>
                  <th>Variable Name</th>
                  <th>Description and Options</th>
                  <th>Default</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$ratio</td>
                  <td>The ratio used to calculate our modular scale.</td>
                  <td>golden()</td>
                </tr>
                <tr>
                  <td>$baseFontSize</td>
                  <td>Base font size for modular scale, used for paragraphs.</td>
                  <td>14px</td>
                </tr>
                <tr>
                  <td>$importantModNum</td>
                  <td>Based on recommended tap area size, augments scale.</td>
                  <td>44px</td>
                </tr>
              </tbody>
            </table>
          </div>

          <hr>

          <div class="panel">
            <h3>Learn About Mixins</h3>
            <h5 class="subheader">Another great feature of Sass is its ability to create mixins. We've included a hand full of handy mixins that will make your life a lot easier!</h5>
            <a class="button" href="sass-mixins.php">Learn about our Mixins &raquo;</a>
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
    <li ><a href="compass.php">Compass</a></li>
    <li ><a href="rails.php">Rails</a></li>
    <li class="active"><a href="sass.php">Sass</a>
              <ul>
          <li ><a href="sass.php">@imports</a></li>
          <li class="active"><a href="sass-settings.php">Settings</a></li>
          <li ><a href="sass-mixins.php">Mixins</a></li>
        </ul>
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