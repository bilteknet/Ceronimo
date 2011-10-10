<?php defined('SYSPATH') OR die('No direct access allowed.');

class Comments_Controller extends Controller
{
    protected $post;
    protected $home_template = array(); 
    protected $user;
    public $current_time;
    public $popular_posts;
    public $session;
    public $is_loggin;
    protected $comment;
    public function __construct()
    {
        parent::__construct();
        $this->post = new Post_Model();
        $this->user = new Users_Model();
        $this->current_time = date('Y-m-d H:i:s');
        $this->session = Session::instance();
        $this->comment = new Comment_Model();
       if($this->session->get('user_id'))
            $this->is_loggin = true;
        else
             $this->is_loggin = false;
    }
    public function index()
    {
        echo "deneme";
    }
    public function add_comment($post_id)
    {
        // posttan gelen verileri işleyip veritabanına atar. 
       
   
        $comment = $this->input->post('comment');

        
        if($this->is_loggin)
        {
            $author = $this->session->get('username');
            $email = null;
            $website = null;
           
        }
        else
        {
            $author = 'misafir';
            $email = $this->input->post('email');
            $website = $this->input->post('website');
        }
        $data = array
        (
            'post_id'=>$post_id,
            'author'=>$author,
            'email'=>$email,
            'website'=>$website,
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'date'=>$this->current_time,
            'comment'=>$comment,
            'approved'=>0, // default
            'parent_id'=>0
            
        );
        $this->comment->add($data);
        $this->post->update_comment_count($post_id);
        url::redirect('v2/haber/read/'.$post_id.'#contentHome-tab');
    }
}