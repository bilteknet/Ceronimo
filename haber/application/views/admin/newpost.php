<style type="text/css">
   content_fontselect, td {padding:0px;margin:0px;border: none;}
    
    p {
    margin:0;
    padding:0;
    border:0;
}
</style>
<script type="text/javascript" src="http://ceronimo.com/haber/static/content/editor/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
            
		// General options
		mode : "textareas",
		theme : "advanced",
		relative_urls : false,
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave,imagemanager",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument|bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "insertimage,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
                
		content_css : "http://ceronimo.com/haber/static/content/editor/css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "http://ceronimo.com/haber/static/content/editor/lists/template_list.js",
		external_link_list_url : "http://ceronimo.com/haber/static/content/editor/lists/link_list.js",
		external_image_list_url : "http://ceronimo.com/haber/static/content/editor/lists/image_list.js",
		media_external_list_url : "http://ceronimo.com/haber/static/content/editor/lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
                
	});
</script>

<!-- /TinyMCE -->
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Haber Ekle</h3>
					
					<ul class="content-box-tabs">
						
						<li><a href="#tab2" class="default-tab">Yeni Haber Ekle</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
                                    
					
					<div class="tab-content" id="tab2">
					
						<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								
								
								<p>
									<label>Baslik</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="title" /> 
								</p>
                                                                <p>
									<label>Etiketler</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="tags" /> 
								</p>
								
								<p>
									<label>Alt Baslik</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="subtitle" />
								</p>
                                                                <p>
                                                                    <label>Ön Resim</label>
                                                                    <input type="file" name="image" value="" />
                                                                </p>
								
								
								<p>
									<label>Kategori</label>              
									<select name="category" class="small-input">
										<option value="1">Gündem</option>
                                                                                <option value="4">Spor</option>
										<option value="6">Ekonomi</option>
                                                                                <option value="8">Magazin</option>
										<option value="10">Finans</option>
										<option value="12">Yasam</option>
									</select> 
								</p>
								
								<p style="margin: 0;padding: 0; border:0">
									<label>Haber İçeriği</label>
                                                                        <textarea  name="content"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Ekle" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
			<div class="clear"></div>