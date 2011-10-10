<div class="column">
                <!--user news title-->
                <div class="user-news-title"><?php echo $username ?> Haberleri</div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--user news main-->
                
                <!--user news other-->
                <div class="user-news-other">
                    <ul>
                        <?php foreach($my_posts as $post) :?>
                        <li><a href="#"><?php echo $post->title; ?></a></li>
                     <?php endforeach; ?>
                    </ul>
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--user comments title-->
                <div class="user-comments-title"><?php echo $username ?> Yorumları</div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--user comments main-->
               
                <!--user comments other-->
                <div class="user-news-other">
                    <ul>
                        <li><a href="#">Henüz yorum yapmadı</a></li>

                    </ul>
                </div>
            </div>
            <div class="splitter"></div>