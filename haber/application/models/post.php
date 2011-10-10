<?php defined('SYSPATH') OR die('No direct access allowed.');


class Post_Model extends Model
{   
    protected $posts_table;
    protected $posts_category_table;
    protected $posts_position_table;
    protected $posts_tags_table;
    public $post_id;
    public function __construct()
    {
        parent:: __construct();
        $this->posts_table = 'posts';
        $this->posts_category_table = 'posts_category';
        $this->posts_position_table = 'post_positions';
        $this->posts_tags_table = 'posts_tags';
    }
    
    public function add_post($data)
    {
        $sql = $this->db->insert($this->posts_table,$data);
        if($sql)
            {
            $this->post_id = $sql->insert_id();
            return true;
            
            }
            else
             {
            return false;
            
            }
    }
    public function update_post($data,$post_id)
    {
       
        $sql = $this->db->from($this->posts_table)->set(array('subtitle'=>$data['subtitle'],'title'=>$data['title'],'content'=>$data['content']))->where(array('post_id' => $post_id))->update();
        if($sql)
            return true;
        else
            return false;
    }
    public function  update_read_count($post_id)
    {
    return   $this->db->query('Update `posts` SET `read_count` = `read_count`+1  WHERE `post_id` = '.$post_id.'  ');
 
    }
    
    public function  update_comment_count($post_id)
    {
    return   $this->db->query('Update `posts` SET `comment_count` = `comment_count`+1  WHERE `post_id` = '.$post_id.'  ');
 
    }
    public function delete_post($post_id)
    {
        $sql = $this->db->delete($this->posts_table, array('post_id' => $post_id));
        if($sql)
            return true;
        else
            return false;
    }
    public function add_category_to_post($data)
    {
      $sql = $this->db->insert($this->posts_category_table,$data);
        if($sql)
            return true;
        else
            return false;
    }
    public function add_tags_to_post($data)
    {
        $sql = $this->db->insert($this->posts_tags_table,$data);
        if($sql)
            return true;
        else
            return false;
    }
    private function change_post_attribute($table,$attribute,$value,$post_id)
    {
       return  $this->db->from($table)->set(array($attribute =>$value))->where(array('post_id' => $post_id))->update();
        
    }
    public function change_post_status($status,$post_id)
    {
       return $this->change_post_attribute($this->posts_table, 'status',$status, $post_id);
    }
    public function change_post_comment_status($comment_status,$post_id)
    {
        return $this->change_post_attribute($this->posts_table, 'comment_status',$comment_status, $post_id);
    }
    public function add_post_position($data)
    {
      return  $this->db->insert($this->posts_position_table,$data);
    }
    public function change_post_category($post_category,$post_id)
    {
       return $this->change_post_attribute($this->posts_category_table, $post_category, $post_id);
    }
    
    public function get_post_data($field,$byvalue,$value)
    {  
        if(is_array($field))
            $fields = implode (',', $field);
        else
            $fields = $field;
        $result = $this->db->from($this->posts_table)->select($fields)->where($byvalue,$value)->orderby('post_date', 'DESC')->get();
         return $result->result_array(true);
    }
    public function get_my_posts($user_id)
    {
       return  $this->get_post_data(array('post_id,user_id,subtitle,title,content,status,comment_status,post_date,comment_count'), 'user_id', $user_id);
    }
    public function get_bloggers_posts($limit)
    {
       $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 AND posts.type = 2 order by comment_count DESC LIMIT 0,'.$limit.'');
       return $result->result_array();
    }
    public function get_profs_posts()
    {
      return  $this->get_post_data(array('post_id,user_id,subtitle,title,content,status,comment_status,post_date,comment_count,type'), 'type', 1);
    }
    public function get_posts_positions()
    {
       
    }
    public function get_unapproved_posts()
    {
       $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 0 AND posts.type=2 order by comment_count DESC LIMIT 0,5');
       return $result->result_array();
    }
    public function browse_post($post_id)
    {
        $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id  AND posts.post_id = '.$post_id.'');
       return $result->result_array();
    }
    public function get_popular_posts()
    {
     $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 order by comment_count DESC LIMIT 0,5');
       return $result->result_array();
    }
    public function get_popular_read()
    {
     $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 order by read_count DESC LIMIT 0,5');
       return $result->result_array();
    }
    public function get_post_tags($post_id)
    {
       $result = $this->db->query('select * from posts_tags where post_id = '.$post_id.' ');
       return $result->result_array();
    }
    public function get_post_comment_count($post_id)
    {
        $result = $this->db->query('select comment_count from posts where post_id = '.$post_id.' ');
       return $result->result_array();
    }
    public function get_bloggers_popular($limit)
    {
        $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 AND posts.type = 2 order by post_date DESC LIMIT 0,'.$limit.'');
       return $result->result_array();
    }
    public function add_adj($data)
    {
        return $this->db->insert('news_adj', $data);
    }
    public function get_all_posts()
    {
         $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 ');
       return $result->result_array();
    }
    public function get_new_added($limit)
    {
         $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 order by post_date DESC LIMIT 0,'.$limit.'');
       return $result->result_array();
    }
    public function get_most_commented($limit)
    {
         $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 order by comment_count DESC LIMIT 0,'.$limit.'');
       return $result->result_array();
    }
    public function get_most_read($limit)
    {
         $result = $this->db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.status = 1 order by read_count DESC LIMIT 0,'.$limit.'');
       return $result->result_array();
    }
    public function add_related($data)
    {
        return $this->db->insert('news_related',$data);
    }
    public function get_related($post_id)
    {
        $result = $this->db->query('select news_related.main_related, 
            news_related.post_id,posts.title from news_related,posts where 
            (news_related.main_related = '.$post_id.' OR news_related.post_id = '.$post_id.') AND 
            (  news_related.main_related = posts.post_id OR news_related.post_id = posts.post_id)');
         return $result->result_array();
    }
    public function get_post_point_count($post_id)
    {
       return $this->db->count_records('news_adj', array('post_id' => $post_id));
    }
    public function get_post_adj_count($post_id,$adj)
    {
         return $this->db->count_records('news_adj', array('adj' => $adj));
    }
        
    
    
    
    
}