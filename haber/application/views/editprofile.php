<style>
    
    */*Set's border, padding and margin to 0 for all values*/
{
    padding: 0;
    margin: 0;
    border: 0;
}
body, html {
    color: #373C40;
    font-family: Verdana,Arial, Helvetica, sans-serif;
    height: 100%;
    background-color: #f0f0f0;
    margin:10px;
}
body {
    font-size: 70%;
}
p {
    padding: 7px 0 7px 0;
    font-weight: 500;
    font-size: 10pt;
}
a {
    color: #656565;
    text-decoration:none;
}
a:hover{
    color: #abda0f;
    text-decoration: none;
}
h1 {
    font-weight:200;
    color: #888888;
    font-size:16pt;
    background: transparent url(../img/h1.png) no-repeat center left;
    padding-left:33px;
    margin:7px 5px 8px 8px;
}
h4 {
    padding:1px;
    color: #ACACAC;
    font-size:9pt;
    font-weight:100;
    text-transform:uppercase;
}
form.register{
    width:800px;
    margin: 20px auto 0px auto;
    height:530px;
    background-color:#fff;
    padding:5px;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
}
form p{
    font-size: 8pt;
    clear:both;
    margin: 0;
    color:gray;
    padding:4px;
}
form.register fieldset.row1
{
    width:770px;
    padding:5px;
    float:left;
    border-top:1px solid #F5F5F5;
    margin-bottom:15px;
}
form.register fieldset.row1 label{
    width:140px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register fieldset.row2
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    height:220px;
    padding:5px;
    float:left;
}
form.register fieldset.row3
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register fieldset.row4
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    padding:5px;
    float:left;
    clear:both;
    width:500px;
}
form.register .infobox{
    float:right;
    margin-top:20px;
    border: 1px solid #F1F1F1;
    padding:5px;
    width:380px;
    height:98px;
    font-size:9px;
    background: #FDFEFA url(../img/bg_infobox.gif) repeat-x top left;
}
form.register legend
{
    color: #abda0f;
    padding:2px;
    margin-left: 14px;
    font-weight:bold;
    font-size: 14px;
    font-weight:100;
}
form.register label{
    color:#444;
    width:98px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register label.optional{
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
    color: #A3A3A3;
}
form.register label.obinfo{
    float:right;
    padding:3px;
    font-style:italic;
}
form.register input{
    width: 140px;
    color: #505050;
    float: left;
    margin-right: 5px;
}
form.register input.long{
    width: 247px;
    color: #505050;
}
form.register input.short{
    width: 40px;
    color: #505050;
}
form.register input[type=radio]
{
    float:left;
    width:15px;
}
form.register label.gender{
    margin-top:-1px;
    margin-bottom:2px;
    width:34px;
    float:left;
    text-align:left;
    line-height:19px;
}
form.register input[type=text]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
form.register input[type=password]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
.button
{
    background: #abda0f url(../img/overlay.png) repeat-x;
    padding: 8px 10px 8px;
    color: #fff;
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    cursor: pointer;
    float:left;
    font-size:18px;
    margin:10px;
}
form.register input[type=text].year
{
    border: 1px solid #E1E1E1;
    height: 18px;
    width:30px;
}
form.register input[type=checkbox] {
    width:14px;
    margin-top:4px;
}
form.register select
{
    border: 1px solid #E1E1E1;
    width: 130px;
    float:left;
    margin-bottom:3px;
    color: #505050;
    margin-right:5px;
}
form.register select.date
{
    width: 40px;
}
input:focus, select:focus{
    background-color: #efffe0;
}
p.info{
    font-size:7pt;
    color: gray;
}
p.agreement{
    margin-left:15px;
}
p.agreement label{
    width:390px;
    text-align:left;
    margin-top:3px;
}




</style>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Ceronimo Kullanıcı Bilgileri</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>   
        <div class="column-left">
        <form action="<?php echo url::site('home/editprofile'); ?>" enctype="multipart/form-data" method="post" class="register">
            <h1>Ceronimo Kullanıcı Bilgileri</h1>

          <?php foreach($profile_data as $p_data): ?>
            <fieldset class="row2">
                <legend>Kişisel Bilgiler
              </legend>
                    <p>
                    <label>Adınız
                    </label>
                    <input name="first_name" type="text" value="<?php echo $p_data->first_name; ?>" class="long"/>
                </p>

                         <p>
                    <label>Soyadınız
                    </label>
                    <input name="last_name" type="text" value="<?php echo $p_data->last_name; ?>" class="long"/>
                </p>
                <p>
                    <label>Profil resmi</label>
                     <input type="file" name="image" value="" />
                </p>
                <p>
                    <label>Twitter *
                    </label>
                    <input name="twitter" value="<?php echo $p_data->twitter; ?>" type="text" class="long"/>
                </p>

                <p>
                    <label>Facebook *
                  </label>
                    <input name="facebook" type="text" value="<?php echo $p_data->facebook; ?>" maxlength="10"/>
                </p>
                <p>
                  <label>Şehir *
                  </label>
                    <input name="city" type="text" value="<?php echo $p_data->city; ?>" class="long"/>
                </p>

                

                <p>
                    <label class="optional">Meslek
                    </label>
                    <input name="job" class="long" value="<?php echo $p_data->job; ?>" type="text" value=""/>

                </p>
            </fieldset>
            <fieldset class="row3">
                

  <p>
                    <label>Cinsiyet: </label>
<input id="gender_m" type="radio" value="1" name="gender">
<label style="padding-top: 3px; width: 40px;" for="gender_m">Erkek</label>
<input id="gender_f" type="radio" value="0" name="gender">
<label style="padding-top: 3px; width: 40px;" for="gender_f">Kadın</label>
                </p>

                <p>
                    <label>Doğum Tarihiniz*
                  </label>
                    
                    			<select name="birthdate[d]" id="birthdate"><option value="">Gün</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option></select><select name="birthdate[m]" id="birthdate"><option value="">Ay</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option></select><select name="birthdate[y]" id="birthdate"><option value="">Yıl</option><option value="1921" >1921</option><option value="1922" >1922</option><option value="1923" >1923</option><option value="1924" >1924</option><option value="1925" >1925</option><option value="1926" >1926</option><option value="1927" >1927</option><option value="1928" >1928</option><option value="1929" >1929</option><option value="1930" >1930</option><option value="1931" >1931</option><option value="1932" >1932</option><option value="1933" >1933</option><option value="1934" >1934</option><option value="1935" >1935</option><option value="1936" >1936</option><option value="1937" >1937</option><option value="1938" >1938</option><option value="1939" >1939</option><option value="1940" >1940</option><option value="1941" >1941</option><option value="1942" >1942</option><option value="1943" >1943</option><option value="1944" >1944</option><option value="1945" >1945</option><option value="1946" >1946</option><option value="1947" >1947</option><option value="1948" >1948</option><option value="1949" >1949</option><option value="1950" >1950</option><option value="1951" >1951</option><option value="1952" >1952</option><option value="1953" >1953</option><option value="1954" >1954</option><option value="1955" >1955</option><option value="1956" >1956</option><option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option></select>			<div class="clear_both"></div>
                    
                
                </p>
                
                <p>
                    <label>Hakkımda
                  </label>
                    <textarea name="about" value="<?php echo $p_data->about; ?>" rows="4" cols="20">
                    </textarea>
                
         
          </p>

            </fieldset>
            
           <?php endforeach; ?>
            <div>
              <button class="button">Güncelle</button></div>
        </form>
    </div>
    </body>
</html>





