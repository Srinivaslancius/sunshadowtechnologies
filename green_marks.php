 <div class="auto-container">
		<div class="sec-title text-center">
                <h2>Green<span class="normal-font theme_color">marks</span></h2><br>
            <div class="slider-outer">            
                <ul class="sponsors-slider">
                    <?php $getFeaturesData = getAllDataCheckActive('green_marks',0);?>
                <?php while ($row = $getFeaturesData->fetch_assoc()) { ?>
                    <li><a href="#"><img src="<?php echo $base_url . 'uploads/greenmarks_images/'.$row['image'] ?>" alt=""></a></li>
                    <?php } ?>
                
                </ul>
                
            </div>
            
          </div>  
        </div>