<!doctype html>
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

<title>Sample - Spacing</title>

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
      <!-- Include Navigation -->
      <?php include_once("../ssi/navigation.php"); ?>
      
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
                <li class="active">Spacing</li>
            </ol>
            
            <h1>Generic Spacing Classes</h1>
                
                <div class="group">
                  <div class="two-thirds">
                        <p>Assign <code>margin</code> or <code>padding</code> to an element or a subset of it’s sides with shorthand classes. Includes support for individual properties, all properties, vertical only and horizontal only properties.</p>
                        <h2>Naming Convention</h2>
                        <p>The naming convention used can be broken down into three parts. </p>
                        <p><strong>Part 1:</strong> can be <code>m</code> or <code>p</code> and relates to Margin or Padding respectivly.</p>
                        <p><strong>Part 2:</strong> corolates to the margin or padding position. </p>
                        
                    <ul class="list-unstyled m-x-md m-b-md">
                            <li><code>a</code> = All</li>
                            <li><code>t</code> = Top</li>
                            <li><code>r</code> = Right</li>
                            <li><code>b</code> = Bottom</li>
                            <li><code>l</code> = Left</li>
                            <li><code>x</code> = x axis or Left &amp; Right</li>
                            <li><code>y</code> = y axis or Top &amp; Bottom</li>
                        </ul>
                        
                        <p><strong>Part 3:</strong> refers to how much padding or margin an element receives and is based on multiples of the base font size. (Currently 16px) It can have the following arguments <code>0</code> = None, <code>md</code> = x1.5, <code>lg</code> = x3</p>                      
<pre>
&lt;ul class=&quot;list-unstyled <strong>m-x-md m-b-md</strong>&quot;&gt;
</pre>
					  <p>This code sample illustrates the spacing classes used in the Part 2 unordered list above.   <code>m-x-md</code> defines a medium margin for the left and right axis. <code>m-b-md</code> is setting the bottom margin to a medium height.</p>
                        
                    </div>
                </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>