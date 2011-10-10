<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>İlgili Yazı Ekle</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Blogger Yazılarını Onaylama</a></li> <!-- href must be unique and match the id of target div -->
						
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						<div class="notification attention png_bg">
							<a href="#" class="close"><?php echo  html::image('static/resources/images/icons/cross_grey_small.png'); ?></a>
							<div>İstediğiniz yazıya ilgili yazı ekleyebilirsiniz.</div>
						</div>
                                            <form method="post" action="<?php echo url::site('Admin/admin/add_related'); ?>">
						<table>
							
							<thead>
                                                            
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>İlgili Yazı 1 </th>
								   <th>İlgili Yazı 2 </th>
								   
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
                                                           
								<tr>
                                                                        <td>#</td>
                                                                        <td>
                                                                            <select name="post1">
                                                                                <?php foreach($read_posts as $post): ?>
                                                                                <option value="<?php echo $post->post_id ?>"><?php echo $post->title; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="post2">
                                                                                <?php foreach($read_posts as $post): ?>
                                                                                <option value="<?php echo $post->post_id ?>"><?php echo $post->title; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
								</tr>
								
							</tbody>
							
						</table>
                                            <p>
									<input class="button" type="submit" value="Ekle" />
								</p>
                                            </form>
					</div> <!-- End #tab1 -->
                                </div>
</div>