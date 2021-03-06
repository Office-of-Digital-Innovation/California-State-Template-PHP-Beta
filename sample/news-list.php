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

<title>Sample - News List</title>

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
                    <li class="active">News List</li>
                </ol>



                <h1>News Lists</h1>
                <p>A news list contains a repeating group of news items. To begin, wrap this module in a <code>&lt;section class="news-list"&gt;</code>. Then use <code>&lt;article class="news-item"&gt;</code> to group each intividual article.</p>
                <p>A <code>.news-item</code> has the following primary child elements.</p>
                <ul>
                    <li><code>.thumbnail</code> - Contains an image that is at least 150px wide</li>
                    <li><code>.headline</code> - A short article title that is linkable to article detail</li>
                    <li><code>.description</code> - A short summary or teaser for the article</li>
                    <li><code>.published</code> - Date the article was published</li>
                </ul>



                <?php include("../sample/modules/schema-boilerplate.php"); ?>
                <hr>

                    <div class="group">



                        <div class="three-quarters">
                            <h2>News Blocks</h2>
                            <?php include("../sample/modules/news-block.php"); ?>
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#news-block">Show Source Code</button>
                            <!-- Modal -->
                            <div class="modal fade" id="news-block" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">HTML Markup</h4>
                                        </div>
                                        <div class="modal-body">
                                            <label for="sample-news-blocks">Source Code:</label>
                                            <textarea id="sample-news-blocks" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-block.php"); ?></textarea>
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
                    <div class="three-quarters">
                        <h2>Image News Blocks</h2>
                        <?php include("../sample/modules/news-image.php"); ?>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#image-blocks">Show Source Code</button>
                        <!-- Modal -->
                        <div class="modal fade" id="image-blocks" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">HTML Markup</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label for="sample-image-blocks">Source Code:</label>
                                        <textarea id="sample-image-blocks" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-image.php"); ?></textarea>
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
                <div class="two-thirds">
                    <h2>News List</h2>
                    <?php include("../sample/modules/news-list.php"); ?>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#news-list">Show Source Code</button>

                    <!-- Modal -->
                    <div class="modal fade" id="news-list" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Source Code</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- modal content start-->
                                    <div class="tab-group">
                                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                                            <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                                            <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content responsive">
                                            <div class="tab-pane active" id="html">
                                                <textarea id="sample-news-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list.php"); ?></textarea>
                                            </div>
                                            <div class="tab-pane" id="microdata">
                                                <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each news-item.</p>
                                                <textarea id="sample-news-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list-schema.php"); ?></textarea>
                                            </div>
                                        </div>
                                    </div><!--/ modal content end-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- / End Modal -->
                    <hr>
                </div>
                <div class="third">
                        <h2>Sidebar Example:</h2>
                        <p>Using the <code>.news-item</code> module in the sidebar makes use of the same markup however it omits the <code>.description</code> node for sake of saving space.</p>
                        <div class="panel panel-standout highlight">
                            <div class="panel-heading">
                                <h4><span class="ca-gov-icon-info"></span> Latest News Headlines</h4>
                            </div>
                            <div class="panel-body">
                                <?php include("../sample/modules/news-list-sidebar.php"); ?>
                                <hr>              
                            </div>
                        </div>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#news-headlines">Show Source Code</button>

                        <!-- Modal -->
                        <div class="modal fade" id="news-headlines" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">HTML Markup</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label for="sample-news-list-sidebar">Source Code:</label>
                                      <textarea id="sample-news-list-microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list-sidebar.php"); ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- / End Modal -->
                    </div>

                </div>
                        
              
            </main>

        
        


    </div><!--/end section-->
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>