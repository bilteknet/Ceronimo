<?php defined('SYSPATH') OR die('No direct access allowed.');

class Members_Controller extends Controller
{
    
    public $session;
    public $auth;
    public $member;
    public function __construct()
    {
        parent::__construct();
         $this->session = Session::instance();
         $this->auth = new Auth;
    }
    
    public function check_login()
    {
        if (!$this->auth->logged_in('admin')){
	     $this->session->set("requested_url","/".url::current()); 
	     url::redirect('/home/');
        }else{
	    $this->member = $auth->get_user(); 
	}
    }
    public function register_writer()
    {
       $this->input->post('email');
    $username =$this->input->post('username');
    $password = $this->input->post('pass');
    $email =$this->input->post('email');
    $birthday = $this->input->post('birthday[d]').'/'.$this->input->post('birthday[m]').'/'.$this->input->post('birthday[y]');
    $members = ORM::factory('user');
    $members->username = $username;
    $members->password = Auth::instance()->hash_password($password);
    $members->email = $email;
    $members->first_name = $this->input->post('first_name');
    $members->last_name = $this->input->post('last_name');
    $members->twitter = $this->input->post('twitter');
    $members->friendfeed = $this->input->post('friendfeed');
    $members->country = $this->input->post('country');
    $members->city = $this->input->post('city');
    $members->web = $this->input->post('website');
    $members->gender = $this->input->post('gender');
    $members->marital_status = $this->input->post('medeni');
    $members->brithday = $birthday;
    
    
    if ($members->add(ORM::factory('role', 'yazar')) AND $members->save()) {
 
      
        $this->auth ->login($username, $password);
 
             
        url::redirect('/home');
    }
    }
    
    public function login()
    {
        $post = array('username'=>'onurbaran','password'=>'070171');
          if(ORM::factory('user')->login($post))
                  echo 'login OK';
          else
              echo 'olmadı';
        
    }
        public function onur()
        {
            session_destroy();
        }
    
    
}
?>
