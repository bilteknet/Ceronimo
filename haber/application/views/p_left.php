<div id="skin-content">
            <div class="column">
                <!--profile-->
                <div class="profile">
                    <h3><?php echo $username ?></h3>
                    <?php echo  html::image('static/content/photos/user/banksy.jpg'); ?>
                    <p>
                        <?php foreach($profile_data as $p_data): ?>
                        <span><?php echo $p_data->first_name; ?> <?php echo $p_data->last_name; ?></span>
                        <span><?php echo $p_data->brithday; ?></span>
                        
                        
                    </p>
                    <div class="social">
                        <a href="#"><?php echo  html::image('static/content/images/icon-facebook.png'); ?></a>
                        <a href="#"><?php echo  html::image('static/content/images/icon-twitter.png'); ?></a>
                        <a href="#"><?php echo  html::image('static/content/images/icon-myspace.png'); ?></a>
                    </div>
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--send message-->
                <form action="<?php echo url::site('home/sendmessage/'.$p_data->user_id.''); ?>" method="post">
                <div class="send-message">
                    <div class="title">Mesaj Gönder</div>
                    <div class="field"><input type="text" value="Konu" name="title" /></div>
                    <div class="field"><textarea name="message">Mesajınızı Yazınız</textarea></div>
                    <div class="button"><button>Gönder</button></div>
                </div>
                    
                </form>
                <?php endforeach; ?>
                <!--left column advert-->
                <div><a href="#"><?php echo  html::image('static/content/photos/advertise/akbank.jpg'); ?></a></div>
            </div>
            <div class="splitter"></div>