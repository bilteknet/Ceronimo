 <div id="skin-content">
<div class="column">
                <!--box news-->
                <div class="popular-news-title">
                   En Çok Yorumlananlar
                   
                </div>
                 <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--single big new-->
                <div class="news-big">
                  <?php foreach($wall_news as $w_news): ?>
                    <a href="#"><?php echo  html::image(array('src'=>'static/pictures/'.$w_news->post_id.'-xxl.jpg','width'=>90,'height'=>90)); ?></a>
                    <a href="#" class="title"><?php echo $w_news->title; ?></a>
                    
                    <div>
                        <a href="<?php echo url::site('home/readnews/'.$w_news->post_id.''); ?>"><?php echo $w_news->username; ?></a> tarafından oluşturuldu<br />
                        <a href="<?php echo url::site('home/readnews/'.$w_news->post_id.''); ?>"><?php echo $w_news->comment_count; ?> yorum</a> 
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <div class="news-big">
                  <?php foreach($wall_news as $w_news): ?>
                    <a href="#"><?php echo  html::image(array('src'=>'static/pictures/'.$w_news->post_id.'-xxl.jpg','width'=>90,'height'=>90)); ?></a>
                    <a href="#" class="title"><?php echo $w_news->title; ?></a>
                    
                    <div>
                        <a href="<?php echo url::site('home/readnews/'.$w_news->post_id.''); ?>"><?php echo $w_news->username; ?></a> tarafından oluşturuldu<br />
                        <a href="<?php echo url::site('home/readnews/'.$w_news->post_id.''); ?>"><?php echo $w_news->comment_count; ?> yorum</a> 
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--left column advert-->
                <div><a href="#"><?php echo  html::image('static/content/photos/advertise/akbank.jpg'); ?></div>
                <!--splitter-->
                
          
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                
         
                 <style type="text/css">

#container {width: 95%; margin: 10px auto;}
#container ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 20px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
#container ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 19px;
	line-height: 19px;
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;
	background: #e0e0e0;
	overflow: hidden;
	position: relative;
}
#container ul.tabs li a {
	text-decoration: none;
	
	display: block;
	font-size: 0.8em;
	padding: 0 5px;
	border: 1px solid #fff;
	outline: none;
}
	

#container .tab_container {
	border: 1px solid #999;
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
#container .tab_content {
	padding: 20px;
	font-size: 15px;
}
 #container .tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 19px;
}
#container .tab_content h3 a{
	color: #254588;
}
#container .tab_content img {
	float: left;
	margin: 0 20px 20px 0;
	border: 1px solid #ddd;
	padding: 5px;
}
</style>
            <script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>

<div id="container">

  
    <ul class="tabs">
        <li><a href="#tab1">Uzmanlar / Bilim</a></li>
    </ul>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <h2>Gallery</h2>
 <a href="#"><img src="http://www.huffingtonpost.com/contributors/sen.-mark-udall/headshot.jpg" alt="" />Ahmet Yılmaz <i>Bilgisayar Mühendisi</i></a>
            <h3><a href="http://www.designbombs.com">www.DesignBombs.com</a></h3>
            <p>Saw polecat than took bankrupt good hillbilly stew, crazy, fancy and hillbilly heap rodeo, pappy. Saw polecat than took bankrupt good hillbilly stew, crazy, fancy and hillbilly heap rodeo, pappy.   </p>

            
           
            
            
        </div>
        
    </div>
</div>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <div class="popular-news-title">
                 En Son Eklenen Yazınimolar
                   
                </div>
                 <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--small news-->
                <div class="small-news-container">
                    <?php foreach ($bloggers_posts as $b_pposts ) :  ?>
                    <div class="small-news">
                        <a href="<?php echo url::site('home/readnews/'.$b_pposts->post_id.''); ?>"><?php echo  html::image(array('src'=>'static/pictures/'.$b_pposts->post_id.'-xxl.jpg','width'=>45,'height'=>45)); ?></a>
                        <a href="<?php echo url::site('home/readnews/'.$b_pposts->post_id.''); ?>" class="title"><?php echo $b_pposts->title; ?></a>
                        <p><?php echo $b_pposts->subtitle; ?> </p>
                       
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
			<div class="splitter"></div>