<div class="column">
                <!--create news-->
                 <div id="whatis">
<div id="whatis-head"><f>Ceronimo nedir?</f></div>
    <div class="splitterh"></div> 
	<div id="whatis-box">
		<div id="#whatis-box-header"><f>Paylaş</f></div>
        <div id="whatis-box-content"><cont>Duydukların ve g&ouml;rd&uuml;klerini paylaş.</cont></div>
	</div>   
    <div class="splitterv"></div> 
	<div id="whatis-box">
		<div id="#whatis-box-header"><f>Tartış</f></div>
        <div id="whatis-box-content"><cont>G&uuml;ndemi ve gelişmeleri tartış.</cont></div>
	</div>
    <div class="splitterv"></div> 
	<div id="whatis-box">
		<div id="#whatis-box-header"><f>Duyur</f></div>
        <div id="whatis-box-content"><cont>Sesini herkese duyur.</cont></div>
    </div>
    
</div>
                 <?php  $user_id = $this->session->get('user_id');
       $username = $this->session->get('username');
       $role_id = $user_id = $this->session->get('role_id');
       if(empty($user_id) || empty($username) || empty($role_id)) : ?>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--login-->
               
                <div class="login">
				
				<form action="<?php echo url::site('Admin/admin/login','http'); ?>" method="POST">
                    <input type="text" name="email" value="email" /> <input type="password" name="password" value="şifre" />
                    <div class="lost-login">
                        <a href="#">Şifremi Unuttum</a>  <a href="<?php echo url::site('/home/signup'); ?>">Yazar Olmak İstiyorum</a>
                        <a href="<?php echo url::site('/home/fast_signup'); ?>">Hızlı Üyelik</a>
                        <button>Giriş</button>
                    </div>
					</form>
					
                </div>
                <?php endif; ?>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--facebook twitter-->
                <div class="facebook-twitter" style="text-align: center">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fceronimocom%2F200394666690529&amp;width=240&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=240" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:240px;" allowTransparency="true"></iframe>
                </div>
                 <div class="facebook-twitter" style="margin-top: 5px; padding-left: 25px">
                   <a href="http://twitter.com/hallederizcom" class="twitter-follow-button" data-lang="tr">Follow @hallederizcom</a>
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                </div>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
		$("a.tab").click(function () {
			
			
			// switch all tabs off
			$(".active").removeClass("active");
			
			// switch this tab on
			$(this).addClass("active");
			
			// slide all content up
			$(".content").slideUp();
			
			// slide this content up
			var content_show = $(this).attr("title");
			$("#"+content_show).slideDown();
		  
		});
	
	  });
  </script>
                <div id="tabbed_box_1" class="tabbed_box">
	<div class="popular-news-title">
                    Popüler Haber Analizleri
                   
                </div>
                    <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
    <div class="tabbed_area">
    
    	
        <ul class="tabs">
            <li><a href="#tabs" title="content_1" class="tab active">En Çok Okunanlar</a></li>
            <li><a href="#tabs" title="content_2" class="tab">Bu Hafta</a></li>
           <!-- <li><a href="#tabs" title="content_3" class="tab"></a></li> !-->

        </ul>
        
        <div id="content_1" class="content">
        	<ul>
            <?php foreach( $popular_posts as $p_posts) :?>
                        <li><a href="#"><?php echo $p_posts->title; ?></a></li>
                        <?php endforeach; ?>

			</ul>
        </div>
        <div id="content_2" class="content">

        	<ul>
            	<li>Bu haftanın en çok okunanları gelecek</li>
            	
			</ul>
        </div>
        <!--
        <div id="content_3" class="content">
        	<ul>
            	<li><a href="#tabs">Home</a></li>

            	<li><a href="#tabs">About</a></li>
            	<li><a href="#tabs">Contribute</a></li>
            	<li><a href="#tabs">Contact</a></li>
			</ul> !-->
        </div>
    
    </div>

</div>
<div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <!--splitter-->
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <div class="popular-news-title">
                    Ceronimo Döviz Bilgileri
                   
                </div>
                <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <script type="text/javascript">
var dovizEklenti = ({kurlar:"USD-EUR",
arkaPlan:"#F2F2F2",
kutu:"#FFFFFF",
genislik:"233",
bankaAdi:"#666666",
alisSatis:"#999999",
kurAdi:"#0066FF",
kurDegeri:"#0066FF",
bankalar:"kapali"
}) </script> <a id="dovizcom" target="_blank" href="http://www.doviz.com">Döviz</a>
<script type='text/javascript' src='http://static.doviz.com/js/eklenti.js?v1'></script>

                
                  <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                  <div class="popular-news-title">
                    Ceronimo Hava Durumu 
                   
                </div>
                 <div class="splitter-horizontal"><?php echo  html::image('static/content/images/column-splitter-horizontal.png'); ?></div>
                <table border=0 cellspacing=0 cellpadding=0 width="95%">

<tr><td class="Liste"><img src="http://www.dmi.gov.tr/sunum/imgtahmingor-a2-g.aspx?merkez=ISTANBUL&gun=T&renkC=111&renkT=000&renkZ=fff" name="preview3"></td></tr>
<tr><td class="Baslik">Tüm İller</td></tr>
<tr><td class="Liste"><form action="/" name="havaform2" method="post"><select name="il" class="x03y77" onchange="showimage2()"><option value="ADANA">ADANA</option><option value="ADIYAMAN">ADIYAMAN</option><option value="AFYON">AFYON</option><option value="AGRI">AGRI</option><option value="AKSARAY">AKSARAY</option><option value="AMASYA">AMASYA</option><option value="ANKARA">ANKARA</option><option value="ANTALYA">ANTALYA</option><option value="ARTVIN">ARTVIN</option><option value="AYDIN">AYDIN</option><option value="BALIKESIR">BALIKESIR</option><option value="BARTIN">BARTIN</option>

<option value="BATMAN">BATMAN</option><option value="BILECIK">BILECIK</option><option value="BINGOL">BINGÖL</option><option value="BOLU">BOLU</option><option value="BURDUR">BURDUR</option><option value="BURSA">BURSA</option><option value="CANAKKALE">CANAKKALE</option><option value="CANKIRI">CANKIRI</option><option value="CORUM">CORUM</option><option value="DENIZLI">DENIZLI</option><option value="DIYARBAKIR">DIYARBAKIR</option><option value="DUZCE">DÜZCE</option><option value="EDIRNE">EDIRNE</option><option value="ELAZIG">ELAZIG</option>
<option value="ERZINCAN">ERZINCAN</option><option value="ERZURUM">ERZURUM</option><option value="ESKISEHIR">ESKISEHIR</option><option value="GAZIANTEP">GAZIANTEP</option><option value="GIRESUN">GIRESUN</option><option value="GUMUSHANE">GÜMÜSHANE</option><option value="HAKKARI">HAKKARI</option><option value="HATAY">HATAY</option><option value="IGDIR">IGDIR</option><option value="ISPARTA">ISPARTA</option><option value="ISTANBUL" selected>ISTANBUL</option><option value="IZMIR">IZMIR</option><option value="KAHRAMANMARAS">KAHRAMANMARAS</option><option value="KARABUK">KARABÜK</option>

<option value="KARAMAN">KARAMAN</option><option value="KARS">KARS</option><option value="KASTAMONU">KASTAMONU</option><option value="KAYSERI">KAYSERI</option><option value="KIRIKKALE">KIRIKKALE</option><option value="KIRKLARELI">KIRKLARELI</option><option value="KIRSEHIR">KIRSEHIR</option><option value="KILIS">KILIS</option><option value="KOCAELI">KOCAELI</option><option value="KONYA">KONYA</option><option value="KUTAHYA">KÜTAHYA</option><option value="MALATYA">MALATYA</option><option value="MANISA">MANISA</option><option value="MARDIN">MARDIN</option>
<option value="MERSIN">MERSIN</option><option value="MUGLA">MUGLA</option><option value="MUS">MUS</option><option value="NEVSEHIR">NEVSEHIR</option><option value="NIGDE">NIGDE</option><option value="ORDU">ORDU</option><option value="OSMANIYE">OSMANIYE</option><option value="RIZE">RIZE</option><option value="SAKARYA">SAKARYA</option><option value="SAMSUN">SAMSUN</option><option value="SIIRT">SIIRT</option><option value="SINOP">SINOP</option><option value="SIVAS">SIVAS</option><option value="SANLIURFA">SANLI URFA</option><option value="TEKIRDAG">TEKIRDAG</option>

<option value="TOKAT">TOKAT</option><option value="TRABZON">TRABZON</option><option value="TUNCELI">TUNCELI</option><option value="USAK">USAK</option><option value="VAN">VAN</option><option value="YALOVA">YALOVA</option><option value="YOZGAT">YOZGAT</option><option value="ZONGULDAK">ZONGULDAK</option></select></form></td></tr>

</table>

<script language="JavaScript">
<!--//
	function showimage2()
	{
		document.images.preview3.src = 'http://www.dmi.gov.tr/sunum/imgtahmingor-a2-g.aspx?merkez=' + getSelectedValue2( 'havaform2', 'il' ) + '&gun=T&renkC=111&renkT=000&renkZ=fff';
	}

	function getSelectedValue2( frmName, srcListName )
	{
		var form = eval( 'document.' + frmName );
		var srcList = eval( 'form.' + srcListName );

		i = srcList.selectedIndex;
		if (i != null && i > -1)
			return srcList.options[i].value;
		else
			return null;
	}

	if ( window.Event )
		document.captureEvents( Event.MOUSEUP );

	function nocontextmenu()
	{
		event.cancelBubble = true, event.returnValue = false;
		return false;
	}

	function norightclick( e )
	{
		if ( window.Event )
		{
			if ( e.which == 2 || e.which == 3 )
				return false;
		}
		else if (event.button == 2 || event.button == 3)
		{
			event.cancelBubble = true, event.returnValue = false;
			return false;
		}
	}

	if ( document.layers )
		document.captureEvents( Event.MOUSEDOWN );

	document.oncontextmenu = nocontextmenu;
	document.onmousedown = norightclick;
	document.onmouseup = norightclick;
//-->
</script>
                  
                
                <div><a href="#"><?php echo  html::image('static/content/photos/advertise/sony.jpg'); ?></a></div>
            </div>