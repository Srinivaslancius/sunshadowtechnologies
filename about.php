<?php include_once 'title.php';?>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/slides/4.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>About Us</h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">About Us</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <?php $getAboutData = getAllDataCheckActive1('content_pages','0',4);
                $getData = $getAboutData->fetch_assoc(); ?>
                <div class="column default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="text-block">
                    	<h3><?php echo $getData['title'];?></h3>
                        <div class="text no-margin-bottom">
                        	<p><?php echo substr(strip_tags($getData['description']), 0,150);?></p>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <?php $getAboutData1 = getAllDataCheckActive1('content_pages','0',5);
                $getData1 = $getAboutData1->fetch_assoc(); ?>
                <div class="column default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="text-block">
					<h3><?php echo $getData1['title'];?></h3>
                    
                        <div class="text no-margin-bottom">
                        	<p><?php echo substr(strip_tags($getData1['description']), 0,150);?></p>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <?php $getAboutData2 = getAllDataCheckActive1('content_pages','0',6);
                $getData2 = $getAboutData2->fetch_assoc(); ?>
                <div class="column default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="text-block">
                    	<h3><?php echo $getData2['title'];?><span class="theme_color"></span></h3>
                        <div class="text no-margin-bottom">
                        	<p><?php echo substr(strip_tags($getData2['description']), 0,150);?></p>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    
    <!--Two Column Fluid -->
    <section class="two-column-fluid">
    	
    	<div class="outer clearfix">
            
            <article class="column left-column" style="background-image:url(images/resource/fluid-image-3.jpg);">
                
                <div class="content-box pull-right">	
                    <h2>Some <span class="normal-font theme_color">Facts</span></h2>
                    <div class="title-text">Lorem ipsum dolor some link sit amet, cum at inani interesset</div>
                    <div class="text">We’re extremely proud of what we’ve achieved together with charitie lorem individuals, philanthropists and schools since the Big Give was founded in 2007, and here are some fact from our achivemnet.</div>
                    <br>
                    
                    <div class="clearfix">
                    	<div class="icon-box">
                        	<div class="icon"><span class="flaticon-shapes-1"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="7845910" data-speed="1500">7,845,910</span></h4>
                                <span class="title">Raised</span>
                            </div>
                        </div>
                        
                        <div class="icon-box">
                        	<div class="icon"><span class="flaticon-tool-4"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="13360" data-speed="1500">12,360</span></h4>
                                <span class="title">Projects</span>
                            </div>
                        </div>
                        
                        <div class="icon-box">
                        	<div class="icon"><span class="flaticon-favorite"></span></div>
                            <div class="lower-box">
                            	<h4>$<span class="count-text" data-stop="78459" data-speed="1500">225,580</span></h4>
                                <span class="title">Donations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </article>
            
            <article class="column right-column" style="background-image:url(images/resource/fluid-image-4.jpg);">
                
                <div class="content-box pull-left">	
                	<div class="outer-box">
                    	<div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                        <h2>word from <span class="normal-font">CEO</span></h2>
                        
                        <!--Text Content-->
                        <div class="text-content">
                            <div class="text"><p>How to pursue pleasure rationally  consequences that are extremeely painful or again is there anyones who loves or  pursues or desires to obtain pain of itself because its sed great pleasure get well soon.</p></div>
                            <div class="information clearfix">
                                <div class="info">
                                    <figure class="image-thumb"><img src="images/resource/ceo-thumb.jpg" alt=""></figure>
                                    <h3>Alex Zender</h3>
                                    <p>CEO of Go Green</p>
                                </div>
                                <div class="signature"><img src="images/resource/signature-image-1.png" alt=""></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </article>
            
        </div>
        
    </section>
    
    
    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
        
            <div class="sec-title text-center">
                <h2>Our <span class="normal-font theme_color">Team</span></h2>
              <!--  <div class="text">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text </div>-->
            </div>
            <?php $getTestimonialsData = getAllDataCheckActive('testimonials',0);?>
                            <div class="row clearfix">
                
                <!--Column-->
                <?php while ($row = $getTestimonialsData->fetch_assoc()) { ?>

                <article class="column team-member col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image"><a href="mailto:mail@email.com"><img src="<?php echo $base_url . 'uploads/testimonial_images/'.$row['image'] ?>" alt="<?php echo $row['title']; ?>"></a></figure>
                        <div class="member-info">
                            <h3><?php echo $row['title']; ?></h3>
                            <div class="designation">Senior Worker</div>
                        </div>
                        <div class="content">
                            <div class="text"><p><?php echo substr(strip_tags($row['description']), 0,150);?></p></div>
                           <!-- <div class="social-links">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>-->
                        </div>
                    </div>
                </article>
                <?php } ?> 
            </div>
            
        </div>
    </section>
    <!--Blog News Section-->
    <section class="events-section latest-events" style="margin-top:-100px">
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


<!--Donate Popup-->

<!-- /.modal -->

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>