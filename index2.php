<?php

class User {

public $name;

function setName($name){
$this->name = $name;
}

public function getName(){
return  $this->name;
}



}

$user1 = new User();
$user2 = new User();
$user3 = new User();
$user1->setName('Samira');
$user2->setName('Raful');
$user3->setName('Riya');

echo $user1->getName();
echo '<br/>';
echo $user2->getName();
echo '<br/>';
echo $user3->getName();


?>