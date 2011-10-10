<?php defined('SYSPATH') OR die('No direct access allowed.');

class Haber_Controller extends Controller
{
    protected $post;
    protected $home_template = array(); 
    protected $user;
    protected $message;
    public $current_time;
    public $popular_posts;
    public $session;
    public $is_loggin;
    public $comment;
   
    public function __construct()
    {
        parent::__construct();
        $this->post = new Post_Model();
        $this->user = new Users_Model();
        $this->message = new Message_Model();
        $this->current_time = date('Y-m-d H:i:s');
        $this->popular_posts = $this->post->get_popular_posts();
        $this->comment = new Comment_Model();
        $this->session = Session::instance();
       
        if($this->session->get('user_id'))
            $this->is_loggin = true;
        else
             $this->is_loggin = false;
    }
     private function checklogin()
   {
       $user_id = $this->session->get('user_id');
       $username = $this->session->get('username');
       $role_id = $user_id = $this->session->get('role_id');
       if(empty($user_id) || empty($username) || empty($role_id))
       {  
         
           url::redirect('/v2/haber/', 301);
       }
       
           
   }
    public function get_bl_main_news()
    {
         $db = new Database();
        
        $result = $db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.type = 2 AND posts.status = 1 ');
       return $result->result_array();
    }
    public function get_bl_main_news_big()
    {
         $db = new Database();
        
        $result = $db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.type = 2 AND posts.status = 1  order by posts.read_count desc LIMIT 4   ');
       return $result->result_array();
    }
    public function get_main_news()
    {
        $db = new Database();
        
        $result = $db->query('select posts.*,post_positions.*, user.username 
            from posts inner join post_positions on 
            posts.post_id = post_positions.post_id inner join 
            user on user.user_id = posts.user_id AND posts.type = 1 AND posts.status = 1 AND post_positions.position = 1 order by post_positions.order desc LIMIT 8 ');
       return $result->result_array();
    }
     public function get_main_news_big()
    {
        $db = new Database();
        
        $result = $db->query('select posts.*,post_positions.*, user.username 
            from posts inner join post_positions on 
            posts.post_id = post_positions.post_id inner join 
            user on user.user_id = posts.user_id AND posts.type = 1 AND posts.status = 1 AND post_positions.position = 2 order by post_positions.order desc LIMIT 6 ');
       return $result->result_array();
    }
    public function index()
    {   
        
        $view = new View('v2/index');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->featured = new View('v2/featured');
        $view->what = new View('v2/what');
        $view->news = new View('v2/news');
        $view->news_tab = new View('v2/news_tab');
        $view->news_big = new View('v2/news_big');
        $view->news_big->main = $this->post->get_bloggers_posts(6);
        $view->footer = new View('v2/footer');
        $main_news = $this->get_main_news();
        $view->news->main_news = $this->get_main_news_big();
        $view->featured->main_news = $main_news;
        $bloggers_posts = $this->post->get_bloggers_popular(9);
        $view->news_tab->popular_comment = $this->post->get_popular_posts();
        $view->news_tab->popular_read = $this->post->get_popular_read();
        $view->featured->bloggers_posts = $bloggers_posts;
        $view->render(true);
    }
    public function category($category)
    {
        $view = new View('v2/category_main');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->what = new View('v2/what');
        $view->category = new View('v2/category');
        
        $view->footer = new View('v2/footer');
        switch ($category)
        {
    case "yenieklenen":
        $news = $this->post->get_new_added(10);
        break;
    case "coktartisilan":
         $news = $this->post->get_most_commented(10);
        break;
    case "cokokunan":
         $news = $this->post->get_most_read(10);
        break;
    
    
}
        $view->category->news = $news;
        $view->render(true);
    }
    public function blogger()
    {
        $view = new View('v2/blogger_main');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->what = new View('v2/search');
        $view->category = new View('v2/blogger');
        $view->footer = new View('v2/footer'); 
        $bloggers_posts = $this->post->get_bloggers_popular(9);
        $view->category->bloggers_posts = $bloggers_posts;
        $view->render(true);
    }
    public function read($post_id)
    {
        $view = new View('v2/main');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->content = new View('v2/content');
        $view->comment = new View('v2/comment');
        $view->what = new View('v2/what');
        $view->hotnews = new View('v2/hotnews');
        $view->content->related = $this->post->get_related($post_id);
        $view->content->read_post = $this->post->browse_post($post_id);
        $tags = $this->post->get_post_tags($post_id);
        $this->post->update_read_count($post_id);
        $p_tags =  explode(" ", $tags[0]->tags);
        $view->content->tags= $tags[0]->tags;
        $view->comment->post_id = $post_id;
        $view->comment->tags = $tags[0]->tags;
        $view->comment->comments = $this->comment->get_comment_data(array('author,date,comment,parent_id,comment_id'), 'post_id', $post_id);
        $view->comment->comment_count = $this->post->get_post_comment_count($post_id);
        $view->hotnews = new View('v2/hotnews');
        $view->hotnews->big_news = $this->get_main_news_big();
        $view->footer = new View('v2/footer');
        $view->render(true);
    }
    public function add_adj($post_id, $adj)
    {
        if($this->session->get('user_id'))
                $user_id = $this->session->get('user_id');
        else
            $user_id = 99999999;
        
        $data = array
        (
            'post_id' => $post_id,
            'user_id' => $user_id,
            'adj' => $adj,
            'date' => null,
            'ip'=>$_SERVER['REMOTE_ADDR']
            
        );
        if($this->post->add_adj($data))
                
                echo 'Oyunuz kaydedildi';
        $adj_count = $this->post->get_post_point_count($post_id);
        echo 'Bu haber '.$adj_count.' kere oylandı. Ürkütücü : '.$this->post->get_post_adj_count($post_id, 'ürkütücü').', Heyecanlı : '.$this->post->get_post_adj_count($post_id, 'heyecanlı').', 
           Karamsar : '.$this->post->get_post_adj_count($post_id, 'karamsar').', İyimser : '.$this->post->get_post_adj_count($post_id, 'iyimser').', Eğlenceli : '.$this->post->get_post_adj_count($post_id, 'eglenceli').', 
           Mantıklı :'.$this->post->get_post_adj_count($post_id, 'mantikli').', Bilgilendirici : '.$this->post->get_post_adj_count($post_id, 'bilgilendirici').', Yenilikçi : '.$this->post->get_post_adj_count($post_id, 'yenilikci').'    ';
        
        
                
    }
    public function fast_signup()
    {
        
        $view= new View('fast_register_form');
    
        $view->render(true);
    }
    public function newmessage($targetuser)
    {
        $this->checklogin();
        $view = new View('v2/newmessage');
        $view->targetuser = $targetuser;
        $view->render(true);
    }
    public function sendmessage()
    {
         $message_data = array
            (
           'from' =>$this->session->get('user_id'),
           'to'   => $this->input->post('username'),
           'title' => $this->input->post('title'),
           'content' =>$this->input->post('message'),
           'date' => $this->current_time,
           'status' => 1,
           'type' =>2
           
            );
           
           $this->message->new_message($message_data);
    }
    public function edit_profile()
    {
        
        $this->checklogin();
        $user_profile_data = $this->user->get_user_data(array('user_id,first_name,last_name,brithday,gender,city,job,about,twitter,facebook'), 'username', $this->session->get('username'));
        $view = new View('editprofile');
        $view->profile_data = $user_profile_data;
        $view->render(true);
    }
    public function profile($username)
    {
        $view = new View('v2/contents');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->profile= new View('v2/profile');
        $view->what = new View('v2/what');
        $view->footer = new View('v2/footer');
        
        $view->profile->username = $username;
        $user_profile_data = $this->user->get_user_data(array('user_id,first_name,last_name,brithday,gender,city,job,about,twitter,facebook'), 'username', $username);
        $view->profile->profile_data = $user_profile_data;
        
        $my_posts = $this->post->get_my_posts($user_profile_data[0]->user_id);
        $view->profile->my_posts = $my_posts;
        $my_comments = $this->comment->get_comment_data(array('author,date,comment,post_id'), 'author', $username);
        $view->profile->comment = $my_comments;
        $view->render(true);
    }
    public function newpost()
    {
        $this->checklogin();
        $view = new View('v2/mainpost');
        $view->top = new View('v2/top');
        $view->header = new View('v2/header');
        $view->content = new View('v2/newpost');
        
        $view->what = new View('v2/what');
        $view->hotnews = new View('v2/hotnews');
     
        $view->hotnews->big_news = $this->get_main_news_big();
        $view->footer = new View('v2/footer');
        $view->render(true);
        
    }
}


?>