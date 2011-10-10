        <div class="newsrest">
         <?php //print_r($main); ?>
            <div id="big-news">
            <div class="newstitlez"><a href="<?php echo url::site('v2/haber/read/'.$main[0]->post_id.''); ?>"><?php echo $main[0]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[0]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[0]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstext"> <a href="<?php echo url::site('v2/haber/read/'.$main[0]->post_id.''); ?>"><?php echo $main[0]->subtitle; ?></a></div>
            <div class="newsdetails"> <a href="<?php echo url::site('v2/haber/read/'.$main[0]->post_id.''); ?>"><?php echo $main[0]->post_date; ?></a></div>

   			</div>
            <div id="long-news">
    		<div class="newstitlel"><a href="<?php echo url::site('v2/haber/read/'.$main[1]->post_id.''); ?>"><?php echo $main[1]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[1]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[1]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstextl"><a href="<?php echo url::site('v2/haber/read/'.$main[1]->post_id.''); ?>"><?php echo $main[1]->subtitle; ?></a></div>
       		<div class="newsdetailsl"><a href="<?php echo url::site('v2/haber/read/'.$main[1]->post_id.''); ?>"><?php echo $main[1]->post_date; ?></a></div>
   		</div>
              
        <div id="big-news">
            <div class="newstitlez"><a href="<?php echo url::site('v2/haber/read/'.$main[2]->post_id.''); ?>"> <?php echo $main[2]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[2]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[2]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstext"><a href="<?php echo url::site('v2/haber/read/'.$main[2]->post_id.''); ?>"> <?php echo $main[2]->subtitle; ?></a></div>
            <div class="newsdetails"><a href="<?php echo url::site('v2/haber/read/'.$main[2]->post_id.''); ?>"> <?php echo $main[2]->post_date; ?></a></div>

   			</div>
            <div id="big-news">
            <div class="newstitlez"><a href="<?php echo url::site('v2/haber/read/'.$main[3]->post_id.''); ?>"><?php echo $main[3]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[3]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[3]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstext"><a href="<?php echo url::site('v2/haber/read/'.$main[3]->post_id.''); ?>"><?php echo $main[3]->subtitle; ?></a></div>
            <div class="newsdetails"><a href="<?php echo url::site('v2/haber/read/'.$main[3]->post_id.''); ?>"><?php echo $main[3]->post_date; ?></a></div>

   			</div>
           <div id="long-news">
    		<div class="newstitlel"> <a href="<?php echo url::site('v2/haber/read/'.$main[4]->post_id.''); ?>"><?php echo $main[4]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[4]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[4]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstextl"><a href="<?php echo url::site('v2/haber/read/'.$main[4]->post_id.''); ?>"><?php echo $main[4]->subtitle; ?></a></div>
       		<div class="newsdetailsl"><a href="<?php echo url::site('v2/haber/read/'.$main[4]->post_id.''); ?>"><?php echo $main[4]->post_date; ?></a></div>
   		</div>
              
        <div id="big-news">
            <div class="newstitlez"><a href="<?php echo url::site('v2/haber/read/'.$main[5]->post_id.''); ?>"><?php echo $main[5]->title; ?></a></div>
          <a href="<?php echo url::site('v2/haber/read/'.$main[5]->post_id.''); ?>"> <?php echo  html::image(array ('src' =>'static/pictures/'.$main[5]->post_id.'-xxl.jpg','width' => '90', 'height' => '90')); ?></a>
       		<div class="newstext"><?php echo $main[5]->subtitle; ?></div>
            <div class="newsdetails"><?php echo $main[5]->post_date; ?></div>

   			</div>
        </div>

