
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Ceronimo.com</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <?php
                echo html::script(array
                (
                    'https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js',
                    'static/content/scripts/jquery.aw-showcase.js',
                    'static/content/scripts/colorbox.js',
                    'static/resources/scripts/jquery.wysiwyg.js',
              
                    
                ), FALSE);
                
                ?>
    <script type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function () {
       
     $('#wysiwyg').wysiwyg();
   
$("#showcase").awShowcase(
	{
		content_width:			300,
		content_height:			300,
		fit_to_parent:			false,
		auto:					true,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'hslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
   $(".popups").colorbox({width:"80%", height:"80%", iframe:true});
     $(".popups-mini").colorbox({width:"25%", height:"25%", iframe:true});
});
</script>
    <?php
                echo html::script(array
                (
                    
                    //'static/content/scripts/scripts.js',
                    'static/content/scripts/main-page.js',
                   
                  
                ), FALSE);
                
                ?>
    <?php
                echo html::stylesheet(array
                    (
                        'static/content/styles/globals.css'
                        
                    ), FALSE);

                ?>
    
    
</head>
    <body>
