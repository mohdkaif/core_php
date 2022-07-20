<?php

class Fruits{
    public $name;
    public $color;

    public function set_name($name,$color){

        $this->name =$name; 
        $this->color=$color;
    }
    public function get_name(){
        
        return "this is ".$this->name . 'and color is'.$this->color;
    }

}

$newobj  = new Fruits();
//echo $newobj;
//echo serialize($newobj);
$newobj->set_name('Apple','Red');
echo $newobj->get_name();
var_dump($newobj instanceof Fruits);


 