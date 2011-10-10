<?php
/**
 * Kullanıcı kayıt sayfası
 */

print_r($_POST);
// gelen verileri kontrol ediyoruz : 
if
(
 empty ($_POST['username']) || empty ($_POST['first_name']) || empty ($_POST['last_name'])
 || empty ($_POST['pass']) || empty ($_POST['email']) || empty($_POST['gender']) 
 || empty($_POST['brithday'])
)
{
     echo $error = "Lütfen tüm alanları doldurunuz";
}
else if($_POST['pass'] != $_POST['pass2'])
{
    echo $error = "Şifre ile tekrarı uyuşmuyor";
}

else
{   
    require_once 'library/sec.php';
    require_once 'start.php';
    // Daha önce bu mail adresi ile kayıt yapılmış mı?
    $emailControl = $user->fieldExist('email', $_POST['email']);
   print_r($emailControl);
    if($emailControl && $passControl)
    {
        echo $error = "Bu mail adresiyle daha önce kayıt yapılmış";
    }
    else
    {        
        //Veriler temizleniyor :
      $user->username = xss_clean($_POST['username']);
      $user->brithday = xss_clean($_POST['brithday']);
      $user->email = xss_clean($_POST['email']);
      $user->first_name = xss_clean($_POST['first_name']);
      $user->last_name = xss_clean($_POST['last_name']);
      $user->gender = xss_clean($_POST['gender']);
      $user->status = 1;
      $user->password = sha1($_POST['pass2']);
      $user->registiration_date = date("Y-m-d H:i:s");
	  // kayıtta default role id = 4 oluyor. (4 = Katılımcı)
      $user->role_id = '4';
      if($user->add())
      {
      header("Location: index.php");
      }
      else
      {
          echo mysql_error();
      }
        
    }
    
}


?>
