<!DOCTYPE html>
<html lang="en">

<!-- index-854:31-->
<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Runaway - Personal Portfolio HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, agency, blog, cv, creative, html, one page, personal, portfolio, resume, responsive, bootstrap, photography, designer, developer">
	<meta name="author" content="root">

     <!--	Css Links
	==================================================-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/fonts/flaticon.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/plugins.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/color.css" rel="stylesheet"" id="color-change">

     <!-- Favicon 
    ==================================================-->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo url('/'); ?>/images/favicon.ico">   
	
	<!--	Title
	==================================================-->
	
	<title>JOvermars: Portfolio</title>

</head>

<body id="top" class="page-load">
	<!--	Start Back to top
	=================================================-->
	<a href="#" id="scroll" style="display: none;"><span></span></a>
	<!--	End Back to top
	==================================================-->
	<!--	Preloader
	==================================================-->
	<div class="preloader">
		<div class="lds-css ng-scope">
			<div class="lds-spinner" style="100%;height:100%">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- Color Settings Start
	==================================================-->
	<div class="color-panel">
		<div class="on-panel color_white bg_primary">
			<div class="text-center icon-spinner">
			  <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
			</div>
		</div>
		<div class="panel-box">
			<span class="panel-title">Theme Colors</span>
			<ul class="color-box">
				<li class="default" data-name="default" data-path="<?php echo url('/'); ?>/css/color.css" data-image="<?php echo url('/'); ?>/images/logo/15.png" data-target="<?php echo url('/'); ?>/images/logo/15.png"></li>
				<li class="color_2" data-name="color_2" data-path="<?php echo url('/'); ?>/css/color/color-1.css" data-image="<?php echo url('/'); ?>/images/logo/16.png" data-target="<?php echo url('/'); ?>/images/logo/16.png"></li>
				<li class="color_3" data-name="color_3" data-path="<?php echo url('/'); ?>/css/color/color-2.css" data-image="<?php echo url('/'); ?>/images/logo/17.png" data-target="<?php echo url('/'); ?>/images/logo/17.png"></li>
				<li class="color_4" data-name="color_4" data-path="<?php echo url('/'); ?>/css/color/color-3.css" data-image="<?php echo url('/'); ?>/images/logo/18.png" data-target="images/logo/18.png"></li>
				<li class="color_5" data-name="color_5" data-path="<?php echo url('/'); ?>/css/color/color-4.css" data-image="<?php echo url('/'); ?>/images/logo/19.png" data-target="<?php echo url('/'); ?>/images/logo/19.png"></li>
				<li class="color_6" data-name="color_6" data-path="<?php echo url('/'); ?>/css/color/color-5.css" data-image="<?php echo url('/'); ?>/images/logo/20.png" data-target="<?php echo url('/'); ?>/images/logo/20.png"></li>
				<li class="color_7" data-name="color_7" data-path="<?php echo url('/'); ?>/css/color/color-6.css" data-image="<?php echo url('/'); ?>/images/logo/21.png" data-target="<?php echo url('/'); ?>/images/logo/21.png"></li>
				<li class="color_8" data-name="color_8" data-path="<?php echo url('/'); ?>/css/color/color-7.css" data-image="<?php echo url('/'); ?>/images/logo/22.png" data-target="<?php echo url('/'); ?>/images/logo/22.png"></li>
				<li class="color_9" data-name="color_9" data-path="<?php echo url('/'); ?>/css/color/color-8.css" data-image="<?php echo url('/'); ?>/images/logo/23.png" data-target="<?php echo url('/'); ?>/images/logo/23.png"></li>
				<li class="color_10" data-name="color_10" data-path="<?php echo url('/'); ?>/css/color/color-9.css" data-image="<?php echo url('/'); ?>/images/logo/24.png" data-target="<?php echo url('/'); ?>/images/logo/24.png"></li>
				<li class="color_11" data-name="color_11" data-path="<?php echo url('/'); ?>/css/color/color-10.css" data-image="<?php echo url('/'); ?>/images/logo/25.png" data-target="<?php echo url('/'); ?>/images/logo/25.png"></li>
				<li class="color_12" data-name="color_12" data-path="<?php echo url('/'); ?>/css/color/color-11.css" data-image="<?php echo url('/'); ?>/images/logo/26.png" data-target="<?php echo url('/'); ?>/images/logo/26.png"></li>
				<li class="color_13" data-name="color_13" data-path="<?php echo url('/'); ?>/css/color/color-12.css" data-image="<?php echo url('/'); ?>/images/logo/27.png" data-target="<?php echo url('/'); ?>/images/logo/27.png"></li>
				<li class="color_14" data-name="color_14" data-path="<?php echo url('/'); ?>/css/color/color-13.css" data-image="<?php echo url('/'); ?>/images/logo/28.png" data-target="<?php echo url('/'); ?>/images/logo/28.png"></li>
			</ul>
		</div>
		<div class="switcher_layout">
			<span class="layout_title">Layout Style</span>
			<div class="radio_check">
				<input type="checkbox" id="layout_type" name="layout" value="Yes">
				<label class="bg_default text-left" for="layout_type"><span class="white_color">Full</span><span class="secondary_color">Box</span></label>
			</div>
		</div>
		<div class="template_style">
			<span class="layout_title">Template Style</span>
			<ul>
				<li><a class="btn_link" href="index-7.html" target="blank">White Version</a></li>
				<li><a class="btn_link" href="index-8.html" target="blank">Black Version</a></li>
			</ul>
		</div>
		<div class="box_bg_style">
			<span class="layout_title">Background pattern</span>
			<div class="select_bg">
				<ul>
					<li><input type="radio" name="radio" id="patrn1" value="pattern_1" /><label for="patrn1" class="radios pattern1"></label></li>
					<li><input type="radio" name="radio" id="patrn2" value="pattern_2" /><label for="patrn2" class="radios pattern2"></label></li>
					<li><input type="radio" name="radio" id="patrn3" value="pattern_3" /><label for="patrn3" class="radios pattern3"></label></li>
					<li><input type="radio" name="radio" id="patrn4" value="pattern_4" /><label for="patrn4" class="radios pattern4"></label></li>
					<li><input type="radio" name="radio" id="patrn5" value="pattern_5" /><label for="patrn5" class="radios pattern5"></label></li>
				</ul>
			</div>
			<span class="layout_title">Background pattern</span>
			<div class="select_bg">
				<ul>
					<li><input type="radio" name="radio" id="bg_img1" value="body_bg_1" /><label for="bg_img1" class="radios body_image1"></label></li>
					<li><input type="radio" name="radio" id="bg_img2" value="body_bg_2" /><label for="bg_img2" class="radios body_image2"></label></li>
					<li><input type="radio" name="radio" id="bg_img3" value="body_bg_3" /><label for="bg_img3" class="radios body_image3"></label></li>
					<li><input type="radio" name="radio" id="bg_img4" value="body_bg_4" /><label for="bg_img4" class="radios body_image4"></label></li>
					<li><input type="radio" name="radio" id="bg_img5" value="body_bg_5" /><label for="bg_img5" class="radios body_image5"></label></li>
					<li><input type="radio" name="radio" id="bg_img6" value="body_bg_6" /><label for="bg_img6" class="radios body_image6"></label></li>
					<li><input type="radio" name="radio" id="bg_img7" value="body_bg_7" /><label for="bg_img7" class="radios body_image7"></label></li>
					<li><input type="radio" name="radio" id="bg_img8" value="body_bg_8" /><label for="bg_img8" class="radios body_image8"></label></li>
					<li><input type="radio" name="radio" id="bg_img9" value="body_bg_9" /><label for="bg_img9" class="radios body_image9"></label></li>
					<li><input type="radio" name="radio" id="bg_img10" value="body_bg_10" /><label for="bg_img10" class="radios body_image10"></label></li>
				</ul>
			</div>
			<div class="select_bg">
				<ul>
					<li><input type="checkbox" name="runaway" id="bg_over" value="" /> Overlay</li>
				</ul>
			</div>
		</div>
	</div>
	<!--  Color Settings End
	==============================================-->
<!-- Wrapper Start 
==================================================-->
<div id="page_wrapper">
	<div class="row">
	<!-- Start Nav Menu 
	==============================================-->
	<header class="main_nav dark_nav">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light w-100"> 
				<a class="navbar-brand" href="#top"><img src="{{asset('images/logo/009.png')}}"alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item"><a class="nav-link active" href="#top">Home<span class="sr-only">(current)</span></a></li>
					  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					  <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
					  <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					  <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>	
					  <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>	
					  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>	
					</ul>
				</div>		
			</nav>
		</div>	
	</header>
	<!-- End Nav Menu
	==================================================-->
	<!--	Start Main Banner 
	==================================================-->
	<section id="main_banner" class="banner_water_effect background5 overlay_one">
		<div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 col-lg-12 home-content text-left">
                    <div class="mainbanner_content">
                        <span class="pb_5 banner_title color_white">I Am Joseph Elu M!</span>  
                        <h1 class="cd-headline clip is-full-width text-uppercase">
                            <span class="color_white">I am a</span>
                            <span class="cd-words-wrapper color_default">
                                <b class="is-visible">Creative Designer.</b>
                                <b>Graphics Designer.</b>
                                <b>Product Designer.</b>
                                <b>Content Creator.</b>
                            </span>
                        </h1>
                        <p class="color_white mb_30">I have a passion for creating stunning identities, graphic design, and getting my creative minds into the heart of your brand</p>
                        <a class="btn btn-default" href="documents/Joseph Elu CV.pdf">Download CV</a>
                    </div>
                </div>          
            </div>
        </div>
    </section>
	<!--	End Main Banner 
	==================================================-->
	<!--	Start About
	===================================================-->
	<section id="about" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">about</span>about me</h2>
	                    <span class="sub_title color_lightgray">CREATIVE GRAPHICS DESIGNER.</span>
	                </div>
				</div>
			</div>
			<div class="about_one">
				<div class="row">
					<div class="col-md-7 col-lg-7">
						<div class="myself color_lightgray wow animated fadeInLeft">
							<p>Senior graphic designer responsible for daily graphic design content for a medium-sized firm. Worked regularly on graphic, layout, logos, branding, Newsletters and production materials. Developed 5000+ graphic design projects (logos, brochures, advertisements, infographics) that increased clients transactions by 25%.</p>
							
							<p>Enthusiastic, creative graphic designer with solid problem solving skills. Seeking to support the brand through proven strengths in creativity, collaboration, and taking criticism. Also excels at several tech tools, including Illustrator, Photoshop, and CorelDraw.</p>
							<br>
							<p>I can provide a truly bespoke experience for my clients and give them undivided attention and dedication to every project</p>
						</div>
						<div class="personal_info color_lightgray">
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<ul>
										<li><span class="color_secondery">Name :</span> Joseph Elu Maro</li>
										<li><span class="color_secondery">Email :</span> Joemarionezky@gmail.com</li>
									</ul>
								</div>
								<div class="col-md-12 col-lg-6">
									<ul>
										<li><span class="color_secondery">Phone :</span> +2348 181 435 006</li>	
										<li><span class="color_secondery">Address :</span> No 9, Falana, Iyana Ejigbo Oshodi-Isolo, Lagos.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-5">
						<div class="profile_img personal_video wow animated fadeInRight">
							<img src="{{asset('images/about/23.png')}}" alt="image">							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End About
	===================================================-->
	<!--	Start Skill
	===================================================-->
	<section id="skill" class="py_80 bg_deepblack full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">skill</span>Design skill</h2>
	                </div>
				</div>
			</div>
			<div class="my_skill">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="about_myskill color_lightgray wow animated fadeInLeft">
							<h2 class="color_lightgray">Some talk about my professional design skill</h2>
							<p class="pt_15">I provide you with all the tools you need to take your brand to the next level and to become more successful.</p>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="skill-progress wow animated slideInRight color_lightgray">
		                    <div class="prgs-bar fact-counter"> <span>COREL DRAW</span>
		                        <div class="progress count wow" data-wow-duration="0ms">
		                            <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="90">0</span>%</div>
		                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemax="100"> </div>
								</div>
							</div>
		                    <div class="prgs-bar fact-counter"> <span>Adobe Photoshop</span>
		                        <div class="progress count wow" data-wow-duration="0ms">
		                            <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="70">0</span>%</div>
		                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemax="100"> </div>
								</div>
							</div>
		                    <div class="prgs-bar fact-counter"> <span>Illustrator</span>
		                        <div class="progress count wow" data-wow-duration="0ms">
		                            <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="60">0</span>%</div>
		                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemax="100"> </div>
								</div>
							</div>
		                    <div class="prgs-bar fact-counter"> <span>Sketching</span>
		                        <div class="progress count wow" data-wow-duration="0ms">
		                            <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="56">0</span>%</div>
		                            <div class="progress-bar" role="progressbar" aria-valuenow="56" aria-valuemax="100"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Skill
	===================================================-->
	<!--	Start Experience and Projects
	===================================================-->
	<div class="experience background2 overlay_two py_60 full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="fact-counter">
						<div class="row">
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-man-working-on-a-laptop-from-side-view"></span>
					            	<div class="counting_digit color_default mt_15"> <h2 class="count-num" data-speed="3000" data-stop="7">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Years of Experience</h3>
					          	</div>
							</div>
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-half-time-work"></span>
					            	<div class="counting_digit color_default mt_15"> <h2 class="count-num" data-speed="3000" data-stop="100">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Porjects Done</h3>
					          	</div>
							</div>
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-happy"></span>
					            	<div class="counting_digit color_default mt_15"><h2 class="count-num" data-speed="3000" data-stop="90">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Happy Clients</h3>
					          	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--	End Experience and Projects
	===================================================-->
	<!--	Start Services
	===================================================-->
	<section id="services" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">services</span>What i do</h2>
	                    <span class="sub_title color_lightgray">Being agile and more personal, i can provide you with the same work as a bigger studio but at a more affordable price</span>
	                </div>
				</div>
				<div class="services_item1">
					<div class="col-md-12 col-lg-12">
						<div class="row">
							
							<div class="col-md-6 col-lg-4">
								<div class="service_two bg_gray color_lightgray text-center pt_15 mb_30 wow animated slideInUp">
					              <div class="srv_item_number color_lightgray"><strong>01.</strong></div>
					              <h3 class="p_20 text-uppercase color_primary">Graghic Design</h3>
					              <div class="srv_icon color_white"><span class="flaticon-editor"></span></div>
					              <p>A holistic approach giving you all you need to achieve the best for your company now and in the future, also helps creating design solutions</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="service_two bg_gray color_lightgray text-center pt_15 mb_30 wow animated slideInUp">
					              <div class="srv_item_number color_lightgray"><strong>02.</strong></div>
					              <h3 class="p_20 text-uppercase color_primary">Branding</h3>
					              <div class="srv_icon color_white"><span class="flaticon-internet"></span></div>
					              <p>Once the foundations are set i start the creative fun, crafting new branding aligned to your values and position in the industry with a vision for growth.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="service_two bg_gray color_lightgray text-center pt_15 mb_30 wow animated slideInUp">
					              <div class="srv_item_number color_lightgray"><strong>03.</strong></div>
					              <h3 class="p_20 text-uppercase color_primary">Research</h3>
					              <div class="srv_icon color_white"><span class="flaticon-shopping-cart"></span></div>
					              <p> I do research and know everything about your business how would i even start branding it? I'd just be making a logo to look pretty and that's not what i am about.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Services
	===================================================-->
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
									</ul>
								</div>
							</div>
						</div>	
			              
						<div class="filter-list">
							<div class="portfolio-items">
								<div class="row">
								  	<div class="column mix mix_all graphic development wordpress mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/01.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/01.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Graphics Design</li>
															<li>wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/02.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/02.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Branding,</li>
															<li>Wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all design wordpress development mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/03.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/03.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Branding</li>
															<li>Hair by Zima</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic wordpress branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/04.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/04.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Branding,</li>
															<li>wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic design branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/05.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/05.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Logo</li>
															<li>Hikstech</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all development wordpress design mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="{{asset('images/portfolio/06.jpg')}}" data-fancybox="gallery">
												<img src="{{asset('images/portfolio/6.jpg')}}" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Web Design,</li>
															<li>Web Development</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							<div class="mx-auto text-center mt_60"><a class="btn btn-default loadMore" href="{{route('portfolio')}}">View More</a></div>
							</div>
						</div>		
			        </div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Portfolio
	===================================================-->
	<!--	Start Testimonial
	===================================================-->
	<section id="testimonial" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 color_white text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase"><span class="line_double mx-auto color_default">testimonial</span>What Client Say’s</h2>
	                    <span class="sub_title color_lightgray">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
    				<div class="testimonial_item owl-carousel wow animated slideInUp">
    					<div class="member_feedback color_lightgray p_30">
							<div class="client_img"><img src="{{asset('images/testimonial/01.j')}}pg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<h5 class="color_gray mb_15">Aisha Lexi</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
						</div>
						<div class="member_feedback color_lightgray p_30">
							<div class="client_img"><img src="{{asset('images/testimonial/02.j')}}pg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<h5 class="color_gray mb_15">Kiara Paige</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
						</div>
						<div class="member_feedback color_lightgray p_30">
							<div class="client_img"><img src="{{asset('images/testimonial/03.j')}}pg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<h5 class="color_gray mb_15">Lucas Noah</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
						</div>
						<div class="member_feedback color_lightgray p_30">
							<div class="client_img"><img src="{{asset('images/testimonial/04.j')}}pg" alt="image"></div>
							<div class="star d-inline-block mt_30 color_default">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
							<h5 class="color_gray mb_15">Grace Ruby</h5>
							<p>Sem duis platea erat feugiat vivamus nascetur sapien tortor. Sollic dictum ultric. Aliquam inceptos bibendum fringilla sodales. Molest lacin urna per aenean commodo sociosqu.</p>
						</div>
    				</div>
    			</div>
			</div>
		</div>
	</section>
	<!--	End Testimonial
	=================================================== -->
	
	<!--
	===================================================-->
	<!--	Start Contact
	===================================================-->
	<section id="contact" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">contact</span>Get In Touch</h2>
	                    <span class="sub_title color_lightgray">Contact me for your next project, it will be a great honor working with you.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<div class="col-md-4 col-lg-4">
							<div class="contact_info wow animated fadeInLeft">
		    					<ul>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Email</h6>
		    								<span class="color_lightgray">Joemarionezky@gmail.com</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Phone</h6>
		    								<span class="color_lightgray">+2348 181 435 006</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Address</h6>
		    								<span class="color_lightgray">No 9, Falana, Iyana Ejigbo Oshodi-Isolo, Lagos.</span>
		    							</div>
		    						</li>
		    					</ul>
		    				</div>
		    				<div class="socal_media_2 mt_15 d-inline-block white_hover">
					            <ul>
					                <li><a href="https://www.twitter.com/jovermarz?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					                <li><a href="https://www.linkedin.com/in/joseph-elu-9b959ab1"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					                <li><a href="https://www.intstagram.com/jovermarzconcept?r=nametag"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					            </ul>
					        </div>
						</div>
						<div class="col-md-8 col-lg-8">
							<form class="form contact_message wow animated fadeInRight" id="contact-form" action="#" method="post">
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control bg_black" type="text" name="name" placeholder="Your Name" />
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control bg_black" type="email" name="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
										  <input class="form-control bg_black" type="text" name="subject" placeholder="Subject"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<textarea class="form-control bg_black" name="message" rows="7" placeholder="Message"></textarea>
										</div>							
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<input class="btn btn-default" id="send" value="Send Massage" type="submit"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="error-handel">
											<div id="success">Your email sent Successfully, Thank you.</div>
											<div id="error"> Error occurred while sending email. Please try again later.</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Contact
	===================================================-->
	<!--	Start Footer
	===================================================-->
	<footer class="p_20 color_lightgray bg_deepblack text-center full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="copyright"><p>Copyright&copy; 2020 | jovermarsconcept</p></div>
				</div>
			</div>
		</div>
	</footer>
	<!--	End Footer
	===================================================-->
	</div>
</div>
<!--	Wrapper End
=======================================================-->
	<!--	Js Links
	===================================================-->
	<script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
	<script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
	<script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo url('/'); ?>/js/plugins.js"></script>
	<script src="<?php echo url('/'); ?>/js/custom.js"></script>
	<script>
		$(document).ready(function() {
		
		//========================================
		// Water Effect
		//========================================
		
			$('.banner_water_effect').ripples({
			  resolution: 256,
			  dropRadius: 20,
			  perturbance: 0.03,
			  interactive:true,
			});
		//======================================
		//  Smoothscroll js
		//======================================

		  $("a").on('click', function(event) {

			  if (this.hash !== "") {
				event.preventDefault();
			  
				var hash = this.hash;

				$('html, body').animate({
				  scrollTop: $(hash).offset().top 
				}, 1000, function(){
			 
				  window.location.hash = hash;
				});
			  }
			});
		 });
	</script>
</body>

<!-- index-854:31-->
</html>