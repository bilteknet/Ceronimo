<div class="hotnews">
        	<div class="hotnewsheader">Popüler  Başlıklar</div>
            <div class="hotnewsbody">
                <?php foreach ($big_news as $h_news): ?>
            	<div class="hotnewsitem"> 
            	<?php echo  html::image(array ('src' =>'static/pictures/'.$h_news->post_id.'-xxl.jpg','width' => '45', 'height' => '45')); ?>
                	<div class="itemnewstitle"><?php echo $h_news->title; ?></div>
                    <div class="itemnewsbody"><a href="<?php echo url::site('v2/haber/read/'.$h_news->post_id.''); ?>">devamı..</a></div>
            	</div>
                <?php endforeach; ?>
            </div>
