<?php
/**
 * Kullanıcı işlemlerinin yapıldığı sınıf. 
 * Klasik kullanıcı işlemlerini yapar. 
 * user_role için user_role.php kullanıldı.
 * 
 */
require_once 'application.php';
class User extends Application
{
    public $user_id;
    public $status;
    public $username;
    public $first_name;
    public $last_name;
    public $password;
    public $email;
    public $gender;
    public $brithday;
    public $registiration_date;
    public $role_id;
    public $table = 'user';
    public $fields = array('user_id','status','role_id','username','first_name','last_name'
                           ,'password','email','gender','brithday','registiration_date');
    public function __construct()
    {
        parent::__construct();
    }
    public function setUSerData($userData)
    {
        $this->status = $userData['status'];
       $this->username = $userData['username'];
       $this->first_name = $userData['first_name'];
       $this->last_name = $userData['last_name'];
       $this->email = $userData['email'];
       $this->gender = $userData['gender'];
       $thisd->brithday = $userData['brithday'];
       $this->status = $userData['status'];
       $this->role_id = $userData['role_id']; 
    }
    public function freshUserData()
    {
       unset ($this->status);
       unset ($this->username);
       unset ($this->first_name); 
       unset($this->last_name);
       unset($this->email);
       unset($this->gender);
       unset($thisd->brithday);
       unset($this->status); 
    }
    /**
     * Yeni kullanıcı kaydı
     * status default 1 gidiyor.
     */
    public function add()
    {  
       
       $insert = $this->db->query("INSERT INTO  `$this->table` (`user_id` ,`status` ,`role_id`,
             `username` ,
             `first_name` ,
             `last_name` ,
             `password` ,
             `email` ,
             `gender` ,
             `brithday` ,
             `registiration_date`
             )
              VALUES (
              NULL , '$this->status','$this->role_id','$this->username', '$this->first_name',
              '$this->last_name','$this->password',  
              '$this->email','$this->gender','$this->brithday','$this->registiration_date'
               );");
              
       if($insert)
       {
           return true;
       }
       else
       {
           return false;
       }
        
    }
    /**
     *Kullanıcıları silmiyoruz statusları 0 yapıyoruz.
     * @param type $user_id 
     */
    public function delete($user_id)
    {
        return $this->update('status', 0, $user_id);
    }
    public function update($field,$value,$user_id)
    {
        return $this->db("UPDATE  `$this->table` SET  `$field` =  `$value` WHERE  `user_id` ='$user_id' ;"); 
    }
    
    
    public function findUserData($searchField,$searchValue,$resultValue)
    {
        $sql = $this->db->query("select `$searchField`,`$resultValue` from 
               `$this->table` where `$searchField` = '$searchValue'");
        $data = $this->db->fetch_array($sql);
        return $data;
    }
    
    /**
     * istenilen alanda user datasını verir.
     *
     * @param type $field
     * @param type $user_id
     * @return type array
     */
    
    public function getUserData($field)
    {   
        if(is_array($field))
        {
            $fields = implode(',', $field);
        }
        else
        {
            $fields = $field;
        }
       
        $sql = $this->db->query("select $fields from `$this->table` where user_id = '$this->user_id' "); 
        $user_data = $this->db->fetch_array($sql);
        return $user_data;
    }
    /**
     *verilen alan ve değerle ilgili sonucu döndürür.
     * @param type $field
     * @param type $value
     * @return type 
     */
    public function fieldExist($field,$value)
    {
       
        $sql = $this->db->query("select `$field` from `$this->table` where `$field` = '$value' ");
        $data = $this->db->fetch_array($sql);
        return $data;
    }
    /**
     * Kullanıcının login olup olmadığını kontrol eder.
     * Sessiona bak, daha sonra veritabanındaki sessiona bak.
     */
    public function checkLogin()
    {
        if($this->checkSession() && $this->checkSessionID())
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }
    private function checkSession()
    {
        if($_SESSION['user_id'])
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    private function checkSessionID()
    {
        $currentSessionID   = session_id();
       $sql = $this->db->query("select user_id,session_key from online_user where 
        user_id = '$this->user_id' and session_key = '$currentSessionID' limit 1,1");
       $data = $this->db->fetch_array($sql);
       if(count($data[0]) < 0 || $data = false)
       {
           return false;
       }
       else
       {
           return true;
       }
      
         
    }
    
     public function processOnlineUser($currentSessionKey)
     {
         $sql = $this->db->query("select user_id,session_key from `online_user` where `user_id` = '$this->user_id' ");
         $data = $this->db->fetch_array($sql);
         if($data)
         {  
            
             return $this->db->query("UPDATE  `online_user` SET  `session_key` =  '$currentSessionKey' WHERE  `user_id` ='$this->user_id' ;"); 
               
         }
         else
         {   
           
             return $this->db->query("INSERT INTO  `online_user` (
                                    `user_id` ,
                                    `session_key` ,
                                    `date`
                                    )
                                    VALUES (
                                    '$this->user_id',  '$currentSessionKey', 
                                    CURRENT_TIMESTAMP
                                    );
                                    ");
         }
     }
     public function redirectProfilePage()
     {
         if($this->role_id == 4)
         {
             header("Location: profile.php");
         }
         else
         {
             header("Location: /haber");
         }
     }
     
     public function logout()
     {  
         echo "delete from online_user where user_id = ''";
         return $this->db->query("delete from `online_user` where `user_id` =$this->user_id ;");
     }
     
    
    
    
}

?>
