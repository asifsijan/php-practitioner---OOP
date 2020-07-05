<?php

abstract class Team 
{

    
    protected $members = [];
    



    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }


}

class Individual extends Team {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


//$obj1 = new Team();

//$obj1->add('abc');
//$obj1->add('xyz');

$obj2 = new Individual('Asif');
$obj2->add('pqr');
$obj2->add('stu');

//var_dump($obj1->members());

var_dump($obj2->name());

var_dump($obj2->members());


 
?>