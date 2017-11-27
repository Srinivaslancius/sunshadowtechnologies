<div class="top-bar">
            <div class="top-container">
                <!--Info Outer-->
                 <div class="info-outer">
                    <!--Info Box-->
                    <ul class="info-box clearfix">
                        <li><span class="icon flaticon-interface"></span><a href="#">adgreencoat@gmail.com</a></li>
                        <li><span class="icon flaticon-technology-5"></span><a href="#">(732) 803-010-03</a></li>
                        <li class="social-links-one">
                            <a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                            <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- Header Upper -->
        <?php 
        $getAllSiteSettingsData = getAllData('site_settings');
          $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
                    /*echo $getSiteSettingsData; die;*/ ?> 
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
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                            
                                <li><a href="index.php">Home</a>
                                
                                </li>
                                 <li><a href="about.php">About</a>
                                
                                </li>
                               
                               <li><a href="features.php">Features</a></li>
                               <li><a href="industries.php">Industries</a></li>
                               <li><a href="case_studies.php">Case Studies</a></li>
                               <li><a href="technical_info.php">Technical Info</a></li>
                                <li><a href="downloads.php">Downloads</a></li>
                                 <li><a href="faqs.php">F.A.Q</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="index.php"><img src="images/slides/adgreenbanner3.png" alt="sunshadow"></a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
                
            </div>
        </div><!-- Header Top End -->