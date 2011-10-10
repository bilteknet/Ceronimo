<div id="skin-content">
<div class="column-read">
<div id="news-content">
	<div id="news-info">
		<div id="news-social"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?>
        	<div id="news-social-buttons">
            	<input type="image" name="groovybtn1"   class="socialbutton"   value=""   title="" src="http://ceronimo.com/haber/static/content/images/takipet2.png"  >
            </div>
           	<div id="news-social-buttons">
            	<input type="image" name="groovybtn1"   class="socialbutton"   value=""   title="" src="http://ceronimo.com/haber/static/content/images/facebook2.png"  >
            </div>
            	<div id="news-social-buttons">
            	<input type="image" name="groovybtn1"   class="socialbutton"   value=""   title="" src="http://ceronimo.com/haber/static/content/images/twitter2.png"  >
            </div>
           	<div id="news-social-buttons">
            	<input type="image" name="groovybtn1"   class="socialbutton"   value=""   title="" src="http://ceronimo.com/haber/static/content/images/rss2.png"  >
            </div>
            	<div id="news-social-buttons">
            	<input type="image" name="groovybtn1"   class="socialbutton"   value=""   title="" src="http://ceronimo.com/haber/static/content/images/mail2.png"  >
            </div>
            <div id="news-post-info"><?php echo $read_post[0]->post_date;?></div>
        
        </div> 
		<div id="news-author">
        			<div id="news-author-avatar"><?php echo  html::image('static/pictures/user/default.gif'); ?></div>
                    <div id="news-author-name"><a href="<?php echo url::site('home/profile/'.$read_post[0]->username.''); ?>"><?php echo $read_post[0]->username;?></a></div>
		</div>
	</div>
	<div id="news-title"><?php echo $read_post[0]->title;?></div>
        <div id="news-image"><?php echo  html::image(array('src'=>'static/pictures/'.$read_post[0]->post_id.'-xxl.jpg')); ?></div>
   
  <div id="news-subtitle"><?php echo $read_post[0]->subtitle;?></div>
	<div id="news-how">
    <div id="news-how-left">Bu haber... </div>
    	<div id="news-how-right">
    	<input type="button" name="groovybtn1"   class="groovybutton"   value="Yenilikçi"   title="">
        <input type="button" name="groovybtn1"   class="groovybutton"   value="Bilgilendirici"   title="">
        <input type="button" name="groovybtn1"   class="groovybutton"   value="Mantıklı"   title="">
        <input type="button" name="groovybtn1"   class="groovybutton"   value="Eğlenceli"   title="">
        <input type="button" name="groovybtn1"   class="groovybutton"   value="İyimser"   title="">
        <input type="button" name="groovybtn2"   class="groovybutton"   value="Karamsar"   title="" />
        <input type="button" name="groovybtn1"   class="groovybutton"   value="Heyecanlı"   title="">
        <input type="button" name="groovybtn1"   class="groovybutton"   value="Ürkütücü"   title="">
      </div>
    </div>
    <div id="news-keys">
       	<div id="news-keys-left">Anahtar kelimeler </div>
    	<div id="news-keys-right">
            <?php echo $tags ?>
        </div>
    
    </div>
  <div id="news-read">
		<div id="news-related">
        <div id="news-related-header">İlgili Haberler</div>
			<ul class="a">
  				<li>Bu haber ilgili bir haberdir.</li>
  				<li>Bu haber ilgili bir haberdir.</li>
  				<li>Bu haber ilgili bir haberdir.</li>
			</ul>
            <div id="news-related-share">
            	<div id="news-related-share-header">Paylaş</div>
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
		</div>
      <?php echo $read_post[0]->content; ?>
	</div>
  <div class="facebook-twitter">
                  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://www.ceronimo.com/haber/index.php<?php echo  url::current(); ?>" num_posts="5" width="500"></fb:comments>	   

                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
version: 2,
type: 'search',
search: '<?php echo $tags; ?>',
interval: 6000,
title: 'Bu Haberle İlgili Twitter\'da Ne Konuşuluyor?',
subject: 'Bu Haberle İlgili Twitter\'da Ne Konuşuluyor?',
width: 585,
height: 200,
theme: {
shell: {
background: '#8ec1da',
color: '#ffffff'
},
tweets: {
background: '#ffffff',
color: '#444444',
links: '#1985b5'
}
},
features: {
scrollbar: false,
loop: true,
live: true,
hashtags: true,
timestamp: true,
avatars: true,
toptweets: true,
behavior: 'default'
}
}).render().start(); 
</script>  
                
            </div>
    <div id="news-comment">
     	<div id="news-comment-frame"> 
     		<div id="news-comment-who">
	            <div id="news-comment-who-avatar"></div>
    	        <div id="news-comment-who-name">Misafir</div>
	            <div id="news-comment-who-date">03/09/2011 23:12</div>
          
     		<div id="news-comment-body">Çok yararlı olmuş, ama ben farklı düşünüyorum.Those new hydraulic pumps, according to a whistleblower inside the Army Corps of Engineers who supervised the testing and installation of the pumps, have design defects. </div>
              </div>
            <div id="news-comment-respond"></div>
        </div>
    </div>
    </div>
</div>