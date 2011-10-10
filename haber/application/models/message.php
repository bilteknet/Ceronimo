<?php defined('SYSPATH') OR die('No direct access allowed.');


class Message_Model extends Model
{
    protected $table;
    protected $date ;
    public function __construct()
    {
       parent::__construct();
        $this->table = 'user_messages';
        $this->date = date('Y-m-d H:i:s');
    }
    public function new_message($data)
    {
        if($this->db->insert($this->table,$data))
                return true;
        else
            return false;
                
    }
    public function myinbox($data)
    {
        
    }
    public function mysends()
    {
        
    }
    public function delete_message()
    {
        
    }
    public function change_message_status()
    {
        
    }
    public function count_unread_messages()
    {
        
    }
}