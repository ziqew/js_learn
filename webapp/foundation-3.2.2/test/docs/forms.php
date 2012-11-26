

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

  <title>Foundation Documentation: Forms</title>

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
    			<h2>Forms</h2>
    			<h5 class="subheader">We set out in Foundation 3 to create an easy to handle, powerful, and versatile form layout system. A combination of form styles and the Foundation grid means you can do basically anything you need.</h5>

    			<h4>The Basics</h4>
  				<p>Form elements in Foundation 3 are styled based on their type attribute rather than <code>.input-text</code> classes, so the Scss/CSS is much simpler.</p>
  				<p>Inputs in Foundation 3 have another major change &mdash; <strong>they are full width by default.</strong> That means that inputs will run as wide as the column that contains them. However, you have two options which make these forms extremely versatile:</p>
  				<ul class="disc">
  				  <li>You can size inputs using column sizes, like <code>.six</code>.</li>
  				  <li>You can create <code>row</code> elements inside your form and use columns for the form, including inputs, labels and more. Rows inside a form inherit some special padding to even up input spacing.</li>
  				</ul>

  				<hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="form-layout"></a>
              <h3>Row Layouts</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#rowEx">Example</a></dd>
                <dd><a href="#rowCode">Code</a></dd>
              </dl>
            </div>
          </div>
  				<p>Here's an example of a form layout controlled with rows and columns.</p>
          <ul class="tabs-content">
            <li class="active" id="rowExTab">
              <form>
                <label>This is a label.</label>
                <input type="text" placeholder="Standard Input" />
                <label>Address</label>
                <input type="text" class="twelve" placeholder="Street" />
                <div class="row">
                  <div class="six columns">
                    <input type="text" placeholder="City" />
                  </div>
                  <div class="three columns">
                    <input type="text" placeholder="State" />
                  </div>
                  <div class="three columns">
                    <input type="text" placeholder="ZIP" />
                  </div>
                </div>
                <textarea placeholder="Message"></textarea>
              </form>

              <p>Sometimes you want a form with labels to the left of your inputs. Piece of cake. You can add a class of <code>.right</code> to a label to have it align to the right, and if your label is next to an input (in another column) adding a class of <code>.inline</code> will have it vertically center against an input.</p>

              <form>
                <div class="row">
                  <div class="two mobile-one columns">
                    <label class="right inline">Address Name:</label>
                  </div>
                  <div class="ten mobile-three columns">
                    <input type="text" placeholder="e.g. Home" class="eight" />
                  </div>
                </div>
                <div class="row">
                  <div class="two mobile-one columns">
                    <label class="right inline">City:</label>
                  </div>
                  <div class="ten mobile-three columns">
                    <input type="text" class="eight" />
                  </div>
                </div>
                <div class="row">
                  <div class="two mobile-one columns">
                    <label class="right inline">ZIP:</label>
                  </div>
                  <div class="ten mobile-three columns">
                    <input type="text" class="three" />
                  </div>
                </div>
              </form>
            </li>
            <li id="rowCodeTab">
<pre><code data-language='html'>
&lt;!-- Row Layout for forms --&gt;
&lt;form&gt;
  &lt;label&gt;This is a label.&lt;/label&gt;
  &lt;input type=&quot;text&quot; placeholder=&quot;Standard Input&quot; /&gt;
  &lt;label&gt;Address&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;twelve&quot; placeholder=&quot;Street&quot; /&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;six columns&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;City&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;three columns&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;State&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;three columns&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;ZIP&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;textarea placeholder=&quot;Message&quot;&gt;&lt;/textarea&gt;
&lt;/form&gt;

&lt;!-- Right aligned and inline labels --&gt;
&lt;form&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two mobile-one columns&quot;&gt;
      &lt;label class=&quot;right inline&quot;&gt;Address Name:&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;ten mobile-three columns&quot;&gt;
      &lt;input type=&quot;text&quot; placeholder=&quot;e.g. Home&quot; class=&quot;eight&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two mobile-one columns&quot;&gt;
      &lt;label class=&quot;right inline&quot;&gt;City:&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;ten mobile-three columns&quot;&gt;
      &lt;input type=&quot;text&quot; class=&quot;eight&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;two mobile-one columns&quot;&gt;
      &lt;label class=&quot;right inline&quot;&gt;ZIP:&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;ten mobile-three columns&quot;&gt;
      &lt;input type=&quot;text&quot; class=&quot;three&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="fieldsets"></a>
              <h3>Fieldsets</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#fieldEx">Example</a></dd>
                <dd><a href="#fieldCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <p>Simple elements that can contain all or part of a form to create better division.</p>
          <ul class="tabs-content">
            <li class="active" id="fieldExTab">
              <form>
                <fieldset>

                  <legend>Fieldset Name</legend>

                  <label>This is a label.</label>
                  <input type="text" placeholder="Standard Input" />

                  <label>Address</label>
                  <input type="text" />
                  <input type="text" class="six" />

                </fieldset>
              </form>
            </li>
            <li id="fieldCodeTab">
<pre><code data-language='html'>
&lt;form&gt;
  &lt;fieldset&gt;

    &lt;legend&gt;Fieldset Name&lt;/legend&gt;

    &lt;label&gt;This is a label.&lt;/label&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;Standard Input&quot; /&gt;

    &lt;label&gt;Address&lt;/label&gt;
    &lt;input type=&quot;text&quot; /&gt;
    &lt;input type=&quot;text&quot; class=&quot;six&quot; /&gt;

  &lt;/fieldset&gt;
&lt;/form&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="prefix-labels"></a>
              <h3>Pre/Postfix Labels &amp; Actions</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#postEx">Example</a></dd>
                <dd><a href="#postCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <p>Foundation forms support actions tied to buttons, and prefix / postfix labels, through a versatile approach using special grid properties. Essentially you can use a 'collapsed' row to create label / action / input combinations. Here are a few examples.</p>
          <p><strong>Note:</strong> for these prefix and postfix labels we're using the <a href="grid.php">mobile grid</a> to size our labels correctly on small devices.</p>
          <ul class="tabs-content">
            <li class="active" id="postExTab">

              <div class="row">
                <div class="six columns">
                  <label>Input with a prefix character</label>
                  <div class="row">
                    <div class="twelve columns">
                      <div class="row collapse">
                        <div class="two mobile-one columns">
                          <span class="prefix">#</span>
                        </div>
                        <div class="ten mobile-three columns">
                          <input type="text" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="six columns">
                  <label>Input with a postfix label</label>
                  <div class="row">
                    <div class="twelve columns">
                      <div class="row collapse">
                        <div class="nine mobile-three columns">
                          <input type="text" />
                        </div>
                        <div class="three mobile-one columns">
                          <span class="postfix">.com</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="postCodeTab">
<pre><code data-language='html'>
&lt;!-- Prefix label --&gt;
&lt;label&gt;Input with a prefix character&lt;/label&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;four columns&quot;&gt;
    &lt;div class=&quot;row collapse&quot;&gt;
      &lt;div class=&quot;two mobile-one columns&quot;&gt;
        &lt;span class=&quot;prefix&quot;&gt;#&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ten mobile-three columns&quot;&gt;
        &lt;input type=&quot;text&quot; /&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Postfix label --&gt;
&lt;label&gt;Input with a postfix label&lt;/label&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;five columns&quot;&gt;
    &lt;div class=&quot;row collapse&quot;&gt;
      &lt;div class=&quot;nine mobile-three columns&quot;&gt;
        &lt;input type=&quot;text&quot; /&gt;
      &lt;/div&gt;
      &lt;div class=&quot;three mobile-one columns&quot;&gt;
        &lt;span class=&quot;postfix&quot;&gt;.com&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Postfix action --&gt;
&lt;div class=&quot;row collapse&quot;&gt;
  &lt;div class=&quot;ten mobile-three columns&quot;&gt;
    &lt;input type=&quot;text&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;two mobile-one columns&quot;&gt;
    &lt;a class=&quot;button expand postfix&quot;&gt;Search&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>            </li>
          </ul>

          <label>Input with a postfix action (button)</label>

          <div class="row collapse">
            <div class="ten mobile-three columns">
              <input type="text" />
            </div>
            <div class="two mobile-one columns">
              <a class="button expand postfix">Search</a>
            </div>
          </div>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="errors"></a>
              <h3>Error States</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#errorEx">Example</a></dd>
                <dd><a href="#errorCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Foundation includes error states for labels, inputs and messaging that you can have your app generate programatically.</h5>
          <p>You can attach a class of <code>.error</code> either to the individual elements (label, input, small) or to a column/div.</p>

          <ul class="tabs-content">
            <li class="active" id="errorExTab">
              <div class="row">
                <div class="five columns">
                  <label class="error">Error</label>
                  <input type="text" class="error" />
                  <small class="error">Invalid entry</small>
                </div>

                <div class="five columns end error">
                  <label>Another Error</label>
                  <input type="text" />
                  <small>Invalid entry</small>
                </div>
              </div>
            </li>
            <li id="errorCodeTab">
<pre><code data-language='html'>
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;five columns&quot;&gt;
    &lt;label class=&quot;error&quot;&gt;Error&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;error&quot; /&gt;
    &lt;small class=&quot;error&quot;&gt;Invalid entry&lt;/small&gt;
  &lt;/div&gt;

  &lt;div class=&quot;five columns end error&quot;&gt;
    &lt;label&gt;Another Error&lt;/label&gt;
    &lt;input type=&quot;text&quot; /&gt;
    &lt;small&gt;Invalid entry&lt;/small&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <h3>Large Forms</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#lrgEx">Example</a></dd>
                <dd><a href="#lrgCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Here's an example of how you can use the grid to build out a complex form layout.</h5>
          <ul class="tabs-content">
            <li class="active" id="lrgExTab">
              <form>
                <fieldset>
                  <legend>Large Form Example</legend>

                  <div class="row">
                    <div class="five columns">

                      <label>Name</label>
                      <input type="text" />

                      <label>Occupation</label>
                      <input type="text" />

                      <label>Twitter</label>
                      <div class="row collapse">
                        <div class="two mobile-one columns">
                          <span class="prefix">@</span>
                        </div>
                        <div class="ten mobile-three columns">
                          <input type="text" placeholder="foundationzurb">
                        </div>
                      </div>

                      <label>URL</label>
                      <div class="row collapse">
                        <div class="nine mobile-three columns">
                          <input type="text" placeholder="foundation.zurb">
                        </div>
                        <div class="three mobile-one columns">
                          <span class="postfix">.com</span>
                        </div>
                      </div>

                    </div>

                    <div class="five columns">

                      <label class="error">Field with Error</label>
                      <input type="text" class="error">
                      <small class="error">Invalid entry</small>

                      <div class="error">
                        <label>Another Error</label>
                        <input type="text" />
                        <small>Invalid entry</small>
                      </div>

                    </div>
                  </div>

                  <label>Address</label>
                  <input type="text" placeholder="Street (e.g. 123 Awesome St.)">

                  <div class="row">
                    <div class="six columns">
                      <input type="text" placeholder="City">
                    </div>
                    <div class="two columns">
                      <select>
                        <option>CA</option>
                      </select>
                    </div>
                    <div class="four columns">
                      <input type="text" placeholder="ZIP">
                    </div>
                  </div>

                </fieldset>
              </form>
            </li>
            <li id="lrgCodeTab">
<pre><code data-language='html'>
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Large Form Example&lt;/legend&gt;

    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;five columns&quot;&gt;

        &lt;label&gt;Name&lt;/label&gt;
        &lt;input type=&quot;text&quot;&gt;

        &lt;label&gt;Occupation&lt;/label&gt;
        &lt;input type=&quot;text&quot;&gt;

        &lt;label&gt;Twitter&lt;/label&gt;
        &lt;div class=&quot;row collapse&quot;&gt;
          &lt;div class=&quot;two mobile-one columns&quot;&gt;
            &lt;span class=&quot;prefix&quot;&gt;@&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;ten mobile-three columns&quot;&gt;
            &lt;input type=&quot;text&quot; placeholder=&quot;foundationzurb&quot;&gt;
          &lt;/div&gt;
        &lt;/div&gt;

        &lt;label&gt;URL&lt;/label&gt;
        &lt;div class=&quot;row collapse&quot;&gt;
          &lt;div class=&quot;nine mobile-three columns&quot;&gt;
            &lt;input type=&quot;text&quot; placeholder=&quot;foundation.zurb&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;three mobile-one columns&quot;&gt;
            &lt;span class=&quot;postfix&quot;&gt;.com&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;

      &lt;/div&gt;

      &lt;div class=&quot;five columns&quot;&gt;

        &lt;label class=&quot;error&quot;&gt;Field with Error&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;error&quot;&gt;
        &lt;small class=&quot;error&quot;&gt;Invalid entry&lt;/small&gt;

        &lt;div class=&quot;error&quot;&gt;
          &lt;label&gt;Another Error&lt;/label&gt;
          &lt;input type=&quot;text&quot;&gt;
          &lt;small&gt;Invalid entry&lt;/small&gt;
        &lt;/div&gt;

      &lt;/div&gt;
    &lt;/div&gt;

    &lt;label&gt;Address&lt;/label&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;Street (e.g. 123 Awesome St.)&quot;&gt;

    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;six columns&quot;&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;City&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;two columns&quot;&gt;
        &lt;select&gt;
          &lt;option&gt;CA&lt;/option&gt;
        &lt;/select&gt;
      &lt;/div&gt;
      &lt;div class=&quot;four columns&quot;&gt;
        &lt;input type=&quot;text&quot; placeholder=&quot;ZIP&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/fieldset&gt;
&lt;/form&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="row tabs">
            <div class="eight columns">
              <a name="custom-inputs"></a>
              <h3>Custom Inputs</h3>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#custEx">Explanation</a></dd>
                <dd><a href="#custCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <h5 class="no-marg-top subheader">Creating easy to style custom form elements is so crazy easy, it's practically a crime. Just add a class of "custom" to a form and, if you want, <code>jquery.foundation.forms.js</code> will do everything.</h5>
          <ul class="tabs-content">
            <li class="active" id="custExTab">
              <p>Once initialized it will look for any checkbox, radio button, or select element and replace it with custom markup that Foundation provides styles for. It will even correctly respect and apply default states for radio, checkbox and select elements. You can use the "checked" or "selected" properties just like normal.</p>
              <p>If you want to avoid a potential flash (waiting for js to load and replace your default elements) you can supply the custom markup as part of the page, and the js will instead simply map the custom elements to the inputs.</p>
              <p>If you dynamically add inputs to your page you'll need to update the custom markup.  You can safely call the previous function again, but to improve performance you can also scope it to only update a single input.</p>
            </li>
            <li id="custCodeTab">
<pre><code data-language='html'>
&lt;form class=&quot;custom&quot;&gt;
  &lt;!-- No custom markup applied --&gt;
  &lt;label for=&quot;radio1&quot;&gt;
    &lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio1&quot;&gt; Radio Button 1
  &lt;/label&gt;

  &lt;!-- Above markup will become this --&gt;
  &lt;label for=&quot;radio1&quot;&gt;
    &lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio1&quot; style=&quot;display:none;&quot;&gt;
    &lt;span class=&quot;custom radio&quot;&gt;&lt;/span&gt; Radio Button 1
  &lt;/label&gt;

  &lt;!-- This markup will NOT be touched by Javascript --&gt;
  &lt;label for=&quot;radio2&quot;&gt;
    &lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio2&quot; style=&quot;display:none;&quot;&gt;
    &lt;span class=&quot;custom radio checked&quot;&gt;&lt;/span&gt; Radio Button 2
  &lt;/label&gt;
&lt;/form&gt;

&lt;!-- The HTML for Scoping to Single Input --&gt;
&lt;select id=&quot;changedSelectInput&quot;&gt;
  &lt;option&gt;Pick One&lt;/option&gt;
&lt;/select&gt;

&lt;!-- The JS for Scoping to Single Input --&gt;
$(&quot;#changedSelectInput&quot;).foundationCustomForms();
</code></pre>            </li>
          </ul>

          <div class="row tabs">
            <div class="eight columns">
              <h4>Radio Buttons and Checkboxes</h4>
            </div>
            <div class="four columns tabs">
              <dl class="tabs pill small">
                <dd class="active"><a href="#radEx">Example</a></dd>
                <dd><a href="#radCode">Code</a></dd>
              </dl>
            </div>
          </div>
          <p>With the patterns described above, we're able to easily construct customizable radio buttons and checkboxes.</p>
          <ul class="tabs-content">
            <li class="active" id="radExTab">
              <form class="custom">
                <div class="row">
                  <div class="four columns">
                    <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> Radio Button 1</label>
                    <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio checked"></span> Radio Button 2</label>
                    <label for="radio3"><input name="radio1" type="radio" id="radio3" disabled style="display:none;"><span class="custom radio"></span> Radio Button 3</label>
                  </div>
                  <div class="four columns">
                    <label for="radio4"><input name="radio2" type="radio" id="radio4"> Radio Button 1</label>
                    <label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Radio Button 2</label>
                    <label for="radio6"><input name="radio2" type="radio" id="radio6"> Radio Button 3</label>
                  </div>
                  <div class="four columns">
                    <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> Label for Checkbox</label>
                    <label for="checkbox2"><input type="checkbox" id="checkbox2" checked style="display: none;"><span class="custom checkbox checked"></span> Label for Checkbox</label>
                    <label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3"> Label for Checkbox</label>
                  </div>
                </div>
                <h4>Select Elements</h4>
                <p>Also made with the patterns described above, we've made it simple to create customizable select lists too! </p>

                <label for="customDropdown">Dropdown Label</label>
                <select style="display:none;" id="customDropdown">
                  <option SELECTED>This is a dropdown</option>
                  <option>This is another option</option>
                  <option>Look, a third option</option>
                </select>
                <div class="custom dropdown">
                  <a href="#" class="current">
                    This is a dropdown
                  </a>
                  <a href="#" class="selector"></a>
                  <ul>
                    <li>This is a dropdown</li>
                    <li>This is another option</li>
                    <li>Look, a third option</li>
                  </ul>
                </div>
              </form>
            </li>
            <li id="radCodeTab">
<pre><code data-language='html'>
&lt;form class=&quot;custom&quot;&gt;

  &lt;!-- Custom Radio --&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;four columns&quot;&gt;
      &lt;label for=&quot;radio1&quot;&gt;&lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio1&quot; style=&quot;display:none;&quot;&gt;&lt;span class=&quot;custom radio&quot;&gt;&lt;/span&gt; Radio Button 1&lt;/label&gt;
      &lt;label for=&quot;radio2&quot;&gt;&lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio2&quot; style=&quot;display:none;&quot;&gt;&lt;span class=&quot;custom radio checked&quot;&gt;&lt;/span&gt; Radio Button 2&lt;/label&gt;
      &lt;label for=&quot;radio3&quot;&gt;&lt;input name=&quot;radio1&quot; type=&quot;radio&quot; id=&quot;radio3&quot; disabled style=&quot;display:none;&quot;&gt;&lt;span class=&quot;custom radio&quot;&gt;&lt;/span&gt; Radio Button 3&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;four columns&quot;&gt;
      &lt;label for=&quot;radio4&quot;&gt;&lt;input name=&quot;radio2&quot; type=&quot;radio&quot; id=&quot;radio4&quot;&gt; Radio Button 1&lt;/label&gt;
      &lt;label for=&quot;radio5&quot;&gt;&lt;input name=&quot;radio2&quot; CHECKED type=&quot;radio&quot; id=&quot;radio5&quot;&gt; Radio Button 2&lt;/label&gt;
      &lt;label for=&quot;radio6&quot;&gt;&lt;input name=&quot;radio2&quot; type=&quot;radio&quot; id=&quot;radio6&quot;&gt; Radio Button 3&lt;/label&gt;
    &lt;/div&gt;

    &lt;!-- Custom Checkbox --&gt;
    &lt;div class=&quot;four columns&quot;&gt;
      &lt;label for=&quot;checkbox1&quot;&gt;&lt;input type=&quot;checkbox&quot; id=&quot;checkbox1&quot; style=&quot;display: none;&quot;&gt;&lt;span class=&quot;custom checkbox&quot;&gt;&lt;/span&gt; Label for Checkbox&lt;/label&gt;
      &lt;label for=&quot;checkbox2&quot;&gt;&lt;input type=&quot;checkbox&quot; id=&quot;checkbox2&quot; checked style=&quot;display: none;&quot;&gt;&lt;span class=&quot;custom checkbox checked&quot;&gt;&lt;/span&gt; Label for Checkbox&lt;/label&gt;
      &lt;label for=&quot;checkbox3&quot;&gt;&lt;input type=&quot;checkbox&quot; CHECKED id=&quot;checkbox3&quot;&gt; Label for Checkbox&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Custom Selects --&gt;
  &lt;label for=&quot;customDropdown&quot;&gt;Dropdown Label&lt;/label&gt;
  &lt;select style=&quot;display:none;&quot; id=&quot;customDropdown&quot;&gt;
    &lt;option SELECTED&gt;This is a dropdown&lt;/option&gt;
    &lt;option&gt;This is another option&lt;/option&gt;
    &lt;option&gt;Look, a third option&lt;/option&gt;
  &lt;/select&gt;
  &lt;div class=&quot;custom dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;current&quot;&gt;
      This is a dropdown
    &lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;selector&quot;&gt;&lt;/a&gt;
    &lt;ul&gt;
      &lt;li&gt;This is a dropdown&lt;/li&gt;
      &lt;li&gt;This is another option&lt;/li&gt;
      &lt;li&gt;Look, a third option&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/form&gt;
</code></pre>            </li>
          </ul>

          <hr>

          <div class="panel">
            <h3>Listen to Navi</h3>
            <h5 class="subheader">Navigation helps tell people where they should go on your site or app. We've included lots of handy elements that will let you build quick navigation.</h5>
            <a class="button" href="navigation.php">Learn about our navigation &raquo;</a>
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
          <li class="active"><a href="forms.php">Forms</a></li>
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