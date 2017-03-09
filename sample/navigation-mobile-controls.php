<!doctype html>
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

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="primary two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../sample/modules/mobile-controls-sample.php");?>    
    <div class="navigation-search">
        
        <div id="head-search" class="search-container featured-search">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../sample/modules/nav-megamenu.php");?>    
    </div>
    
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Megamenu</li>
            </ol>
            
        	<h1>Mobile Navigation Icon Links</h1>
            <p>The off-canvas mobile navigation menu has two areas for additional link icons: the <strong>mobile header</strong> icons and the <strong>mobile menu</strong> icons.</p> 
            <p>The <strong>mobile header</strong> icons are located on the top right portion of the page header when viewed on a mobile device. (See <a class="gallery-item" href="images/mobile-header-icons-area.jpg" data-gallery="gallery-small">Figure 1</a>). Alternativly, the <strong>mobile menu</strong> icons are located in the top right portion of the expanded menu when viewed on a mobile device (See <a class="gallery-item" href="images/mobile-menu-icons-area.jpg" data-gallery="gallery-small">figure 2</a>).</p>
            
            <p>Modifications to the mobile icons are done in the <code>/ssi/mobile-controls.php</code> file. <strong>NOTE:</strong> To maintain accessibility compliance, use the following format when adding new icons:</p>
            
<pre>
&lt;span class="mobile-control"&gt;&lt;span class="ca-gov-icon-chat" aria-hidden="true">&lt;/span&gt;&lt;span class="sr-only"&gt;Contact&lt;/span&gt;&lt;/span&gt;
</pre>

            <p>You will need to modify only two parts of this snippet. In this example <code>.ca-gov-icon-chat</code> is the class name for the icon. Replace it with any of the provided icon fonts. Check the "<a href="/sample/icon-fonts.php">Icon Fonts</a>" page for a full list of icons supplied with this template.</p>
            <p>The second part is the label for the icon. In the example, the label is "Contact", you should replace it with a short but meaningful label. Note that the label is inside a span with a class of <code>.sr-only</code>. This is a special class that visually hides the label, while allowing screen readers to announces it.</p>
			
            <h2><label for="mobile-control-icons">Source Code:</label></h2>
            <textarea id="mobile-control-icons" class="form-control" rows="10" cols="80"><?php include_once("../sample/modules/mobile-controls-sample.php");?></textarea>
            
            <h2>Location of Icon Areas</h2>
            <div class="gallery gallery-small">
                <div class="item"><a class="gallery-item" href="images/mobile-header-icons-area.jpg" data-gallery="gallery-small"><img src="images/mobile-header-icons-area.jpg" alt="Mobile Header Icons Area"></a><div>Figure 1</div></div>
                <div class="item"><a class="gallery-item" href="images/mobile-menu-icons-area.jpg" data-gallery="gallery-small"><img src="images/mobile-menu-icons-area.jpg" alt="Mobile Menu Icons Area"></a><div>Figure 2</div></div>
            </div>
        </main>
        
        <div class="main-secondary">
            <?php include_once("../sample/modules/profile-banners.php");?>        </div>
    </div>
</div>


<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>