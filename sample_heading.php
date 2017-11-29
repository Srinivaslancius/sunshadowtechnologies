<?php include_once 'title.php';?>
<div class="auto-container">       	
            <div class="sec-title clearfix">
            	<div class="pull-center">
                    <center><h2>Case<span class="normal-font theme_color">&nbsp;Studies</span></h2></center>
                  <!--  <div class="text">Lorem ipsum dolor sit amet, cum at inani interesset, nisl fugit munere ad mel,vix an omnium dolor amet </div>-->
                </div>
               <!-- <div class="pull-right padd-top-30">
                	<a href="#" class="theme-btn btn-style-three">See All</a>
                </div>-->
            </div><br>
            <?php $getChooseData1 = getAllDataCheckActive1('content_pages','0',1);
                    $getChoose1 = $getChooseData1->fetch_assoc(); ?>
        	<div class="row clearfix">
                
                <!--Default Featured Column-->
                <div class="column default-featured-column col-md-4 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getChoose1['image'] ?>" alt="<?php echo $getChoose1['title'];?>"></a>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="about.php"><?php echo $getChoose1['title'];?></a></h3>
                           <!-- <div class="column-info">Environment, Go Green Company</div>-->
                            <div class="text"><?php echo substr(strip_tags($getChoose1['description']), 0,150);?></div>
                            <a href="about.php" class="theme-btn btn-style-three">Learn More</a>
                        </div>
                    </article>
                </div>
                <?php $getChooseData2 = getAllDataCheckActive1('content_pages','0',2);
                $getChoose2 = $getChooseData2->fetch_assoc(); ?>
                <!--Default Featured Column-->
                <div class="column default-featured-column col-md-4 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getChoose2['image'] ?>" alt="<?php echo $getChoose2['title'];?>"></a>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="case_studies.php"><?php echo $getChoose2['title'];?></a></h3>
                         <!--   <div class="column-info">Environment, Go Green Company</div>-->
                            <div class="text"><?php echo substr(strip_tags($getChoose2['description']), 0,150);?></div>
                            <a href="case_studies.php" class="theme-btn btn-style-three">Learn More</a>
                        </div>
                    </article>
                </div>
              <?php $getChooseData3 = getAllDataCheckActive1('content_pages','0',3);
                $getChoose3 = $getChooseData3->fetch_assoc(); ?>
                <!--Default Featured Column-->
                <div class="column default-featured-column col-md-4 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $base_url . 'uploads/content_images/'.$getChoose3['image'] ?>" alt="<?php echo $getChoose3['title'];?>"></a>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="contact.php"><?php echo $getChoose3['title'];?></a></h3>
                         <!--   <div class="column-info">Environment, Go Green Company</div>-->
                            <div class="text"><?php echo substr(strip_tags($getChoose3['description']), 0,150);?></div>
                            <a href="contact.php" class="theme-btn btn-style-three">Learn More</a>
                        </div>
                    </article>
                </div>
                
            </div>
        </div>