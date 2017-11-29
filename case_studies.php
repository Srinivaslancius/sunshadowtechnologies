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
                <h1>Our <span class="normal-font">Case Studies</span></h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">case studies</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">
            
            <!--Filter-->
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix anim-3-all">
                    <li class="active filter" data-role="button" data-filter="all">Buildings</li>
                    <li class="filter" data-role="button" data-filter=".environment">Agriculture</li>
                    <li class="filter" data-role="button" data-filter=".eco">Transportation</li>
                    <li class="filter" data-role="button" data-filter=".energy">Telicommunication</li>
                    <li class="filter" data-role="button" data-filter=".animals">Storage Facilities</li>
                    <li class="filter" data-role="button" data-filter=".plants">Piping</li>
                </ul>
            </div>
            
            <!--Filter List-->
            <div class="row filter-list clearfix">
                
                <!--Column-->
                <?php $getCaseStudies1 = "SELECT * FROM industry_case_studies WHERE industry_id = 3 AND status = 0";
                      $getImgs = $conn->query($getCaseStudies1); 
                ?>
                <div class="column mix mix_all environment  col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <?php while($row = $getImgs->fetch_assoc()) { ?>
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="test_cases.php?tid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h3>
                                        <a class="arrow lightbox-image" href="<?php echo $base_url . 'uploa3s/inustries_case_studies_images/'.$row['image'] ?>" title="Buildings"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
                <!--Column-->
                <?php $getCaseStudies2 = "SELECT * FROM industry_case_studies WHERE industry_id = 4 AND status = 0";
                      $getImgs2 = $conn->query($getCaseStudies2); 
                ?>
                <div class="column mix mix_all environment eco col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <?php while($row = $getImgs2->fetch_assoc()) { ?>
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="test_cases.php?tid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h3>
                                        <a class="arrow lightbox-image" href="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" title="Buildings"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
                
                <!--Column-->
                <?php $getCaseStudies3 = "SELECT * FROM industry_case_studies WHERE industry_id = 5 AND status = 0";
                      $getImgs3 = $conn->query($getCaseStudies3); 
                ?>
                <div class="column mix mix_all environment animals col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <?php while($row = $getImgs3->fetch_assoc()) { ?>
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="test_cases.php?tid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h3>
                                        <a class="arrow lightbox-image" href="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" title="Buildings"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
                <!--Column-->
                <?php $getCaseStudies4 = "SELECT * FROM industry_case_studies WHERE industry_id = 6 AND status = 0";
                      $getImgs4 = $conn->query($getCaseStudies4); 
                ?>
                <div class="column mix mix_all  eco energy col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <?php while($row = $getImgs4->fetch_assoc()) { ?>
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="test_cases.php?tid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h3>
                                        <a class="arrow lightbox-image" href="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" title="Buildings"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
                <!--Column-->
                <?php $getCaseStudies4 = "SELECT * FROM industry_case_studies WHERE industry_id = 3 AND status = 0";
                      $getImgs4 = $conn->query($getCaseStudies4); 
                ?>
                <div class="column mix mix_all environment eco energy plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <?php while($row = $getImgs4->fetch_assoc()) { ?>
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="test_cases.php?tid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h3>
                                        <a class="arrow lightbox-image" href="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" title="Buildings"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
                
                <!--Column-->
                
            </div>
            
        </div>
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



<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>