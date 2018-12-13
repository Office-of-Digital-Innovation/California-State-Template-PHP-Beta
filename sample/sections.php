﻿<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.3

Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Sections</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header">
  <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
        
        <!-- Include Utility Header -->
		<?php include_once("../ssi/utility-header.php"); ?>	
        
        <!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

		<!-- Include Branding -->
		<?php include_once("../ssi/branding.php"); ?>

    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php"); ?>
    <div class="navigation-search">
        <div id="head-search" class="search-container internal">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>

        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    </div>
  <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <main class="main-primary">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Tables</li>
            </ol>
        </div>

        <div class="section">
            <div class="container">
                <div class="group">
                    <div class="two-thirds">
                        <h1>Sections</h1>
                        <p>Sections are a new layout tool provided in the CA Gov template v5 that provide authors with a means of creating modern looking pages often associated with promotion pages or homepages. Because sections fill the entire horizontal space it's important to note that they were intended to be used as a full page layout component and should not be used inside v4 columns.</p>

                        <h2>Backwards Compatability</h2>
                        <p>A slight change was made to the v5 template to accomodate this full width layout while maintaining backwards compatability with v4 templates. Specifically v4 templates have a <code>.wrapper</code> div just inside the <code>.main-content</code> div. The <code>.wrapper</code> class is not used in this layout.</p>

                        <p>If organizations wish to use the new <code>.section</code> feature within pages already created using the v4 methodology there are some things that can be done but they are not without limitations for some systems.</p>
                        <p><strong>1)</strong> Webmasters can manually remove the <code>.wrapper</code> class and wrap <code>.section</code>'s around the content. Note: Failing to put content into a section will cause the content to fill the full horizontal space.</p>
                        <p><strong>2)</strong> If changing the html is not possible the following javascript can be included. Note: Templates using <code>.two-column</code> layout will display the <code>.main-secondary</code> below the main content. </p>

                        <pre>
&lt;script&gt;
$(document).ready(function() {
    // Backward compatability fix swapping deprecated wrapper with new sections classe
    $(&#39;.main-primary &#39;).closest(&#39;div.wrapper&#39;).removeClass(&#39;wrapper&#39;).addClass(&#39;section&#39;);
});
&lt;/script&gt;
                        </pre>

                        <h2>Section Variations</h2>
                        <p>Like many other components, a <code>.section</code> can be styled with a number of extension classes. Append one of the following classes to the <code>.section</code> div. </p>
                        <ul>
                            <li><code>.section-default</code></li>
                            <li><code>.section-understated</code></li>
                            <li><code>.section-primary</code></li>
                            <li><code>.section-standout</code></li>
                            <li><code>.section-inverted</code></li>
                            <li><code>.collapsed</code> (can be applied in tandom with all the above to remove the top and bottom padding)</li>
                        </ul>

                        <p>A <code>.section</code> without any additional style classes will be white.</p>

                    </div>
                    <div class="third">
                        <h2><label for="sample">Source Code:</label></h2>
                        <textarea id="sample" class="form-control" rows="10" cols="80"><?php include("../sample/modules/section-default.php"); ?></textarea>
                    </div>
                </div>



            </div>
        </div>

        <style>
        .btn {
          margin-top: 0.5em;
          margin-bottom: 0.5em;
          }
          </style>


        <!-- SECTION DEFAULT -->
        <div class="section section-default">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Default</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-default">Source Code:</label></h2>
                        <textarea id="sample-default" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-default.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>
                    
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION PRIMARY -->
        <div class="section section-primary">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Primary</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-primary">Source Code:</label></h2>
                        <textarea id="sample-primary" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-primary.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION STANDOUT -->
        <div class="section section-standout">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Standout</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-standout">Source Code:</label></h2>
                        <textarea id="sample-standout" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-standout.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>
                    
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION UNDERSTATED -->
        <div class="section section-understated">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Understated</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-understated">Source Code:</label></h2>
                        <textarea id="sample-understated" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-understated.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- PARALLAX BACKGROUND -->
        <div class="section section-standout">
            <div class="parallax-bg" style="background-image:url(images/background.jpg)"></div>
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Parallax Background</h2>
                        <p>A parallax effect is a popular effect where the background appears to scroll at a sligtly slower speed than the foreground. To achieve this effect place a div inside <code>.section</code> just before the <code>.container</code> Depending on the amount of content (height of the section) some background images may look better than others. You may need a taller image for long sections. <em>The recommended approach is to use parallax sections only for short content areas.</em></p>
                    </div>
                    <div class="half">
                        <h2><label for="sample-parallax">Source Code:</label></h2>
                        <textarea id="sample-parallax" class="form-control" rows="7" cols="80"><?php include("../sample/modules/section-parallax.php"); ?></textarea>
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION INVERTED -->
        <div class="section section-inverted">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Inverted</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-inverted">Source Code:</label></h2>
                        <textarea id="sample-inverted" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-inverted.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>
                    
                     </div>
                </div>
            </div>
        </div>


        <!-- SECTION COLLAPSED -->
        <div class="section collapsed">
            <div class="container">
                <div class="group">
                    <div class="half">
                        <h2>Section Collapsed</h2>
                        <?php include("../sample/modules/section-content-test.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-collapsed">Source Code:</label></h2>
                        <textarea id="sample-collapsed" class="form-control" rows="6" cols="80"><?php include("../sample/modules/section-collapsed.php"); ?></textarea>
                        <hr>
                        <h3>Panels</h3>
                        <?php include("../sample/modules/panels.php"); ?>
                        <?php include("../sample/modules/images.php"); ?>
                    
                    </div>
                </div>
            </div>
        </div>




    </main>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>
