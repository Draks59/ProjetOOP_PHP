<?php
namespace Core\Auth;

use Core\Database\MySqlDatabase;

Class DBAuth {

    private $db;
    public function __construct(MySqlDatabase $db){
        $this->db = $db;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        var_dump($user);
    }

    public function logged(){
       return isset($_SESSION['auth']);
    }
}