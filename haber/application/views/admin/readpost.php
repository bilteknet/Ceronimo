<div class="content-box"><!-- Start Content Box -->
    <?php foreach ($read_posts as $post): ?>
<div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><?php echo $post->title; ?></h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4><?php echo $post->subtitle; ?></h4>
						<p>
                                                    <?php echo $post->content; ?>
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-right"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Yazıyı Değerlendir.</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>Bu yazıyı değerlendirin.</h4>
                                                <form action="<?php echo url::site('Admin/admin/approvepost/'.$post->post_id.'/'.$post->user_id.''); ?>" method="post">
                                                <p>
									<label>Durum</label>              
									<select name="status" class="medium-input">
										<option value="1">Yazınız Ceronimo'da yayınlanmaya layık görülmüştür.</option>
                                                                                <option value="0">Yazını onaylanmadı.</option>
										
									</select> 
						</p>
                                                <p>
									<label>Mesaj</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="message" cols="40" rows="8"></textarea>
						</p>
                                                <p>
									<input class="button" type="submit" value="Durumu Güncelle" />
						</p>
                                                
                                                </form>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
                        <?php endforeach; ?>
</div>