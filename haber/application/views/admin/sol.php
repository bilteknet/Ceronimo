<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Ceronimo</title>
		
		<!--                       CSS                       -->
                
                <?php
                echo html::stylesheet(array
                    (
                        'static/resources/css/reset.css',
                        'static/resources/css/style.css',
                        'static/resources/css/invalid.css'
                    ),
                    array
                    (
                        'screen',
                        'screen',
                        'screen'
                    ), FALSE);

                ?>
	  
		
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
                
                <?php
                echo html::script(array
                (
                    'static/resources/scripts/jquery-1.3.2.min.js',
                    'static/resources/scripts/simpla.jquery.configuration.js',
                    'static/resources/scripts/facebox.js',
                    'static/resources/scripts/jquery.wysiwyg.js'
                ), FALSE);
                
                ?>
  
		
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Ceronimo</a></h1>
		  
			<!-- Logo (221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				
				<a href="http://www.ceronimo.com/haber/index.php/v2/haber" title="">Siteye Git</a> | <a href="<?php echo url::site('Admin/admin/logout','http'); ?>" title="Sign Out">Çikis</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				
				<li> 
					<a href="#"  class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Yazilar
					</a>
					<ul>
						<li><a href="<?php echo url::site('Admin/admin/newpost','http'); ?>">Yeni Yazi Ekle</a></li>
						<li><a href="<?php echo url::site('Admin/admin/managemyposts','http'); ?>">Yazilari Düzenle</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="<?php echo url::site('Admin/admin/postpositions','http'); ?>">Yazi Yerlesimi</a></li>
                                                <?php if($this->session->get('role_id') ==1): ?>
						<li><a href="<?php echo url::site('Admin/admin/unapprovedposts','http'); ?>">Onay Bekleyen Yazilar</a></li>
                                                <li><a href="<?php echo url::site('Admin/admin/relatedpost','http'); ?>">İlgili Haber Ekle</a></li>
                                                <?php endif; ?>
					</ul>
				</li>
				
				<li style="display: none;">
					<a href="#" class="nav-top-item">
						Kategoriler
					</a>
					<ul>
						<li><a href="#">Yeni Kategori Ekle</a></li>
						<li><a href="#">Kategori Düzenle</a></li>
					</ul>
				</li>
				<?php if($this->session->get('role_id') == 1): ?>
				<li>
					<a href="#" class="nav-top-item">
						Yorumlar
					</a>
					<ul>
						<li><a href="#">Onay Bekleyen Yorumlar</a></li>
						<li><a href="#">Yorum Yönetimi</a></li>
						
					</ul>
				</li>
				
				
				
				<li>
					<a href="#" class="nav-top-item">
						Ayarlar
					</a>
					<ul>
						<li><a href="<?php echo url::site('Admin/admin/newmember','http'); ?>">Üye Yönetimi</a></li>
						<li><a href="#">Görünüm</a></li>
					
					</ul>
				</li>      
				<?php endif; ?>
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="" method="post">
				
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
