<?php include_once 'title.php';?>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/casestudies.css" rel="stylesheet">
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
                <div class="bread-crumb"><a href="index.php">Home</a> / <a class="current">Case Studies</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Gallery Section-->
    
<section class="service white-bg page-section-ptb" style="margin-top:100px">
   <div class="container"> 
     <div class="row">
       <div class="col-lg-3 col-md-3">
         <div class="sidebar">
           <div class="service-nav">
             <ul>
            <?php 
              $getIndustries = "SELECT * FROM industries WHERE status= 0"; 
              $getIndustriesNames = $conn->query($getIndustries);
            ?> <?php while($getIndustriesAllNames = $getIndustriesNames->fetch_assoc()) { ?>
               <li><a <?php if($getIndustriesAllNames['id']  == 1){ echo "class=active";} ?>  href="case_studies_details.php?id=<?php echo $getIndustriesAllNames['id'];?>"><?php echo $getIndustriesAllNames['title'];?></a></li>
               <?php }?>
               
             </ul>
           </div>
        
         </div>
       </div>
        <div class="col-lg-9 col-md-9">
         <div class="service-block">
           <div class="row text-justify">
             <div class="col-lg-12 col-md-12">
                <?php $sql = "SELECT * FROM industries WHERE status = 0 AND id = 1"; 
                      $getIndName = $conn->query($sql);
                      $getIndustryName = $getIndName->fetch_assoc();

                ?>
               <h4 class="mb-20" style="text-indent:10px"><strong><?php echo $getIndustryName['title'];?></strong></h4>
               <p class="mb-20"><?php echo $getIndustryName['description'];?></p><br>
               <div class="row">
                <?php $getCaseStudies4 = "SELECT * FROM industry_case_studies WHERE industry_id = 6 AND status = 0";
                      $getImgs4 = $conn->query($getCaseStudies4); 
                ?>
                <?php while($row = $getImgs4->fetch_assoc()) { ?>
               <div class="col-sm-4">
               <img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$row['image'] ?>" class="img-responsive">
               </div>
               <?php }?>
                
               </div>
             </div>
           </div>
         
         </div>
       </div>
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