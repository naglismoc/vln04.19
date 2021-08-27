<?php


class Plant{
    
    public $id;
    public $name;
    public $is_yearling;

    function __construct($name = "", $is_yearling = false){
        $this->name = $name;
        $this->is_yearling = $is_yearling;
    }

    function intro(){
        echo "<br>I am ".$this->name." plant, and i am".$this->is_yearling."<br>";
    }
    
    public static function classDescription()
    {
       echo "<br> sita klase skirta aprasyti augalu rusims<br>";
    }


}

?>