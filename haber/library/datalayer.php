<?php


/**
 * Facebook uygulamaları için basit veri işleme sınıfı, application sınıfının
 * nesneleriyle çalışır.
 *
 * @author onur baran
 */
class datalayer
{
    public $db;
    public function  __construct()
    {
        require_once 'db_class.php';
        $this->db = new Database('root', 'localhost', 'bilteknet7017', 'ceronimo2');
    }
    public function addPost($data,$status)
	{   
	    $subtitle = mysql_real_escape_string($data[1]);
		$title = mysql_real_escape_string($data[2]);
		$content = mysql_real_escape_string($data[3]);
		$this->db->query("INSERT INTO `posts`
		(`post_id`, `user_id`, `subtitle`, `title`, `content`, `status`, `comment_status`, `post_date`, `comment_count`, `link`, `post_type`) 
		VALUES (NULL, '{$data[0]}', '$subtitle', '$title', '$content', '{$data[4]}', '$status', CURRENT_TIMESTAMP, '{$data[6]}', '{$data[7]}', '{$data[8]}');");
		echo mysql_error();
	}
	public function addPostCategory($category,$order,$post_id)
	{
	$this->db->query("INSERT INTO `posts_category` (`category_id`, `post_id`, `order`) VALUES ('$category', '$post_id', '$order');");
	
	}
	public function newPost($data,$status,$category,$order)
	{
		$this->addPost($data,$status);
		$post_id = $this->db->insert_id();
		$this->addPostCategory($category,$order,$post_id);
	}
  
}
