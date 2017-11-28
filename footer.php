
<!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Two 4th column-->
              <div class="col-sm-4">

<?php 
if (!isset($_POST['newsletter']))  {
            echo "";
    } else  { 
    //echo "<pre>";print_r($_POST);
    $email = $_POST['email'];
    $created_at = date("Y-m-d h:i:s");
    $sql = "INSERT INTO news_letter (`email`,`created_at`) VALUES ('$email','$created_at')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href=window.location.href;</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href=window.location.href;</script>";
    }
}
        
?>
                
            <?php 
                $getAllSiteSettingsData = getAllData('site_settings');
                $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
            ?> 
                                <div class="footer-widget about-widget">
                                    <div class="logo"><a href="index.php"><img src="images/slides/logo1.png" class="img-responsive" alt=""></a></div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, eu me.</p>
                                    </div>
                                    
                                    <ul class="contact-info">
                                    	<li><span class="icon fa fa-map-marker"></span> <?php echo $getSiteSettingsData['address']; ?></li>
                                        <li><span class="icon fa fa-phone"></span> <a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile']; ?></a></li>
                                        <li><span class="icon fa fa-envelope-o"></span> <a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><?php echo $getSiteSettingsData['email']; ?></a></li>
                                    </ul>
                                    
                                    <div class="social-links-two clearfix">
                                    	<a href="<?php echo $getSiteSettingsData['fb_link']; ?>" target="_blank" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                        <a href="<?php echo $getSiteSettingsData['twitter_link']; ?>" target="_blank" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                        <a href="<?php echo $getSiteSettingsData['gplus_link']; ?>" target="_blank" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                        <!-- <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a> -->
                                        <a href="<?php echo $getSiteSettingsData['linkden_link']; ?>" target="_blank" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                    
                                </div>
                         </div>
                            
                            <!--Footer Column-->
                            <div class="col-sm-4">
                                <h2>Company</h2><br>
								
                                <div class="footer-widget links-widget">
								<div class="row">
								 <div class="col-lg-3 col-sm-3 col-xs-12 column">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="features.php">Features</a></li>
                                        <li><a href="industries.php">Industries</a></li>
                                        
                                    </ul>
									</div>
                                 
								   <div class="col-lg-9 col-sm-9 col-xs-12 column">
                              
                                    <ul>
                                         <li><a href="faqs.php">FAQ</a></li>
										    <li><a href="contact.php">Contact</a></li>
                                        <li><a href="case_studies.php">Case studies</a></li>
                                        <li><a href="technical_info.php">Technical Info</a></li>
										 <li><a href="downloads.php">Downloads</a></li>
										
										
                                    </ul>
									 </div>
                                  </div>
                                </div>
                            </div>
                    	
               
                    
                    <!--Two 4th column-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    	
                    		<!--Footer Column-->
                        	
                            	<div class="footer-widget news-widget">
                                	<h2>NCK News</h2>	
                                    
                                    <!--News Post-->
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><figure class="image-thumb"><img src="images/slides/8.jpg" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                    <!--News Post-->
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><figure class="image-thumb"><img src="images/slides/9.jpg" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                </div>
                          
                            <!--Footer Column-->
                            
                    	
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2016 &copy; Theme Created By <a target="_blank" href="https://www.lanciussolutions.com/" ><?php echo $getSiteSettingsData['footer_text'];?></a></div>
            </div>
        </div>