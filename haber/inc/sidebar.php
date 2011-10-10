<div class="column">
                <!--create news-->
                <div class="create-news">
                    
                </div>
                <!--login-->
                <div class="login">
				<?php if(!$_SESSION['user_id']) : ?>
				<form action="login.php" method="POST">
                    <input type="text" name="email" value="e-mail" /> <input type="password" name="pass" value="�ifre" />
                    <div class="lost-login">
                        <a href="#">Şifremi Unuttum</a>  <a href="newuser.php">Kayıt</a>
                        <button>Giriş</button>
                    </div>
					</form>
					<?php endif; ?>
                </div>
                <!--facebook twitter-->
                <div class="facebook-twitter">
                    
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><img src="<?=$config['domain']?>content/images/column-splitter-horizontal.png" alt="" /></div>
                <div class="popular-news-title">
                    En Popüler Haberler
                    <select>
                        <option>21.06.2011</option>
                        <option>20.06.2011</option>
                        <option>19.06.2011</option>
                    </select>
                </div>
                <!--splitter-->
                <div class="splitter-horizontal"><img src="<?=$config['domain']?>content/images/column-splitter-horizontal.png" alt="" /></div>
                <div class="popular-news">
                    <ol>
                        <li><a href="#">Kilise Bakan'a emanet</a><span class="comment">127</span><span class="date">Ağustos 02, 2011 10:22</span></li>
                        <li><a href="#">İnsanlığın son çılgınlığı!</a><span class="comment">101</span><span class="date">Ağustos 02, 2011 10:27</span></li>
                        <li><a href="#">‘Tayfur, Fener formasıyla çıkarsa hiç şaşmam!’</a><span class="comment">98</span><span class="date">Ağustos 02, 2011 10:35</span></li>
                        <li><a href="#">Van'da saldırı: 3 şehit!</a><span class="comment">93</span><span class="date">Ağustos 02, 2011 10:43</span></li>
                        <li><a href="#">Ev almanın zamanı mı?</a><span class="comment">78</span><span class="date">Ağustos 02, 2011 10:45</span></li>
                        <li><a href="#">Şehit haberleri ne anlama geliyor?</a><span class="comment">65</span><span class="date">Ağustos 02, 2011 10:51</span></li>
                        <li><a href="#">Küme düşürülme toplumu nasıl etkiler?</a><span class="comment">61</span><span class="date">Ağustos 02, 2011 10:57</span></li>
                    </ol>
                </div>
                <div><a href="#"><img src="<?=$config['domain']?>content/photos/advertise/sony.jpg" alt="" /></a></div>
            </div>