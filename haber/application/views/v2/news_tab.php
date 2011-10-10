
<div class="newstab">

        <script>
var currentTab = 0; // Set to a different number to start on a different tab.

function openTab(clickedTab) {
   var thisTab = $(".tabbed-box .tabs a").index(clickedTab);
   $(".tabbed-box .tabs li a").removeClass("active");
   $(".tabbed-box .tabs li a:eq("+thisTab+")").addClass("active");
   $(".tabbed-box .tabbed-content").hide();
   $(".tabbed-box .tabbed-content:eq("+thisTab+")").show();
   currentTab = thisTab;
}

$(document).ready(function() {
   $(".tabs li:eq(0) a").css("border-left", "none");
   
   $(".tabbed-box .tabs li a").click(function() { 
      openTab($(this)); return false; 
   });
   
   $(".tabbed-box .tabs li a:eq("+currentTab+")").click()
});
</script>
        <div id="wrap-tab">
   <div class="tabbed-box">
      <ul class="tabs">
         <li><a href="#">Çok Yorumlanan</a></li>
         <li><a href="#">Çok Okunan</a></li>
         <li><a href="#">Çok Puanlanan</a></li>
      </ul>
       <div class="tabbed-content">
         <div class="hotnewsbody">
                <?php foreach ($popular_comment as $h_news): ?>
            	<div class="hotnewsitem"> 
            	<?php echo  html::image(array ('src' =>'static/pictures/'.$h_news->post_id.'-xxl.jpg','width' => '45', 'height' => '45')); ?>
                	<div class="itemnewstitle"><?php echo $h_news->title; ?></div>
                    <div class="itemnewsbody"><a href="<?php echo url::site('v2/haber/read/'.$h_news->post_id.''); ?>">devamı..</a></div>
            	</div>
                <?php endforeach; ?>
            </div>
       
      </div>
      <div class="tabbed-content">
          <div class="hotnewsbody">
                <?php foreach ($popular_read as $h_newss): ?>
            	<div class="hotnewsitem"> 
            	<?php echo  html::image(array ('src' =>'static/pictures/'.$h_newss->post_id.'-xxl.jpg','width' => '45', 'height' => '45')); ?>
                	<div class="itemnewstitle"><?php echo $h_newss->title; ?></div>
                    <div class="itemnewsbody"><a href="<?php echo url::site('v2/haber/read/'.$h_newss->post_id.''); ?>">devamı..</a></div>
            	</div>
                <?php endforeach; ?>
            </div>
      </div>
      
      <div class="tabbed-content">
         <p>Henüz puan istatistiği oluşmadı.</p>
       
       </div>
   </div>
</div>

        </div> 
