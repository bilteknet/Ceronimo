<div id="skin-content">
    
    	<div class="blogger">
            <div style="width:100%; padding: 10px; overflow:hidden; float:left;">
                <h4>Ekonomi</h4>
                <?php foreach($bloggers_posts as $blog_posts): ?>
              <div class="boxgrid slideright"> 
                  <a href="<?php echo url::site('v2/haber/read/'.$blog_posts->post_id.''); ?>">
        <?php echo  html::image(array ('src' =>'static/pictures/'.$blog_posts->post_id.'-xxl.jpg','width' => '107', 'height' => '107'),array('alt'=>'','class'=>'cover')); ?>
				<h3><?php echo $blog_posts->title; ?></h3> 
                  </a>
			</div> 
                <?php endforeach ; ?>
            
            
            </div>
        	<div style="width:100%; padding: 10px; overflow:hidden; float:left;">
                    <h4>Güncel</h4>
                <?php foreach($bloggers_posts as $blog_posts): ?>
              <div class="boxgrid slideright"> 
                  <a href="<?php echo url::site('v2/haber/read/'.$blog_posts->post_id.''); ?>">
        <?php echo  html::image(array ('src' =>'static/pictures/'.$blog_posts->post_id.'-xxl.jpg','width' => '107', 'height' => '107'),array('alt'=>'','class'=>'cover')); ?>
				<h3><?php echo $blog_posts->title; ?></h3> 
                  </a>
			</div> 
                <?php endforeach ; ?>
            
            
            </div>
            <div style="width:100%; padding: 10px; overflow:hidden; float:left;">
                <h4>Spor</h4>
                <?php foreach($bloggers_posts as $blog_posts): ?>
              <div class="boxgrid slideright"> 
                  <a href="<?php echo url::site('v2/haber/read/'.$blog_posts->post_id.''); ?>">
        <?php echo  html::image(array ('src' =>'static/pictures/'.$blog_posts->post_id.'-xxl.jpg','width' => '107', 'height' => '107'),array('alt'=>'','class'=>'cover')); ?>
				<h3><?php echo $blog_posts->title; ?></h3> 
                  </a>
			</div> 
                <?php endforeach ; ?>
            
            
            </div>
            <div style="width:100%; padding: 10px; overflow:hidden; float:left;">
                <h4>Yaşam</h4>
                <?php foreach($bloggers_posts as $blog_posts): ?>
              <div class="boxgrid slideright"> 
                  <a href="<?php echo url::site('v2/haber/read/'.$blog_posts->post_id.''); ?>">
        <?php echo  html::image(array ('src' =>'static/pictures/'.$blog_posts->post_id.'-xxl.jpg','width' => '107', 'height' => '107'),array('alt'=>'','class'=>'cover')); ?>
				<h3><?php echo $blog_posts->title; ?></h3> 
                  </a>
			</div> 
                <?php endforeach ; ?>
            
            
            </div>


        </div>
    
    
    