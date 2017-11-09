﻿<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <!--
California State Template
Version 4.0

Based on Twitter Bootstrap
-->
  <meta charset="utf-8">

  <title>Service Directory</title>

  <meta name="Author" content="State of California" />
  <meta name="Description" content="State of California" />
  <meta name="Keywords" content="California, government" />

  <?php include_once("ssi/head-css-js.php"); ?>

</head>

<!-- possible body classes are "primary" and "two-column" -->

<body>

  <header role="banner" id="header" class="global-header fixed">
    <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Location Bar -->
    <?php include_once("ssi/location-bar.php"); ?>

    <!-- Include Utility Header -->
    <?php include_once("ssi/utility-header.php"); ?>
  
    <!-- Settings Bar -->
    <?php include_once("ssi/settings-bar.php"); ?>

    <!-- Include Branding -->
    <?php include_once("ssi/branding.php"); ?>

    <!-- Include Mobile Controls -->
    <?php include_once("ssi/mobile-controls.php"); ?>

    <div class="navigation-search">

      <div id="head-search" class="search-container ">
        <!-- Include Search -->
        <?php include_once("ssi/search.php"); ?>
      </div>


      <!-- Include Navigation -->
      <?php include_once("ssi/navigation.php"); ?>



    </div>


    <div class="header-decoration"></div>

  </header>


    <div id="main-content" class="main-content">
        <main class="main-primary">

            <div class="section section-default">
                <div class="container">
                    <h1 class="m-b-0">Find a Service</h1>
                </div>
            </div>

            <div class="section section-search collapsed">
                <div class="container">
                    <div class="group">
                        <div class="three-quarters">
                            <form id="agency_form" class="agency-form">
                                <div class="textfield-container">
                                    <label for="search_local_textfield" accesskey="s" class="hidden">Agency Search: </label>
                                    <input type="text" name="q" id="search_local_textfield" class="search-textfield" size="35" autocomplete="off" value="Search" onfocus="if(this.value=='Search')this.value=''" onblur="if(this.value=='')this.value='Search'" />
                                </div>
                                <div class="submit-container">
                                    <button type="submit"><span class="ca-gov-icon-search"><span class="sr-only">Search</span></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="quarter">
                            <a href="#serviceFilters" class="btn btn-secondary filter-toggle toggle-more m-y btn-block-xs" role="button" data-toggle="collapse" data-parent="#serviceFilters" aria-expanded="false" aria-controls="serviceFilters"><span class="toggle-more">Show Filters <span class="ca-gov-icon-filter" aria-hidden="true"></span></span></a>
                        </div>
                    </div>
                    
                    <!-- Filters expand only when requested -->
                    <!-- Use .active class on buttons when selected by user -->
                    <div class="collapse serviceFilters filter-group m-b-sm" id="serviceFilters">
                        Service Type:
                        <div class="btn-row">
                            <a href="" class="btn btn-secondary"><span class="ca-gov-icon-computer"></span> Online</a>
                            <a href="" class="btn btn-secondary"><span class="ca-gov-icon-apps"></span> Applications</a>
                            <a href="" class="btn btn-secondary"><span class="ca-gov-icon-location"></span> Field Office</a>
                        </div>
                        
                        Categories:
                        <div class="btn-row">
                            <a href="" class="btn btn-secondary">Business</a>
                            <a href="" class="btn btn-secondary">Civil Duty</a>
                            <a href="" class="btn btn-secondary">Employment</a>
                            <a href="" class="btn btn-secondary">Family</a>
                            <a href="" class="btn btn-secondary">Health</a>
                            <a href="" class="btn btn-secondary">Home</a>
                            <a href="" class="btn btn-secondary">Records</a>
                            <a href="" class="btn btn-secondary">Recreation</a>
                            <a href="" class="btn btn-secondary">Taxes</a>
                            <a href="" class="btn btn-secondary">Transportation</a>
                        </div>
                    
                    </div>
                </div>
            </div>
            
            

            <div class="section section-default">
                <div class="container">
                    <!-- Results header -->
                    <div class="group m-b">
                        <div class="half">
                            <p class="search-result-stats">xx of xxx results for "keyword"</p>
                        </div>
                        <div class="half text-right">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="sortResultsBy">Sort By:</label>
                                    <select class="form-control" id="sortResultsBy">
                                        <option>Relevance</option>
                                        <option>Alphabetical: (A-Z)</option>
                                        <option>Alphabetical: (Z-A)</option>
                                        <option>Last Updated</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End results header -->
                    
                    <!-- Start Cards -->
                    <div class="group">
                        <div class="half">
                            <!-- CARD -->
                            <div class="card card-default">
                                <div class="card-block" id="collapse1234" itemscope itemtype="http://schema.org/Organization">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- If image is availabele show it -->
                                             <img src="http://www.elegantthemes.com/preview/Divi/wp-content/uploads/2014/04/rock-trail.jpg" alt="" class="img-responsive">  
                                            <!-- If no image but icon is available show it instead -->
                                            <!-- <div class="service-icon-thumbnail ca-gov-icon-travel-car"></div> -->
                                            <!-- If nothing is selected show service icon -->
                                        </div>
                                        <div class="col-md-10">
                                            <a href="" class="lead">Renew Vehicle Registration</a>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p itemprop="name"><a href="">Department of Motor Vehicles</a></p>
                                                    <p itemprop="description">Register your vehicle or renew registration</p>
                                                    <div class="collapse collapse1234">
                                                        <div class="location" itemscope itemtype="http://schema.org/Organization">
                                                            <meta itemprop="name" content="Organization Name Here">
                                                            <p class="other">
                                                                General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                                                Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                                                Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="" class="btn btn-secondary btn-block btn-sm">Service Details</a>
                                                    <div class="collapse collapse1234">
                                                        <a href="/service-profile.php#locations-near-you" class="btn btn-secondary btn-block btn-sm">Locations</a>
                                                        <a href="/service-profile.php#frequently-asked-questions" class="btn btn-secondary btn-block btn-sm">FAQ's</a>
                                                        <ul class="list-inline list-unstyled">
                                                            <li><a href=""><span class="ca-gov-icon-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-google-plus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block text-center">
                                     <a href="javascript:;" role="button" data-toggle="collapse" data-parent="#collapse1234" aria-expanded="false" aria-controls="collapse1234" data-target=".collapse1234">
                                     <span class="toggle-more"></span><span class="sr-only">Open</span></a> 
                                </div>
                            </div>
                            <!-- END CARD -->
                        </div>
                        <div class="half">
                            <!-- Repeat CARD -->
                            <div class="card card-default card-block">
                                <br><br><br><br><div class="text-center">...</div><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>



  <?php include_once("ssi/global-footer.php"); ?>

  <?php include_once("ssi/scripts.php"); ?>

</body>

</html>
