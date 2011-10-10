
    <?php foreach($news as $c_news): ?>
    	<div class="subcategory">
            <div class="username"><?php echo $c_news->title; ?></div>
           <a href ="<?php echo url::site('v2/haber/profile/'.$c_news->username.''); ?>">
            	<div class="profileaboutheader"><?php echo $c_news->post_date; ?></div>
           	 	<div class="profileaboutheader"><?php echo $c_news->username; ?></div>
                </a>

                <div class="newstextcat">
                    <a href ="<?php echo url::site('v2/haber/read/'.$c_news->post_id.''); ?>"><?php echo  html::image(array ('src' =>'static/pictures/'.$c_news->post_id.'-xxl.jpg','width' => '100', 'height' => '100')); ?>
          <?php echo $c_news->subtitle; ?>
                    </a>
                </div>
            <div style="height: 5px; padding-top: 5px;"></div>
                 <div>
                    <?php echo $c_news->comment_count ?> yorum, <?php echo $c_news->read_count ?> okunma.
                </div>

        </div>
  
    <?php endforeach ; ?>