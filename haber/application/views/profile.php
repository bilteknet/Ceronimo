<script type="text/javascript" src="http://www.google.com/jsapi"></script><script type="text/javascript">google.load("jquery", "1.6.2");</script>
<?php
                echo html::script(array
                (
                    
                    
                    'static/content/scripts/jquery.mousewheel.min.js',
                    'static/content/scripts/jquery.easing.1.3.js',
                    'static/content/scripts/jquery.slidingtabs.pack.js',
                    
                ), FALSE);
                
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('div#st_horizontal').slideTabs({
  			// Options
			contentAnim: 'slideH',
			contentAnimTime: 600,
			contentEasing: 'easeInOutExpo',
			tabsAnimTime: 300			
  		});
    });
    </script>


<div class="profile">
        	<div id="st_horizontal" class="st_horizontal">                                                                                      				                                
                        
        <div class="st_tabs_container">                                                                                                                                          
            
            
            <div class="st_slide_container">
            
                <ul class="st_tabs">
                    <li><a href="#st_content_1" rel="tab_1" class="st_tab st_first_tab st_tab_active">Profil</a></li>
                    <li><a href="#st_content_2" rel="tab_2" class="st_tab">Paylaşımlar</a></li>                                     
                    <li><a href="#st_content_3" rel="tab_3" class="st_tab">Mesajlarım</a></li>
                    <li><a href="#st_content_4" rel="tab_4" class="st_tab">Takip</a></li>
               </ul>
            
            </div> <!-- /.st_slide_container -->
            
                                                                                                          
        
        </div> <!-- /.st_tabs_container -->                                                                                             
       
        <div class="st_view_container">
        
            <div class="st_view">
                        
                <div id="st_content_1" class="st_tab_view st_first_tab_view">
                    <h2>Profil Bilgileri</h2>
                    
                    <div class="text">                                                                                                  
                        <p>Profil Bilgilerini Tamamla</p>
                        <div id="tabframe">
                            <?php foreach ($profile_data as $p_data) :   ?>
                            <div class="allheader"><?php echo $p_data->first_name; ?> <?php echo $p_data->last_name; ?></div>
                            <div class="myphoto"></div>
                            <div class="myinfo"><?php echo $p_data->brithday; ?></div>
                            <div class="myinfo">Futbolcu</div>
                            <div class="myinfo">İstanbul</div>
                            <div class="myinfo">Üniversite</div>
                            <div class="myinfo">İstanbul</div>
                            <div class="myinfo">Üniversite</div>

                            <div class="aboutme">Hakkımda</div>
                            <?php   endforeach; ?>
</div>                        
                    </div>                            
                </div>
                
                <div id="st_content_2" class="st_tab_view">
                    <h2>Ceronimo'da Neler Oluyor ?</h2>
                    
                    <div class="text">                        
                      <div id="tabframe">
	<div class="goingon">

    	<div class="allheader">Tüm Akış</div>
        <div class="actions">
			<ul>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi X Y yazısını ekledi X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>

                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
            </ul>

        </div>
        
    </div>
    <div class="myactions">
        	<div class="allheader">Ben ne yaptım?</div>
            <div class="actions">
			<ul>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi X Y yazısını ekledi X Y yazısını ekledi</a></li>

                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>

            </ul>
        </div>
    </div>
    
    <div class="ifollow">
        	<div class="allheader">Takip ettiklerim</div>
            <div class="actions">
			<ul>
                <li><a href="#">X Y yazısını ekledi</a></li>

                <li><a href="#">X Y yazısını ekledi X Y yazısını ekledi X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>
                <li><a href="#">X Y yazısını ekledi</a></li>

            </ul>
        </div>
    </div>

</div>

                        
                    </div>
                </div>
                
                <div id="st_content_3" class="st_tab_view">
                    <h2>Horizontal Tab #3</h2>
                    
                    <div class="text">
                        <a class="st_ext" href="#tab_2" rel="st_horizontal">Tab #2</a>|<a class="st_ext" href="#tab_4" rel="st_horizontal">Tab #4</a>
                        
                        <p>Lorem ipsum dolor sit amet, duis netus ut posuere feugiat arcu, purus wisi quis fringilla at, nunc ut eget elit duis erat praesent, ut fermentum lacus turpis cras. Justo gravida erat quam mauris purus, aliquam quisque, eget nisl. Pellentesque nibh duis odio morbi quam, scelerisque convallis aenean quam tincidunt ornare nam nec feugiat sodales tristique.</p>
                        
                        <blockquote><p>Aliquam commodo ullamcorper aenean erat. Nullam vel justo in neque porttitor eget laoreet. Aenean lacus adipiscing.</p></blockquote>
                                
                        <p>Aliquam commodo ullamcorper erat. Nullam vel justo cras porttitor laoreet. Aenean lacus dui, consequat eu, adipiscing nonummy, eget non, nisi. Morbi nunc est, dignissim non, ornare sed, luctus eu, massa. Vivamus tincidunt diam nec eget urna.</p>
                        
                        <p>Curabitur velit. Veniam donec orci viverra, lorem convallis in libero quisque, purus erat dolor curabitur, justo arcu nisl, natoque velit euismod dapibus nulla semper. Suspendisse odio tempor. Id ornare nam nec feugiat, ac consectetuer magna, dolor enim vel in, pulvinar bibendum ante ac, dui nibh dui est neque lacinia et. Duis netus ut posuere feugiat arcu.</p>
                    </div>
                </div>
                
                <div id="st_content_4" class="st_tab_view">
                    <h2>Horizontal Tab #4</h2>
                    
                    <div class="text">
                        <a class="st_ext" href="#tab_3" rel="st_horizontal">Tab #3</a>|<a class="st_ext" href="#tab_5" rel="st_horizontal">Tab #5</a>
                        
                        <p>Lorem ipsum dolor sit amet, duis netus ut posuere feugiat arcu, purus wisi quis fringilla at, nunc ut eget elit duis erat praesent, ut fermentum lacus turpis cras. Justo gravida erat quam mauris purus, aliquam quisque, eget nisl. Pellentesque nibh duis odio morbi quam, scelerisque convallis aenean quam tincidunt ornare nam nec feugiat sodales tristique.</p>
                        
                        <blockquote><p>Aliquam commodo ullamcorper aenean erat. Nullam vel justo in neque porttitor eget laoreet. Aenean lacus adipiscing.</p></blockquote>
                                
                        <p>Aliquam commodo ullamcorper erat. Nullam vel justo cras porttitor laoreet. Aenean lacus dui, consequat eu, adipiscing nonummy, eget non, nisi. Morbi nunc est, dignissim non, ornare sed, luctus eu, massa. Vivamus tincidunt diam nec eget urna.</p>
                        
                        <p>Curabitur velit. Veniam donec orci viverra, lorem convallis in libero quisque, purus erat dolor curabitur, justo arcu nisl, natoque velit euismod dapibus nulla semper. Suspendisse odio tempor. Id ornare nam nec feugiat, ac consectetuer magna, dolor enim vel in, pulvinar bibendum ante ac, dui nibh dui est neque lacinia et. Duis netus ut posuere feugiat arcu.</p>
                    </div>
                </div>
                
                                   
            
            </div> <!-- /.st_view -->
         
        </div> <!-- /.st_view_container -->                                                          
    
    </div> <!-- /#st_horizontal -->        
            
        </div>
      