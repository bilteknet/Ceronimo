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
<style>
    td {padding:0px;margin:0px}
    p {
    margin:0;
    padding:0;
    border:0;
}
</style>
<!-- /TinyMCE -->

<div class="content-box"><!-- Start Content Box -->
  
    <?php foreach ($read_posts as $post): ?>
<div class="content-box column-left"><!-- Start Content Box -->
				<form action="<?php echo url::site('Admin/admin/postedit/'); ?>" method="post">
				<div class="content-box-header">
					
                                    <h3><input type="text" name="title" size="20" value="<?php echo $post->title; ?>" /></h3>
                                    
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
                                            <h4><input type="text" name="subtitle" value="<?php echo $post->subtitle; ?>" /></h4>
						<p>
                                                 <textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="40" rows="8"><?php echo $post->content; ?></textarea>

						</p>
                                                <input type="hidden" name="post_id" value="<?php echo $post->post_id; ?>" />
                                                <p>
									<input class="button" type="submit" value="Ekle" />
								</p>
					</div> <!-- End #tab3 -->        
                                     
				</div> <!-- End .content-box-content -->
				   </form>
			</div> <!-- End .content-box -->
			
			
                        <?php endforeach; ?>
</div>