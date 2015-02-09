<?php
class user{
    public $name;
    public $age;
 
    public function user(){
        $this->name = 'Андрей';
        $this->age = 20;
    }
}

$user1 = new user();
$send_json = json_encode($user1);
echo $send_json;