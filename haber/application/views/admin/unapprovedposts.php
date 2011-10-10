<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Yazı Onayla</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Blogger Yazılarını Onaylama</a></li> <!-- href must be unique and match the id of target div -->
						
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						<div class="notification attention png_bg">
							<a href="#" class="close"><?php echo  html::image('static/resources/images/icons/cross_grey_small.png'); ?></a>
							<div>Blogger yazılarını onaylayabilir, blogger'a mesaj atabilirsiniz.</div>
						</div>
						
						<table>
							
							<thead>
                                                            
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>#Yazar</th>
								   <th>Başlık</th>
								   <th>Tarih</th>
								   <th>Durum</th>
								   <th>Yoruma Durumu</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										
										
										
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                                                            <?php foreach ($unapproved_posts as $posts): ?>
                                                           
								<tr>
									<td><input type="checkbox" /></td>
									<td><?php echo $posts->post_id; ?></td>
									<td><a href="<?php echo url::site('Admin/admin/readpost/'.$posts->post_id.''); ?>" title="title"><?php echo $posts->title; ?></a></td>
									<td><?php echo $posts->post_date; ?></td>
                                                                        <?php if ($posts->status == 1): ?>
									<td>Yayında</td>
                                                                        <?php else : ?>
                                                                        <td>Beklemede</td>
                                                                        <?php endif;?>
                                                                        <?php if($posts->comment_status == 1) : ?>
                                                                        <td>Yoruma Açık</td>
                                                                        <?php else : ?>
                                                                        <td>Yoruma Kapalı</td>
                                                                        <?php endif; ?>
									<td>
										<!-- Icons -->
										 <a href="#" title="Düzenle"><?php echo  html::image('static/resources/images/icons/pencil.png'); ?></a>
										 <a href="<?php echo url::site('Admin/admin/deletepost/'.$posts->post_id.''); ?>" title="Sil"><?php echo  html::image('static/resources/images/icons/cross.png'); ?></a> 
										 <a href="<?php echo url::site('Admin/admin/closepostcomments/'.$posts->post_id.''); ?>" title="Yoruma Kapat"><?php echo  html::image('static/resources/images/icons/hammer_screwdriver.png'); ?></a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
                                </div>
</div>