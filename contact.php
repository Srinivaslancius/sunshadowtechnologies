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
    <?php
if(!empty($_POST['name_contact']) && !empty($_POST['email_contact']) && !empty($_POST['text']) && !empty($_POST['message_contact']))  {
    
    $name_contact = $_POST['name_contact'];
    $email_contact = $_POST['email_contact'];
    $phone_contact = $_POST['text'];
    $message_contact = $_POST['message_contact'];

    $dataem = $getSiteSettingsData["email"];
//$to = "srinivas@lanciussolutions.com";
$to = "$dataem";
$subject = "Adgreencost - Contact Us ";
$message = "";
$message .= "<style>
        .body{
    width:100% !important; 
    margin:0 !important; 
    padding:0 !important; 
    -webkit-text-size-adjust:none;
    -ms-text-size-adjust:none; 
    background-color:#FFFFFF;
    font-style:normal;
    }
    .header{
    background-color:#c90000;
    color:white;
    width:100%;
    }
    .content{
    background-color:#FBFCFC;
    color:#17202A;
    width:100%;
    padding-top:15px;
    padding-bottom;15px;
    text-align:justify;
    font-size:14px;
    line-height:18px;
    font-style:normal;
    }
    h3{
    color: #c90000;}
    .footer{
    background-color:#c90000;
    color:white;
    width:100%;
    padding-top:9px;
    padding-bottom:5px;
    }
    .logo-responsive{
    max-width: 100%;
    height: auto !important;
    }
    @media screen and (min-width: 480px) {
        .content{
        width:50%;
        }
        .header{
        width:50%;
        }
        .footer{
        width:50%;
        }
        .logo-responsive{
        max-width: 100%;
        height: auto !important;
        }
    }
    </style>";

$message .= "<html><head><title>Adgreencost Contactus Form</title></head>
<body>
        <div class='container header'>
            <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                </div>
                <div class='col-lg-8 col-md-8 col-sm-8'>
                <center><h2>".$getSiteSettingsData['admin_title']."</h2></center>
                </div>
                <div class='col-lg-2 col-md-2 col-sm-2'>
                    
                </div>
            </div>
        </div>
        <div class='container content'>
            <h3>Contact Us Information!</h3>
            <h4>First Name: </h4><p>".$name_contact."</p>
            <h4>Email: </h4><p>".$email_contact."</p>
            <h4>Subject: </h4><p>".$phone_contact."</p>
            <h4>Message: </h4><p>".$message_contact."</p>  
        </div>
        <div class='container footer'>
            <center>".$getSiteSettingsData['footer_text']."</center>
        </div>
    </body>
</html>";
//echo $message; die;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$name_contact.'<'.$email_contact.'>'. "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
    echo  "<script>alert('Thank You For Your feedback');window.location.href('contact.php');</script>";
}

}
?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/slides/4.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Contact <span class="normal-font">Us</span></h1>
                <div class="bread-crumb"><a href="index.php">Home</a> / <a href="#" class="current">Contact Us</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<div class="auto-container">
        
        	<div class="row clearfix">
        <?php 
        $getAllSiteSettingsData = getAllData('site_settings');
          $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
                    /*echo $getSiteSettingsData; die;*/ ?> 
                <!--Info Column-->
                <?php $getContentData1 = getAllDataCheckActive1('content_pages','0',18);
                    $getData1 = $getContentData1->fetch_assoc(); ?>
                <div class="column info-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">
                		<h3 class="margin-bott-20"><?php echo $getData1['title'];?></h3>
                        <div class="text margin-bott-40"><?php echo substr(strip_tags($getData1['description']), 0,150);?> </div>
                        <ul class="info-box">
                            <li><span class="icon flaticon-location"></span><strong>Address</strong> <?php echo $getSiteSettingsData['address']; ?></li>
                            <li><span class="icon flaticon-technology-5"></span><strong>Phone</strong> <?php echo $getSiteSettingsData['mobile']; ?></li>
                            <li><span class="icon flaticon-interface-1"></span><strong>Email</strong> <?php echo $getSiteSettingsData['email']; ?></li>
                        </ul>
                    </article>
                </div>
                
                <!--Image Column-->
                <div class="column image-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData1['image'] ?>" alt=""></figure>
                    </article>
                </div>
            
            </div>
        </div>
    </section>
    
    
    <!--Contact Section-->
    <section class="contact-section no-padd-top">
    	<div class="auto-container">
        
        	<div class="row clearfix">
                <script src="https://maps.google.com/maps/api/js?key=AIzaSyA04qekzxWtnZq6KLkabMN_4abcJt9nCDk" type="text/javascript"></script>
                <!--Map Column-->
                <div class="column map-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<h2>Our Location on Map</h2>
					<div class="map-responsive" id="map">
					</div>
                     <script type="text/javascript">
                            var locations = [
                              ['Sun Shadow Technologies',17.446122, 78.393270],
                            ];

                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 14,
                              center: new google.maps.LatLng(17.448293, 78.391485),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                            });

                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;

                            for (i = 0; i < locations.length; i++) {  
                              marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                map: map
                              });

                              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                  infowindow.setContent(locations[i][0]);
                                  infowindow.open(map, marker);
                                }
                              })(marker, i));
                            }
                          </script>
                </div>
                <!--Form Column-->
                <div class="column form-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                	<h2>Send Message</h2>
                	<!--COntact Form-->
                	<div class="inner-box contact-form">
                    	<form method="post" action="" id="contact-form">
                        	<div class="row clearfix">
                            	<!--Form Group-->
                                <div class="form-group col-md-6 col-xs-12">
                                	<input type="text" name="name_contact" value="" placeholder="Your Name" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-xs-12">
                                	<input type="text" name="email_contact" value="" placeholder="Your Email" required>
                                </div>
								 <div class="form-group col-md-12 col-xs-12">
                                	<input type="text" name="text" value="" placeholder="Subject" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-xs-12">
                                	<textarea name="message_contact" placeholder="Message" required></textarea>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-xs-12">
                                	<div class="text-right"><button type="submit" class="theme-btn btn-style-two">Send</button></div>
                                </div>
                            </div>
                        </form>
                    </div><!--COntact Form-->
                    
                </div>
            
            </div>
        </div>
    </section>
     <section class="recent-projects" style="margin-top:-100px">
    	<?php include_once 'sample_heading.php';?>
    </section>
	<section class="events-section latest-events" style="margin-top:-100px">
    	<?php include_once 'latest_news.php';?>
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


<!-- /.modal -->

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/map-script.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>