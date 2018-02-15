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

<title>Sample - Icon Blocks</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>
<style>

</style>
</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>    
        <!-- Location Bar -->        
		<?php include_once("../ssi/location-bar.php"); ?>
        
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
        <main class="main-primary">
            <div class="section">
                <div class="container">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Examples</a></li>
                    <li class="active">Icon Blocks</li>
                </ol>



                <h1>Icon Blocks</h1>
                <p>Icons can support your content. With icons you can quickly sum up what your text is about. Sometimes, icons can even be enough to communicate content, which makes reading additional text unnecessary. </p>


                <h2>Example:</h2>
                <hr />

                <div class="group">



                    <div class="col-md-offset-2 three-quarters">
                        <h2>Icon Blocks</h2>


                        <?php include("../sample/modules/icon-blocks.php"); ?>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#icon-blocks">Show Source Code</button>
                        <!-- Modal -->
                        <div class="modal fade" id="icon-blocks" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">HTML Markup</h4>
                                    </div>
                                    <div class="modal-body">
                                      <label for="sample-image-blocks">Source Code:</label>
                                      <textarea id="sample-image-blocks" class="form-control" rows="10" cols="80"><?php include("../sample/modules/icon-blocks.php"); ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- / End Modal -->
                    </div>
                </div>
                <hr>

                <div class="group">
                    <div class="three-quarters col-md-offset-2">
                        <h2>Icon Image Blocks</h2>


                        <?php include("../sample/modules/icon-image-blocks.php"); ?>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#icon-image-blocks">Show Source Code</button>
                        <!-- Modal -->
                        <div class="modal fade" id="icon-image-blocks" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">HTML Markup</h4>
                                    </div>
                                    <div class="modal-body">
                                      <label for="sample-links">Source Code:</label>
                                      <textarea id="sample-links" class="form-control" rows="10" cols="80"><?php include("../sample/modules/icon-image-blocks.php"); ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- / End Modal -->
                    </div>
                </div>
            </div>
            </div><!--/end section-->


            <div class="section section-standout">
                <div class="parallax-bg" style="background-image: url(&quot;images/background.jpg&quot;); height: 607.1px; transform: translate(0px, 207.545px);"></div>
                <div class="container">
                    <?php include("../sample/modules/icon-links.php"); ?>

                    <button type="button" class="btn btn-default btn-sm m-t-md" data-toggle="modal" data-target="#icon-link">Show Source Code</button>
                    

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="icon-link" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">HTML Markup</h4>
                        </div>
                        <div class="modal-body">
                            <label for="sample-news-blocks">Source Code:</label>
                            <textarea id="sample-news-blocks" class="form-control" rows="10" cols="80"><?php include("../sample/modules/icon-links.php"); ?></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div><!-- / End Modal -->


            
        </main>





    </div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>