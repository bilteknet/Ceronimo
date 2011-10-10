    	<div class="newpost">
            <h3>Hemen Yazını Ekle</h3>
            <form action="<?php echo  url::site('Admin/admin/addposts','http'); ?>" method="post" enctype="multipart/form-data">
                <fieldset>
                <label><p><h4>Başlık</h4></p></label>
                <input type="text" name="title" value="" size="60" />
                <p>
                                                                    <label>Ön Resim</label>
                                                                    <input type="file" name="image" value="" />
                                                                </p>
                
                </br>
<p><textarea class="text-input textarea wysiwyg" id="wysiwyg" name="content" cols="40" rows="8"></textarea></p>
<p>
									<input class="button" type="submit" value="Ekle" />
								</p>
                </fieldset>
            </form>
      </div>