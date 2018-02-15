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
    <?php include_once("../ssi/utility-header.php"); ?>		<!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

		<!-- Include Branding -->
		<?php include_once("../ssi/branding.php"); ?>

    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php"); ?>

    <div class="navigation-search">
      <!-- Include Navigation -->
      <?php include("../sample/modules/nav-megamenu.php"); ?>
      
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
                <li class="active">Megamenu</li>
            </ol>
            
        	<h1>Megamenu Navigation</h1>
            <p>The megamenu displays dropdown panels for sub navigation when the user hovers over a primary link. This style of menu can be set by including the <code>.megadropdown</code> class in the <code>&lt;nav&gt;</code> element.</p>
            <p><strong>Example:</strong> <br><code>&lt;nav id="navigation" class="main-navigation megadropdown"&gt;</code> .</p> 
            <p>In the template distribution this markup can be found in <code>/ssi/navigation.php</code>.
            
            <h2>Fixed Units</h2>
            <p>When you open the mega menu, you may notice a table or grid like look to the sub nav links. In order maintain the grid look the items need to have a <code>.unit</code> class applied. Each unit increment multiplies it's base value by it's unit value. </p>
            
            <ul>
                <li><code>.unit1</code> = 50px</li>
                <li><code>.unit2</code> = 100px</li>
                <li><code>.unit3</code> = 150px</li>
            </ul>
            
            <p>Units become useful when you wish to mix various content into the mega menu while maintaining the grid-like look. For example, a link with a description would likely use a <code>.unit2</code> class making it twice as tall as a link with a class of <code>.unit1</code></p>
            
            <h2>Mixed Content Within Navigation</h2>
            <p>The megamenu allows for the display  optional images or promoted content to the left or right of the sub navigation links. It is also possible to display a short description below each sub navigation link. Use <code>.with-image-left</code> or <code>.with-image-right</code> on the grid container containing the media.</p>
            <pre>&lt;div class=&quot;quarter <strong class="text-accent7">with-image-left</strong>&quot;&gt;<br>    &lt;div class=&quot;nav-media&quot; style=&quot;background:url('/sample/images/sample-nav-image2.jpg')&quot;&gt;&lt;/div&gt;<br>&lt;/div&gt;</pre>
            <p> An example of promoted content might be a public profile, featured service, or a news article. </p>
            
            <h2>Using Columns</h2>
            <p>The megamenu uses the available <a href="/sample/grid.php">grid classes</a> to divide the menu into multiple columns seperating links from media or promoted content. It's not without it's limitations. For example, images or mixed content may be on the left or right of the links, but cannot split links.</p>
            <p class=" alert alert-info">Note: It's not necessary to break up the sub menu links into columns. CSS does this automatically and alows for only one list, making it more future friendly and accessible.</p>
            
            <h3>Positioning</h3>
            <p>When positioning an image or promoted content on the left an <code>.offset-[value]</code> class must also be applied to the link's grid container. The offset value is equal to the images grid container.</p>
            
            <h4>Offset Example:</h4>
<pre>
&lt;div class=&quot;sub-nav&quot;&gt;
    &lt;div class=&quot;three-quarters <strong class="text-accent7">offset-quarter</strong>&quot;&gt;
        &lt;ul class=&quot;second-level-nav&quot;&gt;
            &lt;li class=&quot;unit1&quot;&gt;
                &lt;a href=&quot;/&quot; class=&quot;second-level-link&quot;&gt;Link 1&lt;/a&gt;
            &lt;/li&gt;
            ...
        &lt;/ul&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;<strong class="text-accent7">quarter</strong> <span class="text-accent1">with-image-left</span>&quot;&gt;
        &lt;div class=&quot;nav-media&quot; style=&quot;background:url(&#39;/sample/images/sample-nav-image2.jpg&#39;)&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>     

          
            
<h2>More Navigation Samples</h2>
            <ul>
                <li><a href="navigation-single.php">Single Level Navigation</a></li>
                <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>
                <li><a href="navigation-megamenu-original.php">State Template v4 Original Megamenu</a></li>
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