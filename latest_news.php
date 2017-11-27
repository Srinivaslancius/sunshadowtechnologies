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
                <?php $getContentData2 = getAllDataCheckActive1('content_pages','0',8);
                $getData2 = $getContentData2->fetch_assoc(); ?>
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <figure class="image-box">
                            <a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getData2['image'] ?>" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <h3 style="text-align:left"><a href="news.php"><?php echo $getData2['title']; ?></a></h3>
                          <!--  <div class="column-info">13-14 Feb in Sanfransico, CA</div>-->
                            <div class="text"><?php echo substr(strip_tags($getData2['description']), 0,150);?></div>
                            <a href="news.php" class="theme-btn btn-style-three">Read More</a>
                        </div>
                    </article>
                </div>
                
                <!--Cause Column-->
                <?php $getContentData3 = getAllDataCheckActive1('content_pages','0',9);
                $getData3 = $getContentData3->fetch_assoc(); ?>
                <div class="column default-featured-column links-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <div class="vertical-links-outer">
                            <div class="link-block" style="text-align:left">
                                <div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/8.jpg" alt=""></a></figure><strong><?php echo $getData3['title']; ?></strong><span class="desc"><?php echo substr(strip_tags($getData3['description']), 0,150);?> </span></div>
                                <a href="news.php" class="alternate"><strong></strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            <?php $getContentData4 = getAllDataCheckActive1('content_pages','0',10);
                            $getData4 = $getContentData4->fetch_assoc(); ?>
                            <div class="link-block" style="text-align:left">
                                <div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/9.jpg" alt=""></a></figure><strong><?php echo $getData4['title']; ?></strong><span class="desc"><?php echo substr(strip_tags($getData4['description']), 0,150);?> </span></div>
                               <a href="news.php" class="alternate"><strong>Urgent Clothe Needed</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            <?php $getContentData5 = getAllDataCheckActive1('content_pages','0',11);
                            $getData5 = $getContentData5->fetch_assoc(); ?>
                            <div class="link-block" style="text-align:left">
                                <div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/8.jpg" alt=""></a></figure><strong><?php echo $getData5['title']; ?></strong><span class="desc"><?php echo substr(strip_tags($getData5['description']), 0,150);?> </span></div>
                                <a href="news.php" class="alternate"><strong>Let’s plant 200 tree each...</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            <?php $getContentData6 = getAllDataCheckActive1('content_pages','0',13);
                            $getData6 = $getContentData6->fetch_assoc(); ?>

                            <div class="link-block" style="text-align:left">
                                <div class="default inner"><figure class="image-thumb"><a href="#"><img src="images/slides/9.jpg" alt=""></a></figure><strong><?php echo $getData6['title']; ?></strong><span class="desc"><?php echo substr(strip_tags($getData6['description']), 0,150);?> </span></div>
                                <a href="news.php" class="alternate"><strong>Keep your house envirome..</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
              </div>  
            </div>
        </div>