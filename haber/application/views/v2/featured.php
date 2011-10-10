<div id="skin-content">
    
    	<div class="highlights">
            <div style="width:330px; overflow:hidden; float:left;">
                <?php foreach($bloggers_posts as $blog_posts): ?>
              <div class="boxgrid slideright"> 
                  <a href="<?php echo url::site('v2/haber/read/'.$blog_posts->post_id.''); ?>">
        <?php echo  html::image(array ('src' =>'static/pictures/'.$blog_posts->post_id.'-xxl.jpg','width' => '107', 'height' => '107'),array('alt'=>'','class'=>'cover')); ?>
				<h3><?php echo $blog_posts->title; ?></h3> 
                  </a>
			</div> 
                <?php endforeach ; ?>
            
            
            </div>
        	<div class="slider">
                    <div id="showcase" >
                    <?php  foreach($main_news as $slider) : ?>
                    <div class="showcase-slide">
			<!-- Put the slide content in a div with the class .showcase-content. -->
			<div class="showcase-content">
     <a href="<?php echo url::site('v2/haber/read/'.$slider->post_id.''); ?>">  <?php echo  html::image(array ('src' =>'static/pictures/'.$slider->post_id.'-xxl.jpg','width' => '280', 'height' => '280')); ?></a>
     <div class="showcase-caption"><?php echo $slider->title; ?></div>  
     <div class="showcase-tooltips">
				<!-- Each anchor in .showcase-tooltips represents a tooltip. The coords attribute represents the position of the tooltip. -->
				<a  href="http://www.awkward.se" coords="75,26">
					<!-- The content of the anchor-tag is displayed in the tooltip. -->
                                        <div class="showcase-tooltip">haber ipucu</div>
				</a>

				<a href="http://www.awkward.se" coords="90,35">
					    <div class="showcase-tooltip">haber ipucu</div>
				</a>
				<a href="http://www.awkward.se" coords="22,35">
					    <div class="showcase-tooltip">haber ipucu</div>
				</a>
				
			</div>
			</div>
			
			<!-- Put the caption content in a div with the class .showcase-caption -->
			
		</div>
                    
                    <?php endforeach; ?>
                    
                    </div>
                    
                    
             
            </div>

                

        </div>