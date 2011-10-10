<script type="text/javascript" src="<?=$config['domain']?>content/editor/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		relative_urls : false,
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave,imagemanager",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "insertimage,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "<?=$config['domain']?>content/editor/css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "<?=$config['domain']?>content/editor/lists/template_list.js",
		external_link_list_url : "<?=$config['domain']?>content/editor/lists/link_list.js",
		external_image_list_url : "<?=$config['domain']?>content/editor/lists/image_list.js",
		media_external_list_url : "<?=$config['domain']?>content/editor/lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
<div class="newpost">
                    
               
                <p><b>Yazınız editör onayından sonra yayına alınacaktır.</b></p>
		
        <form action="addpost.php" method="POST">
        <p> Başlık : <input type="text" name="title" size="15" value="" /> </p>
        <p>Alt Başlık : <input type="text" name="subtitle"  value="" /> </p>
        <p> Kategori :<select name="category">
                <option value="2">Gündem</option>
                <option value="5">Spor</option>
                <option value="7">Ekonomi</option>
                <option value="9">Magazin</option>
                <option value="11">Finans</option>
                <option value="13">Yaşam</option>
            </select>
			
		</p>
		<p><textarea name="content" rows="5"  cols="25"></textarea></p>
            
        <input type="submit" value="Gönder" />
        </form>
                  	
            </div>