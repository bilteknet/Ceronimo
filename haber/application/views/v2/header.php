<?php print_r($_SESSION); ?>
<div id="skin-wrapper">
	<div id="skin-header">
            <!--logo-->

            <div class="logo">
                <a href="<?php echo url::site('v2/haber'); ?>"><?php echo  html::image('static/content/images/logo.png'); ?></a>
            </div>
            <!--member--> 
            <?php  $user_id = $this->session->get('user_id');
       $username = $this->session->get('username');
       $role_id = $user_id = $this->session->get('role_id');
       if(empty($user_id) || empty($username) || empty($role_id)) : ?>
             <div class="member">
                 <form action="<?php echo url::site('Admin/admin/login','http'); ?>" method="post">
                    
                <input name="email" type="text" value="e-mail" />
               
                <input name="password" type="password" value="şifre" />
                <input type="submit" value="Giriş" />

                <a href="<?php echo url::site('v2/haber/fast_signup'); ?>">Üye Ol</a></button>
                <div class="forget"><a href="#"> Şifremi Unuttum</a></div>
                 </form>
 			</div>
            <?php else:  ?>
            <div class="member">
                    <?php if($this->session->get('role_id') !=5): ?><a href="<?php echo url::site('v2/haber/newpost'); ?>">Haber Ekle</a><?php endif ?> | <a href="<?php echo url::site('v2/haber/profile/'.$this->session->get('username').''); ?>">Profilim</a> | <a href="#">Mesajlarım</a> | <a href="<?php echo url::site('Admin/admin/logout'); ?>">Çıkış</a> 
            </div>

            <?php endif; ?>
             <!--menu-->
             <div id="skin-menu">
               <ul>
                <li><a href="<?php echo url::site('v2/haber'); ?>">Ana Sayfa</a></li>

                <li><a href="<?php echo url::site('v2/haber/category/yenieklenen'); ?>">Yeni Eklenen</a></li>
                <li><a href="<?php echo url::site('v2/haber/category/coktartisilan'); ?>">En Çok Tartışılan</a></li>
                <li><a href="<?php echo url::site('v2/haber/category/cokokunan'); ?>">En Çok Okunan</a></li>
                <li><a href="<?php echo url::site('v2/haber/blogger'); ?>">Blogger</a></li>
                <li><a href="#">Editörün Seçtikleri</a></li>
               
            </ul>
            <div class="search">
              <input type="text" />
              <button >Ara</button>
            </div>

             </div>
             <div id="skin-menu-white">
             
             </div>
    </div>