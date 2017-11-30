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

</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
  
    
 	
    <!-- Main Header -->
    <header class="main-header">
    	<?php include_once 'menu.php';?>
    </header><!--End Main Header -->
    
    
    <?php $getBanner = getAllDataCheckActive1('content_pages','0',28);
    $getBannerImage = $getBanner->fetch_assoc(); ?>
    <!--Page Title-->
      <section class="page-title" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getBannerImage['image'] ?>);">
        <div class="auto-container">
            <div class="sec-title">
                <h1><span class="normal-font"><?php echo $getBannerImage['title'];?></span></h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="" class="current"><?php echo $getBannerImage['title'];?></a></div>
            </div>
        </div>
    </section>
    <?php $id = $_GET['id']; ?>
    <?php 
        $getProItems = "SELECT * FROM products WHERE id = '$id' AND status = 0 ";
        $getPro = $conn->query($getProItems);
        $getItem = $getPro->fetch_assoc();

    ?>
    
    <!--Default Section-->
    <section class="default-section">
             <div class="container">
  <div class="row">
    <div class="col-sm-6">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo $base_url . 'uploads/product_images/'.$getItem['image'] ?>">
                </div>
            </div>
        </div> 
    
    </div> <!-- /col-sm-6 -->
    <div class="col-sm-6">
	
                <h2 style="font-size:25px"><b><?php echo $getItem['title']; ?><span class="normal-font theme_color"> </span></b></h2><br><h3>Rs. <?php echo $getItem['price']; ?></h3>
			       <div class="text"><?php echo substr(strip_tags($getItem['description']), 0,200);?></div>

             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 20px; background-color: #56529c; border: none">Place Order</button>
             <style type="text/css">
                  .modal-header .close {
                      margin-top: -18px;
                  }
             </style>
     <form method="post" action="save_orders.php">
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog" style="width: 50%;">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        
                                      <button type="button" class="close" style="font-size: 40px;" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title" style="color:black;text-align:center;">Place Order</h4>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <lable>User Name</label> 
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user_name" required  placeholder="User Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                         <lable>Email</label>                                       
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="user_email" required  placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <lable>Mobile</label>                                       
                                        <div class="form-group">
                                          <input type="text" name="user_mobile" class="form-control" id="user_mobile" placeholder="Mobile" data-error="Please enter Correct Mobile Number." required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" onkeyup="checkMobile()">
                                        </div>
                                        <?php $id = $_GET['id']; 
                                          $getProducts = "SELECT * FROM products WHERE id = '$id' AND status = 0 "; 
                                          $proName = $conn->query($getProducts);
                                          $getPro = $proName->fetch_assoc(); 
                                          
                                          ?>
                                        <lable>Product Name</label>
                                        <div class="form-group">
                                            <input type="text" readonly class="form-control" name="title" value="<?php echo $getPro['title'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <lable>Product Price</label>
                                        <div class="form-group">
                                            <input type="text" readonly class="form-control" name="price" value="<?php echo $getPro['price'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                
                                    </div>
                                    <div class="modal-footer">

                                      <button type="submit" class="site-button" value="submit" style="background-color: lightblue;border: 1px solid white;padding: 10px;font-size: larger;" name="submit">Submit</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>

  

    </div> <!-- /col-sm-6 -->
  </div> <!-- /row -->
</div>
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
<script>
  function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
      return true;
  }
  </script>