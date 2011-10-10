<?php defined('SYSPATH') OR die('No direct access allowed.');


class Groups_Model extends Model
{ 
    public $table;
    public $user_table;
    public $wall_table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'groups';
        $this->user_table = 'groups_followers';
    }
    public function get_group_data($field,$byvalue,$value)
    {  
        if(is_array($field))
            $fields = implode (',', $field);
        else
            $fields = $field;
        $result = $this->db->from($this->table)->select($fields)->where($byvalue,$value)->get();
         return $result->result_array(true);
    }
    public function add_group($data)
    {
        $this->db->insert($this->table,$data);
    }
    public function delete_group($group_id)
    {
        $this->db->delete($this->table,array('group_id'=>$group_id));
    }
    public function change_group_name($data)
    {
        $this->db->update($this->table, array('group_name' => $data['group_name']), array('group_id' => $data['group_id']));
    }
    public function change_group_title($data)
    {
         $this->db->update($this->table, array('group_title' => $data['group_title']), array('group_id' => $data['group_id']));
    }
    public function change_group_pic($data)
    {
        $this->db->update($this->table, array('group_pic' => $data['group_pic']), array('group_id' => $data['group_id']));
    }
    public function follow_group($data)
    {
        $this->db->insert($this->user_table,$data);
    }
    public function unfollow_group($data)
    {
         $this->db->delete($this->user_table,array('user_id'=>$data['user_id'],'group_id'=>$data['group_id']));
    }
    public function add_wall_post($data)
    {
        $this->db->insert($this->wall_table,$data);
    }
    public function delete_wall_post($wall_post_id)
    {
        $this->db->delete($this->wall_table,$wall_post_id);
    }
    
    
    
}

?>