<?php defined('SYSPATH') OR die('No direct access allowed.');

class Admin_Controller extends Controller {
    
   protected $admin;
   protected $session;
   protected $current_time;
   protected $post;
   protected $message;
   public function __construct()
   {
       parent::__construct();
       $this->admin = new Admin_Model();
       $this->message = new Message_Model();
       $this->session = Session::instance();
       $this->current_time = date('Y-m-d H:i:s');
       $this->post = new Post_Model();
   }
   public function index()
   {
       $this->checklogin();
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/content');
       $view->render(true);
   }
   public function register()
   {
       echo "register sayfası";
   }
   
   public function adminlogin()
   {
       $login_view = View::factory('admin/login');
       $login_view->action = url::site('Admin/admin/login','http');
       $login_view->render(true);
   }


   public function login()
   {    
       $this->session->set('admin',$this->input->post());
       $email = $this->input->post('email');
       $password = md5($this->input->post('password'));
      
       

       if(!$this->admin->exist_admin($email, $password))
            url::redirect('Admin/admin/adminlogin', 301);
              // echo 'test1';
       else
             $user_id = $this->admin->get_admin_data ('user_id', 'email', $email);
             print_r($user_id);
             $username = $this->admin->get_admin_data ('username', 'email', $email);
             $role_id = $this->admin->get_admin_data ('role_id', 'email', $email);
            $this->session->set(array('user_id' =>$user_id[0]->user_id,'username' =>$username[0]->username,'role_id' =>$role_id[0]->role_id));
            url::redirect('/home/', 301);
            // echo 'test2';
        
   }
   public function logout()
   {
       $this->session->delete('user_id');
       $this->session->delete('username');
       $this->session->delete('role_id');
       url::redirect('Admin/admin', 301);
   }
   private function checklogin()
   {
       $user_id = $this->session->get('user_id');
       $username = $this->session->get('username');
       $role_id = $user_id = $this->session->get('role_id');
       if(empty($user_id) || empty($username) || empty($role_id))
       {  
         
           url::redirect('/home/', 301);
       }
       
           
   }
   public function newpost()
   {
        $this->checklogin();
        $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/newpost');
       $view->content->action = url::site('Admin/admin/addpost','http');
       $view->render(true);
   }
   public function newmember()
   {
       $this->checklogin();
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/newmember');
       $view->content->action = url::site('Admin/admin/addmember','http');
       $view->render(true);
   }
   
   public function addpost()
   { 

       
       $this->session->set('newpost',$this->input->post());
       if($this->session->get('role_id') == 1)
       {
            $status = 1; // Editör yazı yazıyor.
       $comment_status = 1; // default hepsinde böyle.
       $comment_count = 0; // default.
       $type = 1; // Editör type = 1.
       }
       else
       {
            $status = 0; // Editör yazı yazıyor.
       $comment_status = 1; // default hepsinde böyle.
       $comment_count = 0; // default.
       $type = $this->session->get('role_id'); // Editör type = 1.
       }
      
       // user kontrol gelecek
       // 
       // ön resim yükleniyor : 
       
       
       
 
	
	
       $data = array
       (
           'user_id' => $this->session->get('user_id'),
           'subtitle' => $this->input->post('subtitle'),
           'title' => $this->input->post('title'),
           'content' => $this->input->post('content'),
           'status' =>$status,
           'comment_status' =>$comment_status,
           'post_date' =>  $this->current_time,
           'comment_count' => $comment_count,
           'type' => $type,
           'read_count' =>0
           
       );
       
       // Yazı ekleniyor : 
       $add = $this->post->add_post($data);
       
       if ($add)
       {
         
       
       
       
       $filenamexxl = upload::save('image',$this->post->post_id.'-xxl.jpg');
           Image::factory($filenamexxl)
		->resize(280, 280, Image::AUTO)
		->save(DOCROOT.'static/pictures/'.  basename($filenamexxl));
       unlink($filenamexxl);
       
       
       
       
          $category = array
           (
              'category_id' => $this->input->post('category'),
              'post_id' => $this->post->post_id
             
           );
          $this->post->add_category_to_post($category);
          $tags = array
          (
              'post_id' =>$this->post->post_id,
              'tags' => $this->input->post('tags')
          );
          $this->post->add_tags_to_post($tags);
          url::redirect('Admin/admin/managemyposts', 301);
       }
       else
       {
             echo 'hata';
       }
         
   }
   
   public function managemyposts()
   {
       
       $this->checklogin();
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/managemyposts');
       $user_id = $this->session->get('user_id');
       
       $view->content->my_posts = $this->post->get_my_posts($user_id);
       $view->render(true);
   }
   public function deletepost($post_id)
   {
       if($this->post->delete_post($post_id))
               url::redirect('Admin/admin/managemyposts', 301);
       
   }
   public function closepostcomments($post_id)
   {
       $this->post->change_post_comment_status(0, $post_id);
       url::redirect('Admin/admin/managemyposts', 301);
   }
   public function postpositions()
   {
       $this->checklogin();
       
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/postpositions');
       $view->content->blogger_posts = $this->post->get_bloggers_posts();
       $view->content->profs_posts = $this->post->get_profs_posts();
       $view->render(true);
   }
   public function changepostposition($post_id,$position)
   {
       
       $data = array
       (
           'post_id'=>$post_id,
           'position' =>$position
       );
       $this->post->add_post_position($data);
       url::redirect('Admin/admin/postpositions', 301);
   }
   public function unapprovedposts()
   {
       $this->checklogin();
       
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/unapprovedposts');
       $view->content->unapproved_posts = $this->post->get_unapproved_posts();
    
       $view->render(true);
   }
   public function readpost($post_id)
   {
       $this->checklogin();
       
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/readpost');
       $view->content->read_posts = $this->post->browse_post($post_id);
      // print_r($this->post->browse_post($post_id));
      $view->render(true);
   }
   public function approvepost($post_id,$user_id)
   {
       $this->session->set('approvepost',$this->input->post());
       
       if($this->input->post('status') == 0)
       {
           $title = $post_id.' nolu yazınız onaylanmadı';
           $message_data = array
            (
           'from' =>$this->session->get('user_id'),
           'to'   => $user_id,
           'title' => $title,
           'content' =>$this->input->post('message'),
           'date' => $this->current_time,
           'status' => 0,
           'type' =>1
           
            );
           $this->message->new_message($message_data);
           url::redirect('Admin/admin/unapprovedposts', 301);
       }
       else
       {
           $title = $post_id.' nolu yazınız Ceronimo editörleri tarafından yayınlanmaya layık görüldü';
           $message_data = array
            (
           'from' =>$this->session->get('user_id'),
           'to'   => $user_id,
           'title' => $title,
           'content' =>$this->input->post('message'),
           'date' => $this->current_time,
           'status' => 1,
           'type' =>1
           
            );
           $this->post->change_post_status(1, $post_id);
           $this->message->new_message($message_data);
           url::redirect('Admin/admin/unapprovedposts', 301);
       }
               
               
   }
   
   public function editpost($post_id)
   {
       $this->checklogin();
       
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/editpost');
       $view->content->read_posts = $this->post->browse_post($post_id);
       $view->render(true);
     
       
       
   }
   public function postedit()
   {
       $this->session->set('editpost',$this->input->post());
       echo $this->input->post('content');
       $update_data = array
       (
           'title' => $this->input->post('title'),
           'subtitle' => $this->input->post('subtitle'),
           'content' =>$this->input->post('content')
       );

   
      if($this->post->update_post($update_data, $this->input->post('post_id')))
      {
          url::redirect('Admin/admin/managemyposts', 301);
      }
       
   }
   public function relatedpost()
   {
       $view = new View('admin/index');
       $view->left = new View('admin/sol');
       $view->right = new View('admin/sag');
       $view->content = new View('admin/related_post');
       $view->content->read_posts = $this->post->get_all_posts();
       $view->render(true);
   }
   public function add_related()
   {
       $data = array
       (
           'main_related' => $this->input->post('post1'),
           'post_id' => $this->input->post('post2')
       );
       if($this->post->add_related($data))
              url::redirect('Admin/admin/relatedpost', 301); 
   }
   
   
    
    
}
?>
