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
                <h1>Our <span class="normal-font">Industries</span></h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">Industries</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Main Features-->
    <section class="main-features">
    	<div class="auto-container">
            
            <div class="row clearfix">
            	
                <!--Default Icon Column-->
                <?php $getIndustriesData = getAllDataCheckActive('industries',0);?>
                <?php while ($row = $getIndustriesData->fetch_assoc()) { ?>
                <div class="default-icon-column col-lg-4 col-md-6 col-xs-12">
                	<article class="inner-box">
                    	<div class="icon-box">
                        	<div class="icon"><span><img style="width:50px;height:50px;" src="<?php echo $base_url . 'uploads/industries_images/'.$row['image'] ?>"  alt=""/></span></div>
                        </div>
                        <h3><?php echo $row['title'];?></h3>
                        <div class="text"><?php echo substr(strip_tags($row['description']), 0,100);?></div>
                        <a href="industries_details.php?indId=<?php echo $row['id'];?>" class="theme-btn btn-style-three">Read More</a>
                    </article>
                </div>
               <?php } ?>
            </div>
        </div>
    </section>
     <section class="blog-news-section latest-news">
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
    	
        <!--Footer Upper-->        
        <?php include_once 'footer.php';?>
    </footer>
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>

<!--Donate Popup-->



<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>