﻿<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->


<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Megamenu Navigation</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">

<header role="banner" id="header" class="global-header fixed">
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
      <!-- Include Navigation -->
      <?php include("../sample/modules/nav-megamenu-orig.php"); ?>
      
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>

    </div>
    <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Megamenu (State Template v4)</li>
            </ol>
            
        	<h1>State Template v4 Original Megamenu</h1>
            <p>This megamenu has similar look and feel as the original State Template v4 megamenu. The functionality in both template v5 and template v4 is the same: the megamenu displays dropdown panels for sub navigation when the user hovers over a primary link. This style of menu can be set by including the <code>.megadropdown</code> as well as <code>.original</code> classes in the <code>&lt;nav&gt;</code> element.</p>
            <p><strong>Example:</strong> <br><code>&lt;nav id="navigation" class="main-navigation megadropdown original"&gt;</code> .</p> 
            <p>In the template distribution this markup can be found in <code>/ssi/navigation.php</code>.
            
          
            <h2>Sub Navigation Images</h2>
             <p>The sub navigation panels in the megamenu include the ability to place images next to the links. 
            Image are included by placing a <code>&lt;div&gt;</code> with class <code>.sub-nav-decoration</code> 
            as the last element in the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>.</p>

            <p>The image is defined as a background image in the <code>style</code> attribute of the <code>.sub-nav-decoration</code> element. 
            The image will automatically be scaled and cropped to fit the provided area.</p>

            <p>The image size and position is determinde by an additional 
            class added to the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>. These classes are as follows: </p>

            <ul>
                <li><code>.with-image-sm-right</code>: Places the image on the right, occupying one third of the sub navigation panel width.</li>
                <li><code>.with-image-md-right</code>: Places the image on the right, occupying half of the panel. l</li>
                <li><code>.with-image-sm-left</code>: Places the image on the left, occupying one third of the panel.</li>
                <li><code>.with-image-md-left</code>: Places the inmage on the left, occupying half of the panel.</li>
            </ul>

            <p>
                <strong>Example:</strong> <br>
            </p>

            <pre>&lt;li class="nav-item"&gt;
    &lt;a href="/" class="first-level-link"&gt;Link 3&lt;/a&gt;
            <strong>&lt;div class="sub-nav with-image-sm-right"&gt;</strong>
        &lt;ul class="second-level-nav"&gt;
            &lt;li&gt;
                …links
            &lt;/li&gt;
        &lt;/ul&gt;
            <strong>&lt;div class="sub-nav-decoration" style="background:url('/sample/images/sample-nav-image.jpg')"&gt;&lt;/div&gt;</strong>
     &lt;/div&gt;
&lt;/li&gt;
</pre>
            
<h2>More Navigation Samples</h2>
	<ul>
        <li><a href="navigation-single.php">Single Level Navigation</a></li>
        <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>	
        <li><a href="navigation-megamenu.php">Megamenu</a></li>
     </ul>

</main>
        
        <div class="main-secondary">
            <?php include("../sample/modules/profile-banners.php"); ?>
        </div>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>