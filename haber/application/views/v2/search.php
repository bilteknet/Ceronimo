
<div class="whatis">
        	<div class="whatistitle">Ceronimo İçerik Ara</div>
                <div style="height: 50px;padding-top: 5px;"></div>
                
               <form>
                    
                    <fieldset>
                        Yazara göre :  <input type="text" name="name" value="" />
                         <input type="submit" value="ara" />
                    </fieldset>
                   
                </form>
                 <form>
                    <fieldset>
                        İlgili Kelime :  <input type="text" name="name" value="" />
                         <input type="submit" value="ara" />
                    </fieldset>
                    <fieldset>
                        Arşiv :  <select name="archive">
                            <option>Ocak</option>
                            <option>Şubat</option>
                            <option>Mart</option>
                            <option>Nisan</option>
                            <option>Mayıs</option>
                            <option>Haziran</option>
                            <option>Temmuz</option>
                            <option>Ağustos</option>
                            <option>Eylül</option>
                            <option>Ekim</option>
                            <option>Kasım</option>
                            <option>Aralık</option>
                            
                        </select>
                         <input type="submit" value="ara" />
                    </fieldset>
                   
                </form>
                <?php  $user_id = $this->session->get('user_id');
       $username = $this->session->get('username');
       $role_id = $user_id = $this->session->get('role_id');
       if(empty($user_id) || empty($username) || empty($role_id)) : ?>
                <div class="whatiscall"><a  href="<?php echo url::site('v2/haber/fast_signup'); ?>" target="_parent">SEN DE KATIL</a></div>
                <?php else: ?>
                <div class="whatiscall"><a  href="<?php echo url::site('v2/haber/newpost'); ?>" target="_parent">SEN DE YAZ</a></div>
                <?php endif ; ?>
                <div style="padding: 30px;"> <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fceronimocom%2F200394666690529&amp;width=240&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;height=120" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:240px;" allowTransparency="true"></iframe>
                </div>
        </div>
