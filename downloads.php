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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style>
  .carousel {
    margin-top: 20px;
}
.item .thumb {
	width: 25%;
	cursor: pointer;
	float: left;
}
.item .thumb img {
	width: 100%;
	margin: 2px;
}
.item img {
	width: 100%;	
}

  </style>
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
                <h1>Downloads</h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">Downloads</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Default Section-->
    <?php $getCategoriesData = "SELECT * FROM categories WHERE status='0' "; 
$getAllcategoriesData = $conn->query($getCategoriesData);

?>
    <section class="blog-news-section latest-news">
    	<div class="auto-container">
        <?php while($getCategories = $getAllcategoriesData->fetch_assoc()) {?>
        <div class="sec-title text-center">
                <h2 style="font-size:25px"><?php echo $getCategories['category_name']; ?><span class="normal-font theme_color"></span></h2><br>
        	<div class="row clearfix">
                
                <!--News Column-->
                <?php 
                $getCatId = $getCategories['id'];
                $getDownloadsData = "SELECT * FROM downloads WHERE  category_id='$getCatId' AND status=0";
                $getAllDownloadsData = $conn->query($getDownloadsData); 
                while($getDownloads = $getAllDownloadsData->fetch_assoc()) {
                ?>
                <div class="column blog-news-column col-lg-2 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="<?php echo $base_url . 'uploads/downloads_pdf_images/'.$getDownloads['pdf_image'] ?>" target="_blank"><img src="images/gallery/pdf1.png" alt=""></a>   
                        </figure>
                        <div class="content-box">
                        	<h4 style="font-size:15px; text-align:center"><a href="#"><?php echo $getDownloads['title']; ?></a></h4>
                        	
                          <!--  <div class="text">Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt ut modo labore et dolore magna aliqua veniam...</div>
                            <a href="#" class="theme-btn btn-style-three">Read More</a>-->
                        </div>
                    </article>
                </div>
                <?php } ?>			
            </div>
        </div>
        <?php } ?>
            <!-- Styled Pagination -->    
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