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
                <h1>Our <span class="normal-font">Features</span></h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">Features</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Projects Section-->
    <section class="projects-section">
    	<div class="auto-container">
            
        	<div class="row clearfix">
                
                <!--Default Featured Column-->
                <?php $getFeaturesData = getAllDataCheckActive('features',0);?>
                <?php while ($row = $getFeaturesData->fetch_assoc()) { ?>
                <div class="column default-featured-column col-md-4 col-sm-6 col-xs-12">
                    
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/feature_images/'.$row['image'] ?>" alt=""></a>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="#"><?php echo $row['title']; ?></a></h3>
                          <!--  <div class="column-info">Environment, Go Green Company</div>-->
                            <div class="text"><?php echo substr(strip_tags($row['description']), 0,150);?></div>
                           
                        </div>
                    </article>
                    
                </div>
                <?php } ?>
                <!--Default Featured Column-->
                
                <!--Default Featured Column-->
                
             
                
                <!--Default Featured Column-->
                
                
                <!--Default Featured Column-->
                
                
                <!--Default Featured Column-->
                
                
            </div>
          
        </div>
    </section>
    
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