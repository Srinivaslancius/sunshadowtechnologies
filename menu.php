<div class="top-bar">
    <?php 
            $getAllSiteSettingsData = getAllData('site_settings');
            $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
         ?> 
         <?php $getContentData1 = getAllDataCheckActive1('content_pages','0',12);
                $getData = $getContentData1->fetch_assoc(); ?>
        	<div class="top-container">
            	<!--Info Outer-->
                 <div class="info-outer">
                 	<!--Info Box-->
                    <ul class="info-box clearfix">
                        <li><span class="icon flaticon-interface"></span><a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><?php echo $getSiteSettingsData['email']; ?></a></li>
                        <li><span class="icon flaticon-technology-5"></span><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile']; ?></a></li>
                        <li class="social-links-one">
                            <a href="<?php echo $getSiteSettingsData['fb_link']; ?>" class="facebook img-circle" target="_blank"><span class="fa fa-facebook-f"></span></a>
                            <a href="<?php echo $getSiteSettingsData['twitter_link']; ?>" class="twitter img-circle" target="_blank"><span class="fa fa-twitter"></span></a>
                            <a href="<?php echo $getSiteSettingsData['gplus_link']; ?>" class="google-plus img-circle" target="_blank"><span class="fa fa-google-plus"></span></a>
                            <a href="<?php echo $getSiteSettingsData['linkden_link']; ?>" class="linkedin img-circle" target="_blank"><span class="fa fa-linkedin"></span></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </div>
    	<!-- Header Upper -->
    	<div class="header-upper">
        	<div class="auto-container clearfix" style="max-width:1350px">			
            	<!-- Logo -->
                <div class="logo">
                    <a href="index.php"><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" alt="<?php echo $getSiteSettingsData['admin_title']; ?>"></a>
                 </div>                
                 <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    
                  <!--  <a href="#" class="theme-btn btn-donate" data-toggle="modal" data-target="#donate-popup">Donate Now!</a>-->
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php 
                            $currentFile = $_SERVER["PHP_SELF"];
                            $parts = Explode('/', $currentFile);
                            $page_name = $parts[count($parts) - 1];
                        ?>
                        <style type="text/css">
                        .check_page {
                            color:#6ac610 !important;
                        }
                        </style>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">                                                         
								 <li  class="active"><a href="index.php" <?php if($page_name == 'index.php') {  ?> class="check_page" <?php } ?>>Home</a>
                                
                                </li>
                                 <li class="active"><a href="about.php" <?php if($page_name == 'about.php') {  ?> class="check_page" <?php } ?>>About</a>
                                
                                </li>
                               
                               <li class="active"><a href="features.php" <?php if($page_name == 'features.php') {  ?> class="check_page" <?php } ?>>Features</a>
                                 
                                </li>
                               <li class="active"><a href="industries.php" <?php if($page_name == 'industries.php') {  ?> class="check_page" <?php } ?>>Industries</a>
                                 
                                </li>
                               <li class="active"><a href="case_studies.php" <?php if($page_name == 'case_studies.php') {  ?> class="check_page" <?php } ?>>Case Studies</a>
                                  
                                </li>
                               <li class="active"><a href="technical_info.php" <?php if($page_name == 'technical_info.php') {  ?> class="check_page" <?php } ?>>Technical Info</a>
                                 
                                </li>
                                <li class="active"><a href="downloads.php" <?php if($page_name == 'downloads.php') {  ?> class="check_page" <?php } ?>>Downloads</a></li>
                                 <li class="active"><a href="faqs.php" <?php if($page_name == 'faqs.php') {  ?> class="check_page" <?php } ?>>F.A.Q</a></li>
                                <li class="active"><a href="contact.php" <?php if($page_name == 'contact.php') {  ?> class="check_page" <?php } ?>>Contact</a></li>
								<li><a href="index.php"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData['image'] ?>" alt="<?php echo $getData['title']; ?>"></a></li> 
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
                
            </div>
        </div><!-- Header Top End -->