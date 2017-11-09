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
        Version 5.0

        Based on Twitter Bootstrap
    -->
    <meta charset="utf-8">
    <title>Santa Barbara Color Scheme</title>
    <meta name="Author" content="State of California" />
    <meta name="Description" content="State of California" />
    <meta name="Keywords" content="California, government" />
    <!--HEAD INCLUDE-->
    <!-- head content, for all pages -->
    <!-- Use highest compatibility mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <!-- for Blackberry, AvantGo -->
    <meta name="MobileOptimized" content="320">
    <!-- for Windows mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <!-- For all browsers -->
    <link rel="stylesheet" href="/css/cagov.core.css">
    <script src="/js/search.js"></script>
    <!--
    Step 3
    Select a color scheme:

    <link rel="stylesheet" href="/css/colorscheme-oceanside.css">
    <link rel="stylesheet" href="/css/colorscheme-orangecounty.css">
    <link rel="stylesheet" href="/css/colorscheme-pasorobles.css">
    <link rel="stylesheet" href="/css/colorscheme-santabarbara.css">
    <link rel="stylesheet" href="/css/colorscheme-sierra.css">
    -->
    <link rel="stylesheet" href="/css/colorscheme-santabarbara.css">
    <!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="/js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <!-- modernizr.com, feature detection -->
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="/js/libs/modernizr-extra.min.js"></script>

    <!-- Load jQuery from CDN with fallback to local copy -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script>
    //Fall back to local copy if no jquery found
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/js/libs/jquery-1.12.4.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>

    <!-- For iPad 3-->
    <link rel="apple-touch-icon" sizes="144x144" href="/images/template2014/apple-touch-icon-144x144.png">
    <!-- For iPhone 4 -->
    <link rel="apple-touch-icon" sizes="114x114" href="/images/template2014/apple-touch-icon-114x114.png">
    <!-- For iPad 1-->
    <link rel="apple-touch-icon" sizes="72x72" href="/images/template2014/apple-touch-icon-72x72.png">
    <!-- For iPhone 3G, iPod Touch and Android -->
    <link rel="apple-touch-icon" href="/images/template2014/apple-touch-icon-57x57.png">
    <!-- For Nokia -->
    <link rel="shortcut icon" href="/images/template2014/apple-touch-icon-57x57.png">
    <!-- For everything else -->
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Activate ClearType for Mobile IE -->
    <!--[if IE]>
    <meta http-equiv="cleartype" content="on">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/libs/html5shiv.min.js"></script>
      <script src="/js/libs/respond.min.js"></script>
    <![endif]-->

    <!--END HEAD INCLUDE-->

    <style type="text/css">
        div.outer {
            border: 1px solid #ccc;
            margin: 0 auto;
            padding: 1px;
            width: 88px;
        }

        div.shadow {
            padding: 1px;
        }

        div.color {
            width: 80px;
            height: 80px;
            padding: 0;
            margin: 0;
        }

        div.caption {
            color: #555;
            font-size: 12px;
            line-height: 16px;
            margin: 0 0 0 10px;
            text-align: center;
        }
    </style>

</head>
<body>
    <header role="banner" id="header" class="global-header fixed">
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

    </header>
    <div id="main-content" class="main-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Santa Barbara</li>
            </ol>
        </div>
        <main class="main-primary">
            <div class="section">
                <!-- Content Demonstration -->
                <div class="container">
                    <h1>Santa Barbara Theme</h1>
                    <h2>Theme Main Colors</h2>

                    <div class="group m-b-lg">
                        <div class="quarter">
                            <div class="outer">
                                <div class="shadow" style="border:1px solid #c67b45;background-color:#e98741;">
                                    <div class="color" style="background-color:#FF9B53;"></div>
                                </div>
                            </div>
                            <div class="caption"><h4>.color-highlight<br />@color-p1</h4>HEX: #FF9B53<br>RGB: 255,155,83</div>
                        </div>
                        <div class="quarter">
                            <div class="outer">
                                <div class="shadow" style="border:1px solid #463e4d;background-color:#5b4f67;">
                                    <div class="color" style="background-color:#60617d;"></div>
                                </div>
                            </div>
                            <div class="caption"><h4>.color-primary<br />@color-p2</h4>HEX: #60617d<br />RGB: 96,97,125</div>
                        </div>

                        <div class="quarter">
                            <div class="outer">
                                <div class="shadow" style="border:1px solid #423331;background-color:#573d3a;">
                                    <div class="color" style="background-color:#664945;"></div>
                                </div>
                            </div>
                            <div class="caption"><h4>.color-standout<br />@color-p3</h4>HEX: #664945<br />RGB: 102,73,69</div>
                        </div>
                        <div class="quarter">
                            <div class="outer">
                                <div class="shadow" style="border:1px solid #d1bda9;background-color:#eddac8;">
                                    <div class="color" style="background-color:#FFEBD7;"></div>
                                </div>
                            </div>
                            <div class="caption"><h4>.color-s1<br />@color-s1</h4>HEX: #FFEBD7<br />RGB: 255,235,215</div>
                        </div>
                    </div>


                    <div class="panel panel-understated">
                        <div class="panel-heading">
                            <h4><span class="ca-gov-icon-info"></span> Theme Colors Customization</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                There are two ways to customize theme main colors. One way is to change primary and secondary theme color variables
                                in the colorscheme-[yourcolorshceme].less file. This method will require you to re-compile the state template, you
                                can find instructions in the readme file.  After the compilation you will have updated colorscheme-[yourcolorshceme].css file.
                            </p>

                            <p>
                                Another way is to manually find and replace all main theme colors and their variations in colorscheme-[yourcolorshceme].css.
                                Main theme colors classes will be listed at the top of the CSS file. You can copy their values and use find/replace feature
                                in your web editor software to replace all those colors references with your custom colors throughout entire css file.
                            </p>

                            <p>
                                <span class="font-size-sm"><strong>Note:</strong> Before changing your colors make sure that your custom theme colors have sufficient color cotrast ratios.</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section section-primary">
                <div class="container">
                    <div class="half">
                        <h2>Section Primary</h2>
                        <h3>Buttons</h3>
                        <div class="btn-row">
                            <a href="" class="btn btn-default">.btn-default</a>
                            <a href="" class="btn btn-default active">.btn-default.active</a>
                            <a href="" class="btn btn-default disabled">.btn-default.disabled</a>
                        </div>
                        <div class="btn-row">
                            <a href="" class="btn btn-primary">.btn-primary</a>
                            <a href="" class="btn btn-primary active">.btn-primary.active</a>
                            <a href="" class="btn btn-primary disabled">.btn-primary.disabled</a>
                        </div>
                        <div class="btn-row">
                            <a href="" class="btn btn-highlight">.btn-highlight</a>
                            <a href="" class="btn btn-highlight active">.btn-highlight.active</a>
                            <a href="" class="btn btn-highlight disabled">.btn-highlight.disabled</a>
                        </div>
                        <div class="btn-row">
                            <a href="" class="btn btn-standout">.btn-standout</a>
                            <a href="" class="btn btn-standout active">.btn-standout.active</a>
                            <a href="" class="btn btn-standout disabled">.btn-standout.disabled</a>
                        </div>
                        <div class="btn-row">
                            <a href="" class="btn btn-secondary">.btn-secondary</a>
                            <a href="" class="btn btn-secondary active">.btn-secondary.active</a>
                            <a href="" class="btn btn-secondary disabled">.btn-secondary.disabled</a>
                        </div>
                        <hr>


                        <h3>Panels</h3>

                        <div class="panel panel-overstated">
                            <div class="panel-heading">
                                <h3><span class="ca-gov-icon-info"></span> Panel (Overstated)</h3>
                                <div class="options">
                                    <a href="" class="btn btn-default">button</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                Panel Body
                            </div>
                        </div>

                        <div class="panel panel-standout">
                            <div class="panel-heading">
                                <h2><span class="ca-gov-icon-info"></span> Panel (Standout)</h2>
                                <div class="options">
                                    <a href="" class="btn btn-default">button</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                Panel Body
                            </div>
                        </div>

                    </div>

                    <div class="half">
                        <!-- Article -->
                        <h3>News block</h3>
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
                        <!--<ul class="list-inline list-unstyled m-t-md">
                            <li><span class="ca-gov-icon-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></li>
                            <li><span class="ca-gov-icon-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></li>
                            <li><span class="ca-gov-icon-google-plus" aria-hidden="true"><span class="sr-only">Google+</span></span></li>
                        </ul>-->

                        <h3 class="m-t-lg">Testimonials</h3>

                        <blockquote class="testimonial testimonial-highlight m-t-md">
                            <div class="testimonial-body">
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <footer>
                                    <cite>
                                        <a href="">John Smith</a> Some Awesome Company
                                    </cite>
                                </footer>
                            </div>
                            <div class="thumbnail thumbnail-right">
                                <a href="#"><img class="thumbnail-img img-rounded" src="images/70x70.gif" alt="..."></a>
                            </div>
                        </blockquote>

                    </div>

                </div>
            </div>
        </main>

    </div>

    <?php include_once("../ssi/global-footer.php"); ?>
    <?php include_once("../ssi/scripts.php"); ?>
</body>
</html>