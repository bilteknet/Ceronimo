<?php defined('SYSPATH') OR die('No direct access allowed.');

class Comment_Model extends Model
{
  public $comment_table;
  
  public function __construct()
  {
      parent::__construct();
      $this->comment_table = 'comment';
  }
  
  public function add($data)
  {
      $this->db->insert($this->comment_table,$data);
  }
  public function get_comment_data($field,$byvalue,$value)
  {  
        if(is_array($field))
            $fields = implode (',', $field);
        else
            $fields = $field;
        $result = $this->db->from($this->comment_table)->select($fields)->where($byvalue,$value)->orderby('date','desc')->get();
         return $result->result_array(true);
  }
  private function change_comment_attribute($table,$attribute,$value,$comment_id)
    {
       return  $this->db->from($table)->set(array($attribute =>$value))->where(array('comment_id' => $comment_id))->update();
        
    }
  public function approve($comment_id)
  {
      return $this->change_comment_atribute($this->comment_table,'approved',1,$comment_id);
  }
  
  
}

?>

