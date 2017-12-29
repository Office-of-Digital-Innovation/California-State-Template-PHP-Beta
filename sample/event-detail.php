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

<title>Sample - Event Detail</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

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
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    </div>
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Event Detail</li>
            </ol>
            
            <h1>Event Detail</h1>
            <p><code>.event-detail</code> is an end page content module for events.  To begin, wrap the contents of the page in a <code>&lt;article class="event-detail"&gt;</code> tag.</p>
            <p>This module makes use of the <code>&lt;header&gt;</code> tag and locates the h1 within it.</p>
            <p>The event detail module contains a number of predefined sections that may or may not be used. For example:</p>
            <ul>
                <li><code>.description</code> - Minimum information that should be included for every event</li>
                <li><code>.presenter</code> - Contains the presenter's name, photo, and bio</li>
                <li>Participants will recieve - Certificates and or credits</li>
                <li>Organizer - date, time, location and cost</li>
            </ul>
            
            
            <?php include("../sample/modules/schema-boilerplate.php"); ?>
            
            <h2>Example:</h2>
            
            <?php include("../sample/modules/event-detail.php"); ?>
            <hr>
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                      <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-detail.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="microdata">
                        <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each event item.</p>
                      <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-detail-schema.php"); ?></textarea>
                    </div>
                </div>
            </div>
            
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>