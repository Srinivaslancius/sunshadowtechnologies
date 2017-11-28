<div class="auto-container">        
            <div class="sec-title text-center">
                <h2>Our <span class="normal-font theme_color">Clients</span></h2><br>
            <div class="row clearfix">               
              
             
               
                   <?php $getClinetsData = "SELECT * from our_clients WHERE status = 0 ORDER BY id DESC LIMIT 0,6 ";
                         $getFeaturesData = $conn->query($getClinetsData);
                   ?>
                <?php while ($row = $getFeaturesData->fetch_assoc()) { ?>
                 <div class="column blog-news-column col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <article class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <a href="#"><img src="<?php echo $base_url . 'uploads/our_clients_images/'.$row['image'] ?>" alt=""></a>
                            
                        </figure>
                        <div class="content-box">
                            
                            <div class="post-info clearfix">
                                <div class="post-author"><?php echo $row['title']; ?></div>
                               
                            </div>
                            
                        </div>
                    </article>
                </div> 
                <?php } ?> 
            </div>
        </div>