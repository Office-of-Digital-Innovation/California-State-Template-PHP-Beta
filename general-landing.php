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

  <title>General Landing Page</title>

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

      <div id="head-search" class="search-container">
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
            <div class="section section-standout">
                <div class="container">
                    <h1 class="m-b-0">Working In California</h1>
                </div>
            </div>
            
            <!--Hero Info-->
            <section class="p-y-200--md p-y-80">
                <div class="container text-center">
                    <div class="row">
                        <div class="half offset-quarter">
                            <div class="m-b-lg">
                                <h2 class="display m-b">
                                    Work for 
                                    <span class="color-primary">California!</span>
                                </h2>
                                <i class="ca-gov-icon-favorite color-primary font-size-70x"></i>
                                <i class="ca-gov-icon-favorite font-size-95x color-primary"></i>
                                <i class="ca-gov-icon-favorite color-primary"></i>
                                <i class="ca-gov-icon-favorite font-size-95x color-primary"></i>
                                <i class="ca-gov-icon-favorite font-size-70x color-primary"></i>
                            </div>
                            <p class="lead m-b-60">From entry-level jobs to student opportunities to full career paths, the state of California offers a wide variety of opportunities for job applicants. The state offers comprehensive benefits for its employees, who provide essential and exceptional service to millions of Californians every day.</p>
                            <a class="btn btn-lg btn-primary rounded-15" href="https://www.jobs.ca.gov/" target="_blank">
                                <i class="ca-gov-icon-online-services"></i> Apply Here
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <div class="section section-default">
                <div class="container">
                    <div class="group">
                        <div class="third m-b-md">
                            <!-- Article -->
                            <article class="block-hover">
                                <figure class="bg-overlay">
                                    <img class="img-fluid w-100 block-hover_zoom" src="/sample/images/service-find-job.jpg" alt="Image Description">
                                </figure>

                                <header class="w-100 text-center absolute-centered p-x">
                                    <span class="btn btn-xs btn-primary rounded-0" href="#">CalHR</span>
                                    <h4 class="m-y-sm">
                                        Find a Job
                                    </h4>

                                    <small class="color-white">
                                        <i class="ca-gov-icon-time pos-rel"></i> July 04, 2016
                                    </small>
                                </header>

                                <a class="news-link" href="#">Read More</a>
                            </article>
                            <!-- End Article -->
                        </div>
                        <div class="third m-b-md">
                            <!-- Article -->
                            <article class="block-hover">
                                <figure class="bg-overlay">
                                    <img class="img-fluid w-100 block-hover_zoom" src="/sample/images/service-tiles/service-file-unemployment.jpg" alt="Image Description">
                                </figure>

                                <header class="w-100 text-center absolute-centered p-x">
                                    <span class="btn btn-xs btn-primary rounded-0" href="#">EDD</span>
                                    <h4 class="m-y-sm">
                                        File for Unemployment
                                    </h4>

                                    <small class="color-white">
                                        <i class="ca-gov-icon-time pos-rel"></i> July 04, 2016
                                    </small>
                                </header>

                                <a class="news-link" href="#">Read More</a>
                            </article>
                            <!-- End Article -->
                        </div>
                        <div class="third m-b-md">
                            <!-- Article -->
                            <article class="block-hover">
                                <figure class="bg-overlay">
                                    <img class="img-fluid w-100 block-hover_zoom" src="/sample/images/service-tiles/service-paid-family-leave.jpg" alt="Image Description">
                                </figure>

                                <header class="w-100 text-center absolute-centered p-x">
                                    <span class="btn btn-xs btn-primary rounded-0" href="#">EDD</span>
                                    <h4 class="m-y-sm">
                                        File for paid family leave insurance
                                    </h4>

                                    <small class="color-white">
                                        <i class="ca-gov-icon-time pos-rel"></i> July 04, 2016
                                    </small>
                                </header>

                                <a class="news-link" href="#">Read More</a>
                            </article>
                            <!-- End Article -->
                        </div>
                    </div>

                    <!-- End Image Block -->


                </div>
            </div>
            
            <div class="section section-standout">
                <div class="container">
                    <div class="row">
                        <!-- Counter Module -->
                        <div class="col-md-3 col-sm-6">
                            <div class="stat-counter text-accent-p1">
                                <span class="number-counter">18.9</span>
                            </div>
                            <p class="text-center">Million workers in California's labor force</p>
                        </div>
            
                        <!-- Counter Module -->
                        <div class="col-md-3 col-sm-6 ">
                            <div class="stat-counter text-accent4">
                                <span class="number-counter">17.9</span>
                            </div>
                            <p class="text-center">Million workers are employed</p>
                        </div>
            
                        <!-- Counter Module -->
                        <div class="col-md-3 col-sm-6">
                            <div class="stat-counter text-accent8">
                                <span class="number-counter">1</span>
                            </div>
                            <p class="text-center">Million workers are unemployed</p>
                        </div>
            
                        <!-- Counter Module -->
                        <div class="col-md-3 col-sm-6">
                            <div class="stat-counter text-accent-s2">
                                <span class="number-counter">5</span><span class="unit">%</span>
                            </div>
                            <p class="text-center">Unemployment Rate</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-default">
                <div class="container">                    
                    <div class="row">
                        <div class="half">
                            <!-- Start Card -->
                            <div class="card card-default">
                                <div class="card-block" id="collapseCALHR" itemscope itemtype="http://schema.org/Organization">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-4">
                                            <img class="img-responsive" src="sample/images/logo-calhr.png" alt="">
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <a href="" class="lead" itemprop="name">Department of Human Resources</a>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p>Etiam porta sem malesuada magna mollis euismod. Morbi leo risus.</p>
                                                    <div class="collapse collapseCALHR">
                                                        <p itemprop="description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus.</p>
                                                        <p class="other">
                                                            General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="" class="btn btn-secondary btn-block btn-sm">Agency Details</a>
                                                    <div class="collapse collapseCALHR">
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Contact Agency</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Show on Map</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Live Chat</a>
                                                        <ul class="list-inline list-unstyled">
                                                            <li><a href=""><span class="ca-gov-icon-share-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-googleplus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center m-b">
                                     <a href="javascript:;" role="button" data-toggle="collapse" data-parent="#collapseCALHR" aria-expanded="false" aria-controls="collapseCALHR" data-target=".collapseCALHR">
                                     <span class="toggle-more"></span><span class="sr-only">Open</span></a> 
                                </div>
                            </div>
                            <!-- End Card -->
                            
                            <!-- Start Card -->
                            <div class="card card-default">
                                <div class="card-block" id="collapseEDD" itemscope itemtype="http://schema.org/Organization">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-4">
                                            <img class="img-responsive" src="sample/images/logo-edd.jpg" alt="">
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <a href="" class="lead" itemprop="name">Employment Development Department</a>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam auctor fringilla.</p>
                                                    <div class="collapse collapseEDD">
                                                        <p itemprop="description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus.</p>
                                                        <p class="other">
                                                            General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="" class="btn btn-secondary btn-block btn-sm">Agency Details</a>
                                                    <div class="collapse collapseEDD">
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Contact Agency</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Show on Map</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Live Chat</a>
                                                        <ul class="list-inline list-unstyled">
                                                            <li><a href=""><span class="ca-gov-icon-share-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-googleplus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center m-b">
                                     <a href="javascript:;" role="button" data-toggle="collapse" data-parent="#collapseEDD" aria-expanded="false" aria-controls="collapseEDD" data-target=".collapseEDD">
                                     <span class="toggle-more"></span><span class="sr-only">Open</span></a> 
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        
                        <div class="half">
                            <!-- Start Card -->
                            <div class="card card-default">
                                <div class="card-block" id="collapseSCIF" itemscope itemtype="http://schema.org/Organization">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-4">
                                            <img class="img-responsive" src="sample/images/logo-scif.jpg" alt="">
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <a href="" class="lead" itemprop="name">State Compensation Insurance Fund</a>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                                                    <div class="collapse collapseSCIF">
                                                        <p itemprop="description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus.</p>
                                                        <p class="other">
                                                            General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="" class="btn btn-secondary btn-block btn-sm">Agency Details</a>
                                                    <div class="collapse collapseSCIF">
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Contact Agency</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Show on Map</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Live Chat</a>
                                                        <ul class="list-inline list-unstyled">
                                                            <li><a href=""><span class="ca-gov-icon-share-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-googleplus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center m-b">
                                     <a href="javascript:;" role="button" data-toggle="collapse" data-parent="#collapseSCIF" aria-expanded="false" aria-controls="collapseSCIF" data-target=".collapseSCIF">
                                     <span class="toggle-more"></span><span class="sr-only">Open</span></a> 
                                </div>
                            </div>
                            <!-- End Card -->
                            
                            <!-- Start Card -->
                            <div class="card card-default">
                                <div class="card-block" id="collapse5678" itemscope itemtype="http://schema.org/Organization">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-4">
                                            <img class="img-responsive" src="sample/images/logo-dmv.png" alt="">
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <a href="" class="lead" itemprop="name">Department of Motor Vehicles</a>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p>Some short teaser content. Aenean lacinia bibendum consectetur.</p>
                                                    <div class="collapse collapse5678">
                                                        <p itemprop="description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus.</p>
                                                        <p class="other">
                                                            General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                                            Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <a href="" class="btn btn-secondary btn-block btn-sm">Agency Details</a>
                                                    <div class="collapse collapse5678">
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Contact Agency</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Show on Map</a>
                                                        <a href="" class="btn btn-secondary btn-block btn-sm">Live Chat</a>
                                                        <ul class="list-inline list-unstyled">
                                                            <li><a href=""><span class="ca-gov-icon-share-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                                            <li><a href=""><span class="ca-gov-icon-share-googleplus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center m-b">
                                     <a href="javascript:;" role="button" data-toggle="collapse" data-parent="#collapse5678" aria-expanded="false" aria-controls="collapse5678" data-target=".collapse5678">
                                     <span class="toggle-more"></span><span class="sr-only">Open</span></a> 
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <div class="text-center m-t"><a href="" class="btn btn-secondary">See More</a></div>
                </div>
            </div>
            
            <div class="section section-standout">
                <div class="container">
                    <div class="carousel owl-carousel carousel-content">
                        <div class="item">
                            <a href=""><img src="/sample/images/ad-ui-online.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="/sample/images/ad-apps.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="/sample/images/ad-survey.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section -->
            
            <div class="section-understated">
                <div class="container">
                    <div class="group">
                            <div class="col-md-offset-2 col-lg-8">
                                    <?php include("sample/modules/icon-blocks.php"); ?>
                            </div>
                     </div>
                 </div>
            </div>

                <div class="section">
                    <div class="container">
                        <h2>Related Links</h2>
                        <div class="group">
                            <div class="half">
                                <div class="media">
                                    <div class="media-left"><span class="ca-gov-icon-lightbulb color-primary biggest"></span></div>
                                    <div class="media-body">
                                        <h3 class="h4">Job Opportunities</h3>
                                        <ul class="list-standout">
                                            <li>
                                                <a href="/">California apprenticeship Program</a>
                                                <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                            </li>
                                            <li>
                                                <a href="/">One Stop Career Center System</a>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                                            </li>
                                            <li>
                                                <a href="/">CALPERS Member Education Programs</a>
                                                <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Integer dapibus posuere velit aliquet.</p>
                                            </li>
                                            <li>
                                                <a href="/">State Training Resources</a>
                                                <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="half">
                                <div class="media">
                                    <div class="media-left"><span class="ca-gov-icon-graduate color-primary biggest"></span></div>
                                    <div class="media-body">
                                        <h3 class="h4">Training</h3>
                                        <ul class="list-standout">
                                            <li>
                                                <a href="/">California apprenticeship Program</a>
                                                <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                            </li>
                                            <li>
                                                <a href="/">One Stop Career Center System</a>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.</p>
                                            </li>
                                            <li>
                                                <a href="/">CALPERS Member Education Programs</a>
                                                <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Integer dapibus posuere velit aliquet.</p>
                                            </li>
                                            <li>
                                                <a href="/">State Training Resources</a>
                                                <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="text-center m-t-lg"><a href="" class="btn btn-secondary">See More</a></div> -->
                    </div>
                </div>
                <!-- End Section -->

                <div class="section">
                    <div class="container">
                        <h2>Related News</h2>
                        <div class="group">
                            <div class="news-list half">
                                <article class="news-item">
                                    <div class="thumbnail"><img src="/sample/images/150x100.gif" alt="sample image"></div>
                                    <div class="info">
                                        <div class="headline"><a href="">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</a></div>
                                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <div class="published">Published: <time datetime="2014-10-20">Oct 20, 2014</time></div>
                                    </div>
                                </article>

                                <article class="news-item">
                                    <div class="thumbnail"><img src="/sample/images/150x100.gif" alt="sample image"></div>
                                    <div class="info">
                                        <div class="headline"><a href="">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</a></div>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.</p>
                                        <div class="published">Published: <time datetime="2014-10-20">Oct 20, 2014</time></div>
                                    </div>
                                </article>
                            </div>

                            <div class="news-list half">
                                <article class="news-item">
                                    <div class="thumbnail"><img src="/sample/images/150x100.gif" alt="sample image"></div>
                                    <div class="info">
                                        <div class="headline"><a href="">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</a></div>
                                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <div class="published">Published: <time datetime="2014-10-20">Oct 20, 2014</time></div>
                                    </div>
                                </article>

                                <article class="news-item">
                                    <div class="thumbnail"><img src="/sample/images/150x100.gif" alt="sample image"></div>
                                    <div class="info">
                                        <div class="headline"><a href="">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</a></div>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.</p>
                                        <div class="published">Published: <time datetime="2014-10-20">Oct 20, 2014</time></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="text-center m-t"><a href="" class="btn btn-secondary">See More</a></div>
                    </div>
                </div>
                <!-- End Section -->
</main>
    </div>

  <?php include_once("ssi/global-footer.php"); ?>

  <?php include_once("ssi/scripts.php"); ?>

</body>

</html>
