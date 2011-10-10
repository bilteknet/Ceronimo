
    <?php foreach($news as $c_news): ?>

    	<div class="newslist">
            	<div class="profileposttitle"><a href ="<?php echo url::site('v2/haber/read/'.$c_news->post_id.''); ?>"><?php echo $c_news->title; ?></a></div>
             	<div class="profilepoststats"><?php echo $c_news->comment_count ?> yorum, <?php echo $c_news->read_count ?> okunma. </div>
           		<a href ="<?php echo url::site('v2/haber/profile/'.$c_news->username.''); ?>">
            	<div class="profileaboutheader"><?php echo $c_news->post_date; ?></div>
           	 	<div class="profileaboutheader"><?php echo $c_news->username; ?></div>
                </a>

				<div class="profilepost">
                    <a href ="<?php echo url::site('v2/haber/read/'.$c_news->post_id.''); ?>"><?php echo  html::image(array ('src' =>'static/pictures/'.$c_news->post_id.'-xxl.jpg','width' => '100', 'height' => '100')); ?>
                	<div class="profileposttext"><?php echo $c_news->subtitle; ?></div>  
                    <div class="profilepostdate"><?php echo $c_news->post_date; ?></div>                  
                </div>
               

        </div>
  
    <?php endforeach ; ?>

