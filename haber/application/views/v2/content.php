
    
    	<div class="newsread">
        	<div class="newsreadtop">
            	<div class="author">
                <div class="avatar"><?php echo  html::image('static/pictures/user/default.gif'); ?></div>
                <div class="authorinfo"><a href="<?php echo url::site('v2/haber/profile/'.$read_post[0]->username.''); ?>"><?php echo $read_post[0]->username;?></a></div>
                 <div class="postdetails"><?php echo $read_post[0]->post_date;?></div>
                </div>
                <div class="socialbuttons">
                <a href="#"><img src="images/iconfb.png"/></a>
                <a href="#"><img src="images/iconfb.png"/></a>
                <a href="#"><img src="images/iconfb.png" width="15"/></a>
                </div>
            </div>
              <div class="how">
              	 <div class="howtitle">HABERİ OYLA </div>
                 <form method="post" action="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.''); ?>">
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/yenilikci'); ?>">Yenilikçi</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/bilgilendirici'); ?>">Bilgilendirici</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/mantikli'); ?>">Mantıklı</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/eglenceli'); ?>">Eğlenceli</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/iyimser'); ?>">iyimser</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/karamsar'); ?>">Karamsar</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/heyecanlı'); ?>">Heyecanlı</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/ürkütücü'); ?>">Ürkütcü</a>
                                 
                 </form>
              </div>
              <div class="newstitle"><?php echo $read_post[0]->title;?></div>
              <div id="news-image" style="margin: 5px; text-align: center;"><?php echo  html::image(array('src'=>'static/pictures/'.$read_post[0]->post_id.'-xxl.jpg')); ?></div>
              <div class="newssubtitle"><?php echo $read_post[0]->subtitle;?></div>
             
              <div class="newsbody">
              <div class="news-related">
                   <?php if (!empty($related)):  ?>
              <div class="news-related-header">BU KONU İLE İLGİLİ YAZILAR</div>
             
              <div class="news-related-body">
              <ul>
                  <?php //print_r($related); ?>
                  <?php foreach ($related as $r_news) : ?>
                  
                  <?php if($r_news->title != $read_post[0]->title) : ?>
                  <li><a href="<?php echo $r_news->post_id; ?>"><?php echo $r_news->title; ?></a></li>
                  <?php endif; ?>
                <?php endforeach;?>
               
             </ul>
             </div>
              <?php endif; ?>
             <div class="news-related-header">BU HABERİ PAYLAŞ</div>
            <div id="news-related-share-header"></div>
            	<div id="news-related-share-flike"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=239691959407215&amp;xfbml=1"></script><fb:like href="<?php url::current()  ?>" send="false" width="450" show_faces="false" font=""></fb:like></div>
            	<div id="news-related-share-counts">
                	<div id="news-related-share-count"></div>
                    <div id="news-related-share-count"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="tr">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> </div>
                    <div id="news-related-share-count"><!-- Facebook share button Start -->
<b:if cond='data:blog.pageType != &quot;static_page&quot;'>
<div>
<a expr:share_url='<?php url::current();  ?>' href='http://www.facebook.com/sharer.php' name='fb_share' type='box_count'>Paylaş</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
</div>
</b:if>
<!-- Facebook share button End --></div>
                    <div id="news-related-share-count"></div>

                </div>
             </div>
                  
                  <div id="postcontent"><p><?php echo $read_post[0]->content; ?></p></div>
                  <div class="how">
              	 <div class="howtitle">HABERİ OYLA </div>
                 <form method="post" action="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.''); ?>">
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/yenilikci'); ?>">Yenilikçi</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/bilgilendirici'); ?>">Bilgilendirici</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/mantikli'); ?>">Mantıklı</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/eglenceli'); ?>">Eğlenceli</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/iyimser'); ?>">iyimser</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/karamsar'); ?>">Karamsar</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/heyecanlı'); ?>">Heyecanlı</a>
                  <a class="popups-mini" id="howbutton" href="<?php echo url::site('v2/haber/add_adj/'.$read_post[0]->post_id.'/ürkütücü'); ?>">Ürkütcü</a>
                                 
                 </form>
              </div>
                  <div class="youridea">
    	<input type="submit"  value="Yorumun?" class="youridea" />
        <input type="submit"  value="Sen de Yaz?" class="youridea" />
        <input type="submit"  value="Yazarı Takip Et" class="youridea" />


    </div>

              </div>
              <div class="newstag">Anahtar Kelimeler :<?php echo $tags;?></div>
              <div id="related">
                  <?php if($this->session->get('user_id')) : ?>
                  <a href="#">Bu haber hakkında yazmak istiyorum</a>
                  <?php endif ?>
              </div>