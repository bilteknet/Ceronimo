<?php defined('SYSPATH') OR die('No direct access allowed.');


class Postmessage_Model extends Model
{   
    public $message_table = 'posts_messages';
    
    public function __construct()
    {
      parent::__construct()  ;
    }
    
    public function add_message($data)
    {
        if($this->db->insert($this->table,$data))
                return true;
        else
            return false;
    }
    public function get_message_data($field,$byvalue,$value)
    {  
        if(is_array($field))
            $fields = implode (',', $field);
        else
            $fields = $field;
        $result = $this->db->from($this->message_table)->select($fields)->where($byvalue,$value)->get();
         return $result->result_array(true);
    }
    public function get_message_by_post_id($status)
    {
        return $this->get_message_data(array('pm_id,post_id,ip,message,date'),'status' , $status);
    }
    private function change_message_attribute($table,$attribute,$value,$pm_id)
    {
       return  $this->db->from($table)->set(array($attribute =>$value))->where(array('pm_id' => $post_id))->update();
        
    }
    public function change_message_status($pm_id,$status)
    {
        $this->change_message_attribute($this->message_table, 'status', $status, $pm_id);
    }
    
    
    
    
}
?>
