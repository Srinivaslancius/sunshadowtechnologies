<div class="auto-container">        	
            <div class="sec-title text-center">
                <h2>Latest <span class="normal-font theme_color">News</span></h2><br>
                
        	<div class="row clearfix">
                
                <!--Featured Column-->
                <?php $getContentData1 = getAllDataCheckActive1('content_pages','0',7);
                $getData = $getContentData1->fetch_assoc(); ?>
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData['image'] ?>" alt=""></a>
                            <div class="post-tag">Featured</div>
                        </figure>
                        <div class="content-box">
                        	<h3 style="text-align:left"><a href="news.php"><?php echo $getData['title']; ?></a></h3>
                        <!--    <div class="column-info">13-14 Feb in Sanfransico, CA</div>-->
                            <div class="text"><?php echo substr(strip_tags($getData['description']), 0,200);?> </div>
                            <a href="news.php" class="theme-btn btn-style-three">Read More</a>
                        </div>
                    </article>
                </div>
                
                <!--Featured Column-->
                <?php $getContentsData2 = getAllDataCheckActive1('content_pages','0',8);
                $getData2 = $getAboutData2->fetch_assoc(); ?>
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData['image'] ?>" alt=""></a>
                        </figure>
                        <div class="content-box">
                        	<h3 style="text-align:left"><a href="news.php">One Tree Thousand Hope</a></h3>
                          <!--  <div class="column-info">13-14 Feb in Sanfransico, CA</div>-->
                            <div class="text">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae.. </div>
                            <a href="news.php" class="theme-btn btn-style-three">Read More</a>
                        </div>
                    </article>
                </div>
                
                <!--Cause Column-->
                <div class="column default-featured-column links-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box">
                		<div class="vertical-links-outer">
                        	<div class="link-block" style="text-align:left">
                            	<div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/8.jpg" alt=""></a></figure><strong>Togather we can change the</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
                                <a href="news.php" class="alternate"><strong>Togather we can change the</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            
                            <div class="link-block" style="text-align:left">
                            	<div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/9.jpg" alt=""></a></figure><strong>Urgent Clothe Needed</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
                               <a href="news.php" class="alternate"><strong>Urgent Clothe Needed</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            
                            <div class="link-block" style="text-align:left">
                            	<div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/8.jpg" alt=""></a></figure><strong>Let’s plant 200 tree each...</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
                                <a href="news.php" class="alternate"><strong>Let’s plant 200 tree each...</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            
                            <div class="link-block" style="text-align:left">
                            	<div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/9.jpg" alt=""></a></figure><strong>Keep your house envirome..</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></div>
                                <a href="news.php" class="alternate"><strong>Keep your house envirome..</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
              </div>  
            </div>
        </div>