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
                <h1>FAQ</h1>
                <div class="bread-crumb"><a href="index.php">Home</a> /<a class="current">FAQs</a></div>
            </div>
        </div>
    </section>
    
    
    <!--404 Section-->
    <section class="faqs-section">
    	<div class="auto-container">
        	<div class="sec-title text-center small-container padd-bott-30">
            	<h3 class="bigger-text">EVERYTHING YOU NEED TO KNOW ABOUT THIS <span class="normal-font theme_color"> NCK GULF</span></h3>
               <!-- <div class="text">If you have any concerns please read this collection of frequently asked questions before contacting us. If you are still unclear about something feel free to contact.</div>-->
            </div>
            
        	<div class="row clearfix">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <!--Accordion Box-->
                     <?php $getAllActiveFaqs = getAllDataCheckActive('faqs',0); ?>
                    <div class="accordion-box">
                        
                        <?php $i=1; while($getAllData=$getAllActiveFaqs->fetch_assoc()) { ?>
                        <div class="accordion accordion-block" role="tab" id="heading<?php echo $i; ?>">
                            <div class="accord-btn"><h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php echo $getAllData['question']; ?></a> </h4></div>
                            <div class="accord-content" id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==1) { ?> in <?php } else { } ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                <p><?php echo $getAllData['answer']; ?> </p>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                    
                </div>
            </div>
    	</div>
    </section>
	    <section class="blog-news-section latest-news" style="margin-top:-150px">
    	<?php include_once 'our_clients.php';?>
    </section>	
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