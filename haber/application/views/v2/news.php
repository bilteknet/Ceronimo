 <div class="newssub">
      <?php foreach ($main_news as $news) : ?>
        	<div id="main-news">
            <div class="newstitlex"><a href=" <?php echo url::site('v2/haber/read/'.$news->post_id.''); ?>"><?php echo  $news->title ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$news->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$news->post_id.'-xxl.jpg','width' => '107', 'height' => '107')); ?>
          <div class="newstext"><?php echo $news->subtitle; ?></div>
          </a>
          <div class="newsdetails"><?php echo  $news->post_date ?>, <?php echo  $news->read_count ?> kez okundu.</div>
        	</div>
            <?php endforeach; ?>
      </div>
