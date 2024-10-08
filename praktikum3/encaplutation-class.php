<?php

class User
{
    public $firstName;
    public $lasName;
    public $username;

    protected $regId = 1001;
    private $level = "User";

    function fullName()
    {
        return $this->firstName . " " . $this->lasName;
    }

    protected function sayProtected()
    {
        return "Hello protected";
    }

    private function sayPrivate()
    {
        echo "Hello private";
    }

    public function sayMe()
    {
        return $this->sayPrivate();
    }
}

class Customer extends User
{
    public function sayParent()
    {
        return $this->sayProtected();
    }
}

$u = new User;
$u->firstName = "User";
$u->lasName = "Class";

// echo $u->regId . '<br>';
// echo $u->level . '<br>';
echo $u->sayMe() . '<br>';
echo $u->fullName() . '<br>';
// echo $u->sayProtected() . '<br>';
// echo $u->sayPrivate() . '<br>';



$c = new Customer;
$c->firstName = "Rafi";
$c->lasName = "Akmal";

echo $c->fullName()  . "<br>";
echo $c->sayParent() . "<br>";
