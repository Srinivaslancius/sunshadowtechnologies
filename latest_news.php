<div class="auto-container">            
            <div class="sec-title text-center">
                <h2>Latest <span class="normal-font theme_color">News</span></h2><br>
                
            <div class="row clearfix">
                
                <!--Featured Column-->
                <?php $getNewsData = getAllDataCheckActive('news','0');?>
                
                <?php while ($row = $getNewsData->fetch_assoc()) { ?>
                <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <figure class="image-box">
                            <a href="#"><img style="width:500px;height:200px;" src="<?php echo $base_url . 'uploads/news_images/'.$row['banner'] ?>" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <h3 style="text-align:left"><a href="news.php?nid=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></h3>
                        <!--    <div class="column-info">13-14 Feb in Sanfransico, CA</div>-->
                            <div class="text"><?php echo substr(strip_tags($row['description']), 0,200);?> </div>
                            <a href="news.php?nid=<?php echo $row['id'];?>" class="theme-btn btn-style-three">Read More</a>
                        </div>
                    </article>
                </div>
                <?php }?>
                
                <!--Cause Column-->
              </div>  
            </div>
        </div>