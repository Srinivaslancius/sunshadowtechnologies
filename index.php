<?php include_once 'title.php';?>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
   
    
    <!-- Main Header -->
    <header class="main-header">
    <?php include_once 'menu.php';?>        
    </header><!--End Main Header -->
    
    
    <!--Main Slider-->
 <section class="main-slider revolution-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	<?php $getBannersData = getAllDataCheckActive('banners',0);  ?>
                    <?php while ($row = $getBannersData->fetch_assoc()) { ?>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slides/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="<?php echo $base_url . 'uploads/banner_images/'.$row['banner'] ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="90"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3 class="bg-color">The Energy Saving ECO COATING</h3></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="90"
                    data-y="center" data-voffset="190"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Learn More</a></div>
                    
                    </li>
                    <?php } ?>
                </ul>
                
            </div>
        </div>
    </section>
    
    
    <!--Main Features-->
    <section class="main-features">
    	<div class="auto-container">
        	<div class="title-box text-center">
            	<h2>SAMPLE <span class="theme_color"> HEADING</span></h2>
            <div class="row clearfix">
            	
                <!--Feature Column-->
                <?php $getIndustriesData = getAllDataCheckActive('industries',0);?>
                <?php while ($row = $getIndustriesData->fetch_assoc()) { ?>
                <div class="features-column col-lg-2 col-md-6 col-xs-12">
                	<article class="inner-box">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-illumination"></span></div>
                            <h3 class="title"><?php echo $row['title']; ?></h3>
                        </div>
                    </article>
                </div>
                <?php } ?>           
            </div>
        </div>
    </section>
    
    
    <!--Featured Fluid Section-->
    <section class="featured-fluid-section">
    	<?php $getContentData = getAllDataCheckActive1('content_pages','0',14);
        $getData = $getContentData->fetch_assoc(); ?>
        
    	<div class="outer clearfix">
            
            <!--Image Column-->
            <div class="image-column" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getData['image'] ?>);"></div>
            
            <!--Text Column-->
            <article class="column text-column dark-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url(images/resource/fluid-image-2.jpg);">
                
                <div class="content-box pull-left">	
                    <h2> <span class="theme_color"><?php echo $getData['title']; ?></span> </h2>
                <!--	<div class="title-text">Lorem ipsum dolor <a href="#"><strong>some link</strong></a> sit amet, cum at inani interesset </div>-->
                    <div class="text"><?php echo substr(strip_tags($getData['description']), 0,150);?></div>
					
                <!--    <a href="#" class="theme-btn btn-style-one">Join Now</a>
                    <a href="#" class="theme-btn btn-style-two">View details</a>-->
                </div>
                
                <div class="clearfix"></div>
            </article>
            
        </div>
        
    </section>
    
    
    <!--Recent Projects Section-->
    <section class="recent-projects">
    	 <?php include_once 'sample_heading.php';?>   
    </section>
    
    
    <!--Two Column Fluid -->
    <section class="two-column-fluid">
    	
        
    	<div class="outer clearfix">
        	
            
            <article class="column left-column" style="background-image:url(images/resource/fluid-image-3.jpg);">
                <?php $getContentData11 = getAllDataCheckActive1('content_pages','0',15);
                    $getData11 = $getContentData11->fetch_assoc(); ?>
                <div class="content-box pull-right">	
                    <h2><span class="normal-font theme_color"><?php echo $getData11['title']; ?></span></h2>
                    <!-- <div class="title-text">Lorem ipsum dolor some link sit amet, cum at inani interesset</div> -->
                    <div class="text"><?php echo substr(strip_tags($getData11['description']), 0,150);?></div>
                    <br>
                    <?php 
                    $getAllSiteSettingsData = getAllData('site_settings');
                    $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
                    /*echo $getSiteSettingsData; die;*/ ?> 
                    <div class="clearfix">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-shapes-1"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="7845910" data-speed="1500"><?php echo $getSiteSettingsData['credit_count']; ?></span></h4>
                                <span class="title">Raised</span>
                            </div>
                        </div>
                        
                        <div class="icon-box">
                        	<div class="icon"><span class="flaticon-tool-4"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="13360" data-speed="1500"><?php echo $getSiteSettingsData['project_count']; ?></span></h4>
                                <span class="title">Projects</span>
                            </div>
                        </div>
                        
                        <div class="icon-box">
                        	<div class="icon"><span class="flaticon-favorite"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="78459" data-speed="1500"><?php echo $getSiteSettingsData['likes_count']; ?></span></h4>
                                <span class="title">Donations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </article>
            <?php $getContentData12 = getAllDataCheckActive1('content_pages','0',16);
                    $getData12 = $getContentData12->fetch_assoc(); ?>
            <?php $getContentData13 = getAllDataCheckActive1('content_pages','0',17);
                    $getData13 = $getContentData13->fetch_assoc(); ?>
            <article class="column right-column" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getData12['image'] ?>););">
                
                <div class="content-box pull-left">	
                	<div class="outer-box">
                    	<div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                        <h2><?php echo $getData12['title']; ?><span class="normal-font"></span></h2>
                        
                        <!--Text Content-->
                        <div class="text-content">
                            <div class="text"><p><?php echo substr(strip_tags($getData12['description']), 0,150);?></p></div>
                            <div class="information clearfix">
                                <div class="info">
                                    <figure class="image-thumb"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData13['image'] ?>" alt=""></figure>
                                    <h3><?php echo $getData13['title']; ?></h3>
                                    <p><?php echo substr(strip_tags($getData13['description']), 0,150);?></p>
                                </div>
                               <!--  <div class="signature"><img src="images/resource/signature-image-1.png" alt=""></div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </article>
            
        </div>
        
    </section>
    
    <!--Events Section-->
    
    
    <!--Testimonials-->
    <section class="testimonials-section" style="background-image:url(images/slides/2.jpg);">
		<div class="auto-container">
            
            <div class="sec-title text-center">
                <h2>OUR <span class="normal-font theme_color">FEATURES</span></h2>
              <!--  <div class="text">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text </div>-->
            </div>
            
            <!--Slider-->     
        	<div class="testimonials-slider testimonials-carousel">
            	
                <?php $getFeaturesData = getAllDataCheckActive('features',0);?>
                <?php while ($row = $getFeaturesData->fetch_assoc()) { ?>
                <article class="slide-item">
                	
                    <div class="info-box">
                    	<figure class="image-box"><img src="<?php echo $base_url . 'uploads/feature_images/'.$row['image'] ?>" alt=""></figure>
                    	<h3><?php echo $row['title']; ?></h3>
                        <p class="designation"></p>
                    </div><br>                   
                    <div class="slide-text">
                        <p><?php echo substr(strip_tags($row['description']), 0,150);?></p>
                    </div>
                </article>
                <?php } ?>   
                
            </div>
            
        </div>    
    </section>
  
    <section class="events-section latest-events">
    	 <?php include_once 'latest_news.php';?>
    </section>
     <section class="blog-news-section latest-news" style="margin-top:-150px">
    	 <?php include_once 'our_clients.php';?>
    </section>
    <!--Sponsors Section-->
  <section class="sponsors-section" style="margin-top:-100px">
       <?php include_once 'green_marks.php';?>
    </section>
    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(images/slides/4.jpg);">
    	 <?php include_once 'parallax.php';?> 
    </section>
    
    
    <!--Intro Section-->
    <section class="subscribe-intro">
    	 <?php include_once 'newsletter.php';?> 
    </section>
	
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">    	
      <?php include_once 'footer.php';?>          
    </footer>
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>

<!-- /.modal -->

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>