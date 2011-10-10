<?php defined('SYSPATH') OR die('No direct access allowed.');

class Home_Controller extends Controller
{
    protected $post;
    protected $home_template = array(); 
    protected $user;
    protected $message;
    public $current_time;
    public $popular_posts;
    public $session;
    public $is_loggin;
    public function __construct()
    {
        parent::__construct();
        $this->post = new Post_Model();
        $this->user = new Users_Model();
        $this->message = new Message_Model();
        $this->current_time = date('Y-m-d H:i:s');
        $this->popular_posts = $this->post->get_popular_posts();
        
        $this->session = Session::instance();
        $this->home_template = array
                (
                    'header' => View::factory('header'),
                    'left'   => View::factory('left'),
                    'right'  => View::factory('right'),
                    'footer' => View::factory('footer'),
                    'center' => View::factory('center'),
                    'top'    => View::factory('top')
                );
        if($this->session->get('user_id'))
            $this->is_loggin = true;
        else
             $this->is_loggin = true;
    }
    public function index()
    {   
        
        $view = new View('index');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('left');
        $view->center = new View('center');
        $view->right = new View('right');
        $view->footer = new View('footer');
        $main_news = $this->get_main_news();
        $blogger_box_news = $this->get_bl_main_news();
        $bloggers_posts = $this->post->get_bloggers_posts(5);
        $view->left->bloggers_posts = $bloggers_posts;
        $view->left->wall_news = $this->get_blogger_wall_news();
        $view->center->main_news = $main_news;
        $view->left->box_news = $blogger_box_news;
        $view->right->popular_posts = $this->popular_posts;
        $view->render(true);
    }
    
    public function profile($username)
    {
   
           $this->get_users_profile($username);
        
    }
    
    private function get_users_profile($username)
    {
        $view = new View('index');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('p_left');
        $view->center = new View('p_center');
        $view->right = new View('right');
        $view->footer = new View('footer');
        $view->left->username = $username;
        $user_profile_data = $this->user->get_user_data(array('user_id,first_name,last_name,brithday,gender'), 'username', $username);
        $view->left->profile_data = $user_profile_data;
        $view ->center->username = $username;
        $my_posts = $this->post->get_my_posts($user_profile_data[0]->user_id);
        $view->center->my_posts = $my_posts;
       $view->right->popular_posts = $this->popular_posts;
        
       $view->render(true);
    }
    public function sendmessage($user_id)
    {
        $message_data = array
            (
           'from' =>1,
           'to'   => $user_id,
           'title' => $this->input->post('title'),
           'content' =>$this->input->post('message'),
           'date' => $this->current_time,
           'status' => 0,
           'type' =>2
           
            );
           
           $this->message->new_message($message_data);
           url::redirect('home', 301);
    }
    public function get_main_news()
    {
        $db = new Database();
        
        $result = $db->query('select posts.*,post_positions.*, user.username 
            from posts inner join post_positions on 
            posts.post_id = post_positions.post_id inner join 
            user on user.user_id = posts.user_id AND posts.type = 1 AND posts.status = 1 AND posts.type=1 ');
       return $result->result_array();
    }
    public function get_main_news_by_category($category)
    {
        $db = new Database();
        
        $result = $db->query('select posts.*,post_positions.*, user.username,posts_category.*
            from posts_category, posts inner join post_positions on 
            posts.post_id = post_positions.post_id inner join 
            user on user.user_id = posts.user_id AND posts.type = 1 AND posts.status = 1 where posts_category.post_id = posts.post_id AND posts_category.category_id ='.$category.'');
       return $result->result_array();
    }
    public function get_bl_main_news()
    {
         $db = new Database();
        
        $result = $db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.type = 2 AND posts.status = 1 AND posts.type=2 ');
       return $result->result_array();
    }
    public function get_bl_main_news_by_category($category)
    {
        $db = new Database();
        
        $result = $db->query('select posts.*, user.username,posts_category.*
            from posts_category, posts inner join 
            user on user.user_id = posts.user_id AND posts.type = 2 AND posts.status = 1  where posts_category.post_id = posts.post_id AND posts_category.category_id ='.$category.'  ');
       return $result->result_array();
    }
    public function get_blogger_wall_news()
    {
        $db = new Database();
        
        $result = $db->query('select posts.*, user.username 
            from posts inner join 
            user on user.user_id = posts.user_id AND posts.type = 2 AND posts.status = 1 AND posts.type=2 ORDER BY `posts`.`post_id`  DESC limit 0,1');
       return $result->result_array();
    }
    public function readnews($post_id)
    {
        
        $view = new View('main');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('readnews');
        $view->right = new View('right_news');
        $view->footer = new View('footer');
        $view->left->read_post = $this->post->browse_post($post_id);
         $view->right->popular_posts = $this->popular_posts;
         $tags = $this->post->get_post_tags($post_id);
         $this->post->update_read_count($post_id);
         $p_tags =  explode(" ", $tags[0]->tags);
         $view->left->tags= $tags[0]->tags;
         
        $view->render(true);
    }
    public function category($category)
    {
         $view = new View('index');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('left');
        $view->center = new View('center');
        $view->right = new View('right');
        $view->footer = new View('footer');
        $main_news = $this->get_main_news_by_category($category);
        $blogger_box_news = $this->get_bl_main_news_by_category($category);
        $bloggers_posts = $this->post->get_bloggers_posts();
        $view->left->bloggers_posts = $bloggers_posts;
        $view->center->main_news = $main_news;
        $view->left->box_news = $blogger_box_news;
        $view->right->popular_posts = $this->popular_posts;
        $view->left->wall_news = $this->get_blogger_wall_news();
        $view->render(true);
    }
    public function fast_signup()
    {
        $view = new View('othermain');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('fast_register_form');
        $view->footer = new View('footer');
        $view->render(true);
    }
    public function signup()
    {
        $view = new View('othermain');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('register_form');
        $view->footer = new View('footer');
        
        $view->render(true);
    }
    public function register_writer()
    {
       
        $this->session->set('signup',$this->input->post());
        $role_id = 2 ; // Hızlı üyelikten geldi. 
        $status = 1; // Kullanıcı profili açık.
        $brithday = $this->input->post('birthday[d]').'/'.$this->input->post('birthday[m]').'/'.$this->input->post('birthday[y]');
        $data = array
        (
            'user_id' => NULL,
            'status'=>$status,
            'role_id'=>$role_id,
            'username'=>$this->input->post('username'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'password'=>md5($this->input->post('pass')),
            'email'=>$this->input->post('email'),
            'gender'=>$this->input->post('gender'),
    
            'registiration_date'=>NULL
        );
        $this->user->register_user($data);
         $this->session->delete('signup');
        url::redirect('/v2/haber/', 301);
    
    }
    public function editprofile()
    {
        $this->session->set('editprofile',$this->input->post());
        $brithday = $this->input->post('birthday[d]').'/'.$this->input->post('birthday[m]').'/'.$this->input->post('birthday[y]');
        
       $filenamexxl = upload::save('image',$this->session->get('user_id').'.jpg');
           Image::factory($filenamexxl)
		->resize(90, 90, Image::AUTO)
		->save(DOCROOT.'static/pictures/user/'.basename($filenamexxl));
       unlink($filenamexxl);
        $data = array
        (
            
            'user_id'=>$this->session->get('user_id'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'twitter'=>$this->input->post('twitter'),
            'facebook'=>$this->input->post('facebook'),
            'city'=>$this->input->post('city'),
            'job'=>$this->input->post('job'),
            'gender'=>$this->input->post('gender'),
            'about'=>$this->input->post('about')
            
        );
         $this->user->edit_user($data);
         $this->session->delete('editprofile');
         url::redirect('v2/haber/profile/'.$this->session->get('username').'');
    }
    public function register_fast()
    {
        $this->session->set('signup',$this->input->post());
        $role_id = 2 ; // Hızlı üyelikten geldi. 
        $status = 1; // Kullanıcı profili açık.
        
        $data = array
        (
            'user_id' => NULL,
            'status'=>$status,
            'role_id'=>$role_id,
            'username'=>$this->input->post('username'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'password'=>md5($this->input->post('pass')),
            'email'=>$this->input->post('email'),
            'gender'=>$this->input->post('gender'),
            'brithday'=>$this->input->post('dtarihi'),
            'registiration_date'=>NULL
        );
        $this->user->register_user($data);
        $this->session->delete('signup');
        url::redirect('/Admin/admin/adminlogin', 301);
    }
    /**
     * Şimdilik deneme user dan takibe alınacak.
     * @param type $user_id 
     */
    public function follow_user($user_id)
    {
        // sessionı kontrol et
        if($this->session->get('user_id'))
                $follower_id =$this->session->get('user_id');
        else
            $follower_id = 999;
        $data = array
        (
            'follower_id'=>$follower_id,
            'user_id'=>$user_id
        );
        $this->user->follow_user($data);
        // takipçi olunacak kişinin e maili alınıyor : 
        $to = $this->user->get_user_data('email', 'user_id', $user_id);
        $followers_name =  $this->user->get_user_data('username', 'user_id', $user_id);
        
        echo $followers_name[0]->username.' kullanıcısının takipçisi oldunuz.';
        
/**
$from    = 'baranonur@gmail.com';
$subject = 'Ceronimo Bilgilendirme';
$message = $followers_name.' kullanıcısının takipçisi oldunuz.';
 
email::send($to, $from, $subject, $message, TRUE);
 * 
 */
    }
   
}
?>