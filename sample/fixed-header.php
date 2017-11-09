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

<title>Sample - Fixed Header</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header fixed">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div><!-- Include Utility Header -->
		<?php include_once("../ssi/utility-header.php"); ?>			
        
        <!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

		<!-- Include Branding -->
		<?php include_once("../ssi/branding.php"); ?>
    
    	<!-- Include Mobile Controls -->
    	<?php include_once("../ssi/mobile-controls.php"); ?>
    
    <div class="navigation-search">
              
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>

        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    
    </div>   
    
		<!-- Search Results -->
    <div class="search-results-container">
    <?php include_once("../ssi/search-results.php"); ?>
    </div>  
       
</header>

    
	<!-- Include Page Template -->
    <?php include_once("../ssi/header-large-banner.php"); ?>
    

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Fixed Header</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1 id="title">Fixed Header</h1>
                  <p>There are two header positioning options available to choose from. The default is a header that scrolls with the page as in previous templates. The new opion is a fixed position header that remains fixed to the top of the page at all times. An added feature of this option is that as the page is scrolled down the header becomes more compact to provide more real estate for the content area.</p>
                    <p>To use the fixed header option add the <code>.fixed</code> class to the header div tag on your page.</p>
              </div>
                 
              <div class="half p-t-lg m-t-lg">
<pre>
&lt;header role=&quot;banner&quot; id=&quot;header&quot; class=&quot;global-header <strong>fixed</strong>&quot;&gt;
...
&lt;/header&gt;
</pre>
                    <p><span class="label label-info">NOTE:</span> The <code>.fixed</code> class may affect how some body elements  render on your page in relation to the top of page positioning. Please test accordingly.                </p>
                    
				</div>
          <div class="p-l-sm">
           <h2>Demonstration </h2>
            <p>Toggle the button to add or remove the ask buttons below the featured search bar.</p>
          
            <button class="toggleHeader btn btn-secondary m-r-sm m-b-sm">Remove Fixed Header</button>
            <p>&nbsp;</p>
				</div>
           <div class="clearfix"></div>
           <hr />
           <?php include("../sample/modules/headers.php"); ?>
           
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

<script>
// -- DEMONSTRATION ONLY! -- //
$(document).ready(function(){ 

    // Toggle .fixed header class
    $(".toggleHeader").click(function() {
        var btnLabel = $(this);
        // Toggle body class and button text when clicked
        if ($(this).html() == 'Add Fixed Header') {
            btnLabel.html('Remove Fixed Header');
			window.scrollTo(0, 0);
			location.reload();
			
        } else {
            btnLabel.html('Add Fixed Header');
      		$("#header").removeClass("fixed");
			$("#main-content").css("padding-top", "0");
			$("#title").text("Fixed Header (Removed)");
			window.scrollTo(0, 0);
		
        }
    });
});
</script>

</body>
</html>