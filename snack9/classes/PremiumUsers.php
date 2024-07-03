<?php 

require_once __DIR__ . "/Users.php";
require_once __DIR__ . "/Membership.php";

/**
 * Create a PremiumUser class obj that extend User class
 */
class PremiumUser extends User {
    private $password;
    private $benefits;

    public function __construct($username, $password, $benefits){
        parent::__construct($username);
        $this -> password = $password;
        $this -> benefits = $benefits;
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

    public function getBenefits(){
        return $this -> benefits;
    }
}

?>