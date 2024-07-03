<?php 

/**
 * create a Membership class obj
 */
class Membership {
    private $benefits;

    public function __construct($benefits){
        $this -> benefits = $benefits;
    }

    /**
     * return benefits class instance
     *
     * @return void
     */
    public function getBenefits(){
        return $this -> benefits;
    }

    /**
     * set benefits class instance as a string
     *
     * @param [string] $benefits
     * @return void
     */
    public function setBenefits($benefits){
        return $this -> benefits = $benefits;
    }
}

?>