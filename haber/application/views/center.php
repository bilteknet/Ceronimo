<div class="column">
                <!--main news slider-->
                <div id="main-news">
           
				    <div class="slides_container">
                                        <?php $i = 0; foreach($main_news as $slider) : ?>
                                       
					    <div class="slide">
                            <a href="<?php echo url::site('home/readnews/'.$slider->post_id.''); ?>"><?php echo  html::image('static/pictures/'.$slider->post_id.'-xxl.jpg'); ?></a>
						    <a href="<?php echo url::site('home/readnews/'.$slider->post_id.''); ?>" class="title"><?php echo $slider->title; ?></a>
                            <div>
                                <a href="#"><?php echo $slider->username; ?></a> tarafından oluşturuldu<br />
                                <a href="#"><?php echo $slider->comment_count; ?> yorum</a> | <a href="#">7 Fotoğraf</a>
                            </div>
					    </div>
                                        
					    <?php  endforeach; ?>
					    
					    
				    </div>
			    </div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--main news-->
                <div class="news-big-main">
                    <a href="#"><?php echo  html::image('static/content/photos/news/main-news-6.jpg'); ?></a>
                    <a href="#" class="title">Nükleer Silah!</a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 2000 years old.</p>
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--single big new-->
                <div class="news-big">
                    <a href="#"><?php echo  html::image('static/content/photos/news/left-column-news-1.jpg'); ?></a>
                    <a href="#" class="title">Nükleer Silah!</a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 2000 years old.</p>
                    <div>
                        <a href="#">asdsa</a> tarafından oluşturuldu<br />
                        <a href="#">17 yorum</a> | <a href="#">3 Fotoğraf</a>
                    </div>
                </div>
                 <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--single big new-->
                <div class="news-big">
                    <a href="#"><?php echo  html::image('static/content/photos/news/left-column-news-1.jpg'); ?></a>
                    <a href="#" class="title">Nükleer Silah!</a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 2000 years old.</p>
                    <div>
                        <a href="#">asdsa</a> tarafından oluşturuldu<br />
                        <a href="#">17 yorum</a> | <a href="#">3 Fotoğraf</a>
                    </div>
                </div>
                  <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <div class="news-big">
                    <a href="#"><?php echo  html::image('static/content/photos/news/left-column-news-1.jpg'); ?></a>
                    <a href="#" class="title">Nükleer Silah!</a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 2000 years old.</p>
                    <div>
                        <a href="#">asdsa</a> tarafından oluşturuldu<br />
                        <a href="#">17 yorum</a> | <a href="#">3 Fotoğraf</a>
                    </div>
                </div>
                    <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <div class="news-big">
                    <a href="#"><?php echo  html::image('static/content/photos/news/left-column-news-1.jpg'); ?></a>
                    <a href="#" class="title">Nükleer Silah!</a>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 2000 years old.</p>
                    <div>
                        <a href="#">asdsa</a> tarafından oluşturuldu<br />
                        <a href="#">17 yorum</a> | <a href="#">3 Fotoğraf</a>
                    </div>
                </div>
                
            </div>
            <div class="splitter"></div>
            <div class="column">
            