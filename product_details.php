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
                <h1>Product Details</h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">Product details</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Default Section-->
    <section class="default-section">
             <div class="container">
  <div class="row">
    <div class="col-sm-6">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slides/15.png">
                </div>
                <div class="item">
                    <img src="images/slides/16.jpg">
                </div>
                <div class="item">
                    <img src="images/slides/15.png">
                </div>
                <div class="item">
                     <img src="images/slides/16.jpg">
                </div>
                <div class="item">
                   <img src="images/slides/15.png">
                </div>
                <div class="item">
                    <img src="images/slides/16.jpg">
                </div>
                <div class="item">
                   <img src="images/slides/15.png">
                </div>
                <div class="item">
                     <img src="images/slides/16.jpg">
                </div>
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="images/slides/15.png"></div>
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="images/slides/16.jpg"></div>
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="images/slides/15.png"></div>
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="images/slides/16.jpg"></div>
                </div><!-- /item -->
                <div class="item">
                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="images/slides/15.png"></div>
                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="images/slides/16.jpg"></div>
                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="images/slides/15.png"></div>
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="images/slides/16.jpg"></div>
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
    </div> <!-- /col-sm-6 -->
    <div class="col-sm-6">
	
                <h2 style="font-size:25px"><b>PRODUCT<span class="normal-font theme_color"> DETAILS</span></b></h2><br>
			
       <table class="table table-bordered">
    <thead>
      <tr>
        <th>ADGREENCOAT ®GPσ KIND</th>
        <th>(Main Coat 1 & Coat 2)</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2">Top coat / * Global environment-friendly heat-shield coating] "Adgreencoat ®"</td>
      </tr>
	  <tr>
        <td>Kind</td>
		<td>GP σ 008 (Rose white)<br>
		GP σ 009 (White)<br>
		GP σ 200 (Ivory)<br>
		GP σ 201 (Cream)GP σ 300 (Mint green)<br>
		GP σ 305 (Apple green)<br>
		GP σ 100 (Pearl gray)<br>
		GP σ 400 (Sky blue)<br>
		GP σ 600 (Rose)<br>
		GP σ 500 (Brown)<br>
		</td>
      </tr>
	   <tr>
        <td>Packing</td>
		<td>13kg/can (10ℓ)</td>
      </tr>
	   <tr>
        <td>The coating number of times	</td>
		<td>2</td>
      </tr>
	  <tr>
        <td>Contents</td>
		<td>Acrylic emulsion resin</td>
      </tr>
	   <tr>
        <td>Dilution ratio</td>
		<td>Drinking water: (0-5%: brush, roller) (5-10%: spray)</td>
      </tr>
	  <tr>
        <td>Contents</td>
		<td>Acrylic emulsion resin</td>
      </tr>
	  <tr>
        <td colspan="2">*Quantity of 1 standard application becomes quantity of application per once. In addition, two times of main materials become coating.
		</td>
      </tr>
	   <tr>
        <td colspan="2">*The value of the standard application amount is the standard value of usage. It may vary depending on the conditions of the individual.

		</td>
      </tr>
	  
    </tbody>
  </table>
  <button type="button" class="btn btn-success">ADD TO CART</button>
    </div> <!-- /col-sm-6 -->
  </div> <!-- /row -->
</div>
        </div>
    </section>
    <section class="blog-news-section latest-news" style="margin-top:-100px">
    	<div class="auto-container">
         <div class="sec-title text-center">
                <h2 style="font-size:25px">Related <span class="normal-font theme_color">Products</span></h2><br>
        	<div class="row clearfix">
                
                <!--News Column-->
               <div class="column blog-news-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<figure class="image-box">
                        	<a href="#"><img src="images/slides/14.jpg" alt=""></a>
                           <!-- <div class="news-date"><span class="month">NEW</span></div>-->
                        </figure>
					  <div class="post">
						<h4><b>Adgreencoat ®GPσ</b></h4> 
						<p>₹ 250.00</p> 
					  </div>
					</div>
                </div>
                
                <!--News Column-->
                <div class="column blog-news-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<figure class="image-box">
                        	<a href="#"><img src="images/slides/14.jpg" alt=""></a>
                           <!-- <div class="news-date"><span class="month">NEW</span></div>-->
                        </figure>
					  <div class="post">
						<h4><b>Adgreencoat ®GPσ</b></h4> 
						<p>₹ 250.00</p> 
					  </div>
					</div>
                </div>
                
                <!--News Column-->
               <div class="column blog-news-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<figure class="image-box">
                        	<a href="#"><img src="images/slides/14.jpg" alt=""></a>
                           <!-- <div class="news-date"><span class="month">NEW</span></div>-->
                        </figure>
					  <div class="post">
						<h4><b>Adgreencoat ®GPσ</b></h4> 
						<p>₹ 250.00</p> 
					  </div>
					</div>
                </div>
                
                <!--News Column-->
                <div class="column blog-news-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<figure class="image-box">
                        	<a href="#"><img src="images/slides/14.jpg" alt=""></a>
                           <!-- <div class="news-date"><span class="month">NEW</span></div>-->
                        </figure>
					  <div class="post">
						<h4><b>Adgreencoat ®GPσ</b></h4> 
						<p>₹ 250.00</p> 
					  </div>
					</div>
                </div>
            </div>
            </div>
            <!-- Styled Pagination -->
            
            
        </div>
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