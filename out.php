<?php
class user{
    public $name;
    public $age;
    public $score;


    public function user(){
        $this->name = 'Андрей';
        $this->age = 20;
        $this->score = array(5,7,1);
    }
}

$user1 = new user();
$send_json = json_encode($user1);
echo $send_json;