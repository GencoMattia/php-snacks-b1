<?php 

require_once __DIR__ . "/Users.php";
require_once __DIR__ . "/Membership.php";

/**
 * Create a PremiumUser class obj that extend User class
 */
class PremiumUser extends User {
    private $password;
    private $membership;

    public function __construct($username, $password, Membership $membership){
        parent::__construct($username);
        $this -> password = $password;
        $this -> membership = $membership;
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

    public function getMembership(){
        return $this -> membership;
    }
}

?>