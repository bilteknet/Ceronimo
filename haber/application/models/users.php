<?php defined('SYSPATH') OR die('No direct access allowed.');

class Users_Model extends Model
{
    public $user_id;
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $brithday;
    public $gender;
    public $user_table = 'user';
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_user_data($field,$byvalue,$value)
    {  
        if(is_array($field))
            $fields = implode (',', $field);
        else
            $fields = $field;
        $result = $this->db->from($this->user_table)->select($fields)->where($byvalue,$value)->get();
         return $result->result_array(true);
    }
    public function register_user($data)
    {
       $sql = $this->db->insert('user',$data);
       if($sql)
           return true;
       else
           return false;
    }
    public function follow_user($data)
    {
        return $this->db->insert('user_follower',$data);
    }
    public function edit_user($data)
    {
      return $this->db->update('user', array('first_name' => $data['first_name'],'last_name' =>$data['last_name'],'twitter'=>$data['twitter'],'facebook'=>$data['facebook'],'city'=>$data['city'],'job'=>$data['job'],'gender'=>$data['gender'],'about'=>$data['about']), array('user_id' => $data['user_id']));
    }
    
    
}