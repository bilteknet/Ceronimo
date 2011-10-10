 <div class="commentadd">
     <form action="<?php echo url::site('comments/add_comment/'.$post_id.''); ?>" method="post">
         
         <textarea name="comment" class="comment"></textarea>
               	<input type="submit" name="groovybtn1"   class="sendcomment"   value="GÖNDER"   title=""/>
                
     </form>
              	
              </div>
<script type='text/javascript' src="http://jquery-tabify.googlecode.com/files/jquery.tabify-1.4.source.js"></script>

    
  
  <style type='text/css'>
    body { font: 0.8em Arial, sans-serif; }
#menu { padding: 0; }
#menu li { display: inline; }
#menu li a { background: #ccf; padding: 10px; float:left; border-right: 1px solid #ccf; border-bottom: none; text-decoration: none; color: #000; font-weight: bold;}
#menu li.active a { background: #eef; }
.content { float: left; clear: both; border: 1px solid #ccf; border-top: none; border-left: none; background: #eef; padding: 10px 20px 20px; width: 609px; }
        
  </style>
  
  <script type='text/javascript'>
  //<![CDATA[ 
  $(window).load(function(){
  $('#menu').tabify();
  });
  //]]> 
  </script>
<ul id="menu">
    <li class="active"><a href="#contentHome">Ceronimo</a></li>
    <li><a href="#contentGuestbook">Facebook</a></li>
    <li><a href="#contentLinks">Twitter</a></li>
</ul>
<div class="content" id="contentHome"><div class="newscomments">
              	<div class="newscomments-header">
                Yorumlar (<?php echo $comment_count[0]->comment_count; ?>)</div>
      
         <?php  for($i = 0 ; $i < count($comments) ; $i++): ?>
               <div class="newscomment">
                    <div class="avatar"><img src="images/authorimg.png"/></div>
                    <div class="newscommentor"><a href="<?php echo url::site('v2/haber/profile/'.$comments[$i]->author.''); ?>"><?php echo $comments[$i]->author; ?></a></div>
                    <div class="newscommentinfo"><?php echo $comments[$i]->date; ?></div>
                    <div class="newscommentbody"><?php echo $comments[$i]->comment; ?>
                    </div>
                    
                    <?php if($comments[$i]->parent_id == $comments[$i]->comment_id) :  ?>
                    <div class="subcomment">
                        <div class="avatar"><img src="images/authorimg.png"/></div>
                        <div class="newscommentor">Ad Soyad</div>
                        <div class="newscommentinfo">16 Eylül 2011</div>
                        <div class="subcommentbody">Strange that when I watch these clips and I see the 2nd plane coming, I cringe like watching a movie and think "Oh God, Please don't hit the other tower." As if there could possibly be another outcome.
I know its been said a million times, but the 1st plane, there was still speculation. The 2nd one and you knew...
                        </div>
                        <input type="button" name="groovybtn1"   class="answerbutton"   value="Yanıtla"   title=""/>
                    </div>
                    <?php endif; ?>
                   
                </div>
       
          <?php endfor; ?>	
              </div></div>
<div class="content" id="contentGuestbook"><div class="facebookcom">
                  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://www.ceronimo.com/haber/index.php<?php echo  url::current(); ?>" num_posts="5" width="500"></fb:comments>	   
</div></div>
<div class="content" id="contentLinks"><div class="twittercomm">
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
    
            </div></div>

          
   

        </div>