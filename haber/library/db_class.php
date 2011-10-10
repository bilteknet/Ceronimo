<?php
/**14.06.2010
 * Basit olarak veritabanı işlemlerinin(şimdilik sadece mysql) yapıldığı sınıf
 *http://www.serpito.com/php-veritabani-sinifi-database-class/ adresinden alınıp,
 * bazı değişiklikler yapılmıştır.
 * hata mesajları eklenecek,hata çıktıları kontrol edilecek.
 * @author onur
 */
class Database {
    public $host ;
    public $user ;
    public $password ;
    public $database ;
    public $conn;

    public function  __construct($user,$host,$password,$database)
    {
       
       $this->host = $host;
       $this->user = $user;
       $this->password = $password;
       $this->database = $database;
       $this->init();
    }
    public function init()
    {
         $this->conn = mysql_connect($this->host,$this->user,$this->password)
                or die ("Veritabanına bağlanılamadı");
        @mysql_query("SET NAMES 'utf8'");
        @mysql_query("SET CHARACTER SET 'utf8'");
        @mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
        $select_db = mysql_select_db($this->database)
                or die ("Veritabanı secilemedi ") ;
    }
    public function query($sql)
    {
        return mysql_query($sql);
    }
    public function fetch_array($result)
    {
        return mysql_fetch_array($result);
    }
    public function fetch_assoc($result)
    {
        return mysql_fetch_assoc($result);
    }
    public function num_rows($result)
    {
        return mysql_num_rows($result);
    }
    public function affected_rows()
    {
        return mysql_affected_rows();
    }
    public function free_result($result)
    {
        return mysql_free_result($result);
    }
    public function insert_id()
    {
        return mysql_insert_id();
    }
    public function result($result)
    {
        return mysql_result($result, 0);
    }
    public function close()
    {
        return mysql_close($this->conn);
    }
    public function getError()
    {
        return mysql_error();
    }

}
?>
