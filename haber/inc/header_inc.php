
        <div id="skin-header">
            <!--logo-->
            <div class="logo">
                <a href="#"><img src="<?=$config['domain']?>content/images/logo-top.png" alt="" /></a>
            </div>
            <!--right top advert-->
            <div class="advertise">
                <a href="#"><img src="<?=$config['domain']?>content/photos/advertise/turkcell.gif" /></a>
            </div>
        </div>
		<div id="skin-menu">
            <!--top menu-->
            <ul>
                <li><a href="<?=$config['domain'] ?>">Ana Sayfa</a></li>
                <li><a href="category.php?cat_id=1">Gundem</a></li>
                <li><a href="category.php?cat_id=4">Spor</a></li>
                <li><a href="category.php?cat_id=6">Ekonomi</a></li>
                <li><a href="category.php?cat_id=8">Magazine</a></li>
                <li><a href="category.php?cat_id=10">Finans</a></li>
                <li><a href="category.php?cat_id=12">Yasam</a></li>
				<li><a href="blogger.php">Blogger</a></li>
            </ul>

            <div class="search-box">
                <input type="text" /><button>Ara</button>
            </div>
        </div>
		
        <div id="skin-lastnews">
		<?php if($_SESSION['user_id'] && $_SESSION['role_id'] == 4): ?>
          Merhaba, <b><a href="#"><?=$_SESSION['username']?>.</a></b>   <a href="newpost.php">Yeni Yazı Ekle</a> | <a href="#">Mesajlarım</a> | <a href="#">Editör Mesajları</a> | <a href="#">Yorumlarım</a> | <a href="logout.php">Çıkış</a> 
		  <?php endif; ?>
        </div>
		