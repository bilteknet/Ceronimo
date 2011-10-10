<?php

/**
 * Login işlemlerinin hepsi burada dönüyor.
 * Kullanıcı zaten login mi? Eğer loginse redirect sayfasına yönlendir.
 */
print_r($_POST);
//Gelen Değişkenle Kontrol Ediliyor : 
if(empty($_POST['email']) || empty($_POST['pass']))
{
    echo "Lütfen email adresinizi ve şifrenizi giriniz.";
}
else
{
    require_once 'library/sec.php';
    require_once 'start.php';
    // Değişkenleri xss kontrolünden geçiyor.
    $email = xss_clean($_POST['email']);
    $pass = $_POST['pass'];
    
    //user tablosu ile gelen veriler karşılaştırılıyor.
    $emailControl = $user->fieldExist('email', $email);
   $passControl = $user->fieldExist('password', sha1($pass));
   //print_r($emailControl);
    if($emailControl && $passControl)  // Giriş başarılı
    {
       // Oturum ID 'si tazeleniyor 
        //session_regenerate_id();
       //$newSessionID = session_id();
       //user_id yi alıyoruz :
        $userID = $user->findUserData('email', $emailControl['email'], 'user_id');
		$roleData =$user->findUserData('email', $emailControl['email'], 'role_id');
		$usernameData =$user->findUserData('email', $emailControl['email'], 'username');
        //user_id yi sessiona ve objeye ata :
        $_SESSION['user_id'] = $userID['user_id'];
		$_SESSION['role_id'] = $roleData['role_id'];
		$_SESSION['username'] = $usernameData['username'];
       // $user->user_id = $userID['user_id'];
        //User sınıfının tüm objeleribne değerlerini ata :
      // $userData = $user->getUserData(array('username','first_name','last_name','email','gender','brithday','status','role_id'));
      // $user->setUserData($userData);
       
       //online_user tablosuna yeni değerler giriliyor :
       
       //$user->processOnlineUser($newSessionID); 
       //print_r($user);
      $user->redirectProfilePage();
        
    }
    else
    {
        header("Location: x.php");
    }
}
 

?>
