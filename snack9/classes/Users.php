<?php 

/**
 * Create a User calls obj
 */
class User {
    private $username;

    public function __construct($username){
        $this -> username = $username;
    }

    /**
     * get the class username istance
     *
     * @return void
     */
    public function getUsername(){
        return $this -> username;
    }

    /**
     * Set the call istance username
     *
     * @param [string] $username
     * @return void
     */
    public function setUsername($username){
        return $this -> username = $username;
    }
}

?>