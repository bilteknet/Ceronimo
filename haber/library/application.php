<?php
/**
 * Bütün Uygulamalar bu sınıfı extends alır.
 */
class Application
{
    public $db;
    public function __construct()
    {   
       
        require_once  'db_class.php';
        $this->db = new Database('root', 'localhost', 'bilteknet7017', 'ceronimo2');
    }
}
?>
