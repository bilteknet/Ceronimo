<?php defined('SYSPATH') OR die('No direct access allowed.');


class Admin_Model extends Model
{ 
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }
    
    public function register_user($data)
    {
        $sql = $this->db->insert($this->table,$data);
        if($sql)
            return true;
    }
    public function exist_admin($email,$password)
    {
        $exist_admin = $this->db->count_records($this->table,array('email' => $email,'password' => $password));
        if($exist_admin > 0)
            return true;
    }
    
    public function get_admin_data($field,$byvalue,$value)
    {
        $result = $this->db->from($this->table)->select($field)->where($byvalue,$value)->get();
        return $result->result_array(true);
    }
    
    
}

?>
