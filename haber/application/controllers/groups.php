<?php defined('SYSPATH') OR die('No direct access allowed.');


class Groups_Controller extends Controller 
{
    public $session;
    public $groups;
    public $post;
    public $popular_post;
     public function __construct()
    {
        parent::__construct();
        $this->session = Session::instance();
        $this->groups = new Groups_Model();
        $this->post = new Post_Model();
        $this->popular_posts = $this->post->get_popular_posts();
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
    /**
     * Anasayfaya yada profil sayfasına yönlendirilir.
     */
    public function index()
    {
        url::redirect('/home/',301);
    }
    /**
     * Yeni group oluştururken çağrılacak view
     */
    public function newgroup()
    {   
        $this->checklogin();
        $view = new View('othermain');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('groups/newgroup');
        $view->footer = new View('footer');
        $view->render(true);
    }
    /**
     * Grup oluştururken viewdan gelen postları işleyip model a gönderir.
     */
    public function add_group()
    {
      $data = array
        (
          'group_name'=>$this->input->post('group_name'),
          'group_owner'=>$this->session->get('user_id'),
          'group_title'=>$this->input->post('group_title')
        );
      $add = $this->groups->add_group($data);
    
           $groupimage = upload::save('group_image',$this->input->post('group_name').'-image.jpg');
           Image::factory($groupimage)
		->resize(105, 105, Image::AUTO)
		->save(DOCROOT.'static/pictures/groups'.  basename($groupimage));
           echo $groupimage;
     //  unlink($groupimage);
      
    }
    /**
     * Grubu takip et
     */
    public function followgroup($group_id,$user_id)
    {
        
    }
    /**
     * Gruptan Çık
     */
    public function unfollowgroup($group_id,$user_id)
    {
        
    }
    /**
     * Grup adını değiştiriken çağrılacak 
     */
    public function newgroupname()
    {
        
    }
    /**
     * Grup adından gelen veriyi işleyecek
     */
    public function changegroupname()
    {
        
    }
    /**
     * grup resmini değiştirirken çağrılacak
     */
    public function newgroupimage()
    {
        
    }
    /**
     * grup resminden gelen veriyi işleyecek.
     */
    public function changegroupimage()
    {
        
    }
    /**
     * grup başlığını değiştirirken çağrılacak.
     */
    public function newgrouptitle()
    {
        
    }
    /**
     * Grup başlığından gelen veriyi işleyecek.
     */
    public function changegrouptitle()
    {
        
    }
    public function profile($group_name)
    {
        $view = new View('index');
        $view->top = new View('top');
        $view->header = new View('header');
        $view->left = new View('groups/left');
        $view->center = new View('groups/center');
        $view->right = new View('right');
        $view->footer = new View('footer');
        $view->left->groupname = $group_name;
        $group_profile_data = $this->groups->get_group_data(array('group_id,group_name,group_owner,group_title'), 'group_name', $group_name);
        $view->left->profile_data = $group_profile_data;
        $view ->center->group_name = $group_name;
       
        $view->right->popular_posts = $this->popular_posts;
        
       $view->render(true);
    
       $view->render(true);
    }
}

?>
