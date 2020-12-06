<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--	Css Links
        ==================================================-->
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/fonts/flaticon.css">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/plugins.css">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/color.css" id="color-change">

        <!-- Favicon 
        ==================================================-->
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url('/'); ?>/<?php echo url('/'); ?>/images/favicon.ico">


        <!--	Title
        ==================================================-->
        <title>JOvermars: Portfolio</title>

    </head>
    <body>

        
            <!-- Start Nav Menu 
        ==============================================-->
        <header class="main_nav dark_nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100"> 
                    <a class="navbar-brand" href="{{route('index')}}"><img src="<?php echo url('/'); ?>/images/logo/009.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link active" href="#portfolio">Gallery<span class="sr-only">(current)</span></a></li>	
                        </ul>
                    </div>		
                </nav>
            </div>	
        </header>
        <!-- End Nav Menu
        ==================================================-->
        
        <!--	Start Portfolio
        ===================================================-->
        <section id="portfolio" class="py_80 bg_deepblack full_row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
                            <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">portfolio</span>Recent Projects</h2>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="my_portfolio" id="tab-panel"> 
                              <!--Filter-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="filters mb_30 w-100 text-center color_lightgray">
                                        <ul class="filter-tabs mx-auto d-inline-block">
                                            <li class="active filter" data-role="button" data-filter="all">All</li>
                                            <li class="filter" data-role="button" data-filter=".design">Design</li>
                                            <li class="filter" data-role="button" data-filter=".branding">Branding</li>
                                            <li class="filter" data-role="button" data-filter=".logo">Logo</li>
                                            <li class="filter" data-role="button" data-filter=".AD">Flyers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                              
                            <div class="filter-list">
                                <div class="portfolio-items">
                                    <div class="row">
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/jrip.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/jrip.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo Design</li>
                                                                <h3>Jrip</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LUMOS</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Graphics/11.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Graphics/11.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>VVF</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/5p5 Logo BL2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/5p5 Logo BL2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>FivePointFive</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all branding mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/03d.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/03d.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Branding</li>
                                                                <h3>Hair by Zima</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/04.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/04.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Live Room 2.0</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Band Academy 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Band Academy 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Brand Academy</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/1 (2).jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/1 (2).jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>WinPart</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Next Section -->


                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Baris Logo B.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Baris Logo B.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Baris Concept</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/2A.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/2A.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>WINPART</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Graphics/Kings Flyer.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Graphics/Kings Flyer.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Graphics</li>
                                                                <h3>Interswitch</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/cut2style.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/cut2style.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Cut 2 Style</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/3rd Party Emailers.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/3rd Party Emailers.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Branding</li>
                                                                <h3>3rd Party Emailers</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Graphics/MNC.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Graphics/MNC.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Graphics</li>
                                                                <h3>VVF Meet Up</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/dlp.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/dlp.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>DLP TUMMYGRID</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/5 Days.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/5 Days.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>SUZUKI</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--*****Third Section*****-->
                                        <!--***********************-->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Emb By Zima.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Emb By Zima.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Embelished by Zima</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/12.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/12.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>SUZUKI CFAO</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/hair.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/hair.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Hair By Zima</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/13.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/13.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>SUZUKI CFAO</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- ******************* -->
                                        <!-- *** 4th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/hampine.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/hampine.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>HAMPINE</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/CMI Emailers.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/CMI Emailers.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Eid Mubarak.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Eid Mubarak.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Inside Mainland</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Helga Logo 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Helga Logo 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Helga Fashion</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/HOH.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/HOH.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>BEDMATE</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 4th Section End **-->
                                        <!--***********************-->

                                        <!-- ******************* -->
                                        <!-- *** 5th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Henrycity.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Henrycity.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>HENRY CITY</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Eid-Mubarak-3.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Eid-Mubarak-3.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LUMOS</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Home.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Home.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/hiks.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/hiks.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>HIKSTECH</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/June-SM2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/June-SM2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>WinPart</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 5th Section End **-->
                                        <!--***********************-->
                                        <!-- ******************* -->
                                        <!-- *** 6th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Jessie Food Logo E.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Jessie Food Logo E.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Jessie Food</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/LASGIPP SM.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/LASGIPP SM.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LASGIPP</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Makoko.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Makoko.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Inside Mainland</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Jeun Jeun Bl.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Jeun Jeun Bl.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>JEUN JEUN</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Motor-Insurance-Promo-1A.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Motor-Insurance-Promo-1A.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 6th Section End **-->
                                        <!--***********************-->
                                        <!-- ******************* -->
                                        <!-- *** 7th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/MF 3.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/MF 3.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>MZxandy Fragrance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Motor-Insurance-Promo-2A.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Motor-Insurance-Promo-2A.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Naija 60th Banner A.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Naija 60th Banner A.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/mobileacademy.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/mobileacademy.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Mobile Academy</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/SM LDGIG 1.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/SM LDGIG 1.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Inside Mainland</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 6th Section End **-->
                                        <!--***********************-->

                                        <!-- ******************* -->
                                        <!-- *** 7th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Nhew 1E.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Nhew 1E.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Natural Hair Extension</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Talku-Talku-MU.png" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Talku-Talku-MU.png" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Mr Friski Album</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Trade-In 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Trade-In 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>SUZUKI</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Ovie.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Ovie.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Ovie</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Tweet Chat.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Tweet Chat.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>Inside Mainland</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 7th Section End **-->
                                        <!--***********************-->
                                        <!-- ******************* -->
                                        <!-- *** 8th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/R2W Logo 3.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/R2W Logo 3.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Ready 2 Wear</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/Vitara Promo.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/Vitara Promo.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>SUZUKI Vitara Promo</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/W Initiative SM 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/W Initiative SM 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>ACCESS W-Initiatives</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/RDelight 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/RDelight 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>Royal Delight</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/WED SM.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/WED SM.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LSETF WED</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 8th Section End **-->
                                        <!--***********************-->
                                        <!-- ******************* -->
                                        <!-- *** 9th Section****-->
                                        <!-- ******************* -->
                                        <div class="column mix mix_all logo mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Logo/Yummy Bites White.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Logo/Yummy Bites White.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>YUMMY BITES</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/WIB 1.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/WIB 1.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LSETF</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/WIB Invite.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/WIB Invite.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>LSETF Access</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/WOWBii-Muslim-Ad-2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/WOWBii-Muslim-Ad-2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Logo</li>
                                                                <h3>WOWBII</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Branding/OM-Predict-2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Branding/OM-Predict-2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Folding-Tent-Display.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Folding-Tent-Display.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Design</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all design mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/TGIF Emailer 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/TGIF Emailer 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Designs</li>
                                                                <h3>TGIF Emailers</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 9th Section End **-->
                                        <!--***********************-->
                                        <!--***********************-->
                                        <!--**** AD Section Begins **-->
                                        <!--***********************-->
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/AD.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/AD.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>WinPart</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Ambode AD.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Ambode AD.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Former Gov</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Battery AD 1.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Battery AD 1.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>WinPart</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Car Financing Flyer  2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Car Financing Flyer  2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>CFAO SUZUKI</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/EDC MMF AD 5B.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/EDC MMF AD 5B.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>EcoBank Group</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/EOY Sale Poster.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/EOY Sale Poster.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>WinPart</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Fashion Cover Fr.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Fashion Cover Fr.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Leadway Assurance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Fashion Page.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Fashion Page.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Leadway Assurance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/IWD AD.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/IWD AD.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>LSETF</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Leadway Ad.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Leadway Ad.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Leadway Assurance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Leap Aframes Edu.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Leap Aframes Edu.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>LSETF Leap</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Love-Frame.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Love-Frame.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Love Always</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Mar 2020 (Special Edition).jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Mar 2020 (Special Edition).jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Leadway Assurance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Mighty-Ocean.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Mighty-Ocean.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Oct 1st.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Oct 1st.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>OLD MUTUAL</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Price Slash Promo 3.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Price Slash Promo 3.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>CFAO SUZUKI</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Soundless Infographs 2.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Soundless Infographs 2.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Soundless Infographs</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/Sport Page.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/Sport Page.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>Leadway Assurance</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column mix mix_all AD mb_30 col-md-4 col-lg-3">
                                            <div class="default-portfolio-item">
                                                <a href="<?php echo url('/'); ?>/images/portfolio/Advert/OMN Emailer.jpg" data-fancybox="gallery">
                                                    <img src="<?php echo url('/'); ?>/images/portfolio/Advert/OMN Emailer.jpg" alt="image" />
                                                    <div class="overlay-box">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <div class="tag">
                                                            <ul>
                                                                <li>Advertisment</li>
                                                                <h3>OMN Emailer</h3>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!--***********************-->
                                        <!--**** 9th Section End **-->
                                        <!--***********************-->
                                        
                                    </div>
                                    <div class="mx-auto text-center mt_60"><a class="btn btn-default" id="loadMore">Load More</a></div>
                                </div>
                            </div>		
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--	End Portfolio
        ===================================================-->

        <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
        <script src="<?php echo url('/'); ?>/js/jquery-latest.min.js"></script>
        <script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
        <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo url('/'); ?>/js/plugins.js"></script>
        <script src="<?php echo url('/'); ?>/js/custom.js"></script>
        <script>
            
            $(".col-lg-3").slice(0, 8).show();
            if ($(".col-lg-3:hidden").length != 0) {
                $("#loadMore").show();
            }
            $("#loadMore").on('click', function(e) {
                e.preventDefault();
                $(".col-lg-3:hidden").slice(0, 4).show().slideDown(); // Updated this line
                if ($(".col-lg-3:hidden").length == 0) {
                $("#loadMore").fadeOut('slow');
                }
            });
        
        </script>
    </body>
</html>