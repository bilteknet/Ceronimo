<?php print_r($_SESSION); ?>
<div id="skin-wrapper">
 
        <div id="skin-header">
            <!--logo-->
            <div class="logo">
                <a href="<?php echo url::site('home'); ?>"><?php echo  html::image('static/content/images/logo-top.png'); ?></a>
            </div>
            <!--right top advert-->
            <div class="advertise">
               
            </div>
        </div>
		<div id="skin-menu">
            <!--top menu-->
            <ul>
                <li><a href="<?php echo url::site('home'); ?>">Ana Sayfa</a></li>
                <li><a href="<?php echo url::site('home/category/1'); ?>">Yurt</a></li>
                <li><a href="<?php echo url::site('home/category/4'); ?>">Dünya</a></li>
                <li><a href="<?php echo url::site('home/category/6'); ?>">Siyaset</a></li>
                <li><a href="<?php echo url::site('home/category/8'); ?>">Ekonomi</a></li>
                <li><a href="<?php echo url::site('home/category/10'); ?>">Yaşam</a></li>
                <li><a href="<?php echo url::site('home/category/12'); ?>">Magazin</a></li>
                 <li><a href="<?php echo url::site('home/category/14'); ?>">Sağlık</a></li>
                <li><a href="<?php echo url::site('home/category/16'); ?>">Bilim</a></li>
                <li><a href="<?php echo url::site('home/category/18'); ?>">Teknoloji</a></li>
		<li><a href="#">Blogger</a></li>
            </ul>

            <div class="search-box">
                <input type="text" /><button>Ara</button>
            </div>
        </div>
		  <?php if  ($this->session->get('user_id') &&$this->session->get('username') && $this->session->get('role_id') ): ?>
    <div id="skin-lastnews2">
        <?php if($this->session->get('role_id') !=5): ?><a href="<?php echo url::site('Admin/admin/newpost'); ?>">Haber Ekle</a><?php endif ?> | <a href="#">Profilim</a> | <a href="#">Mesajlarım</a> | <a href="<?php echo url::site('Admin/admin/logout'); ?>">Çıkış</a> 
        </div>
	<?php endif; ?>	
        <div id="skin-lastnews">
            <?php if (url::current() == 'home'): ?>
            <div id="ust">Yazınimo</div>
             <div id="ust-a">Haber/Analiz</div>
             <?php endif; ?>
        </div>
    