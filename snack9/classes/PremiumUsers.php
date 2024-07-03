<?php 

require_once __DIR__ . "/Users.php";

/**
 * Create a PremiumUser class obj that extend User class
 */
class PremiumUser extends User {
    private $password;

    public function __construct($username, $password){
        parent::__construct($username);
        $this -> password = $password;
    }

    /**
     * Return class istance password
     *
     * @return void
     */
    public function getPassword(){
        return $this -> password;
    }

    /**
     * set class istance password as a string
     *
     * @param [string] $password
     * @return void
     */
    public function setPassword($password){
        return $this -> password = $password;
    }
}

?>