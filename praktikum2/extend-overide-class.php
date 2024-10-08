<?php

class User
{
    var $firstName;
    var $lasName;
    var $username;

    function fullName()
    {
        return $this->firstName . " " . $this->lasName;
    }
}

class Customer extends User
{
    var $city;
    var $county;

    function location()
    {
        return $this->city . ' ' . $this->county;
    }

    function fullname()
    {
        return $this->firstName . ' ' . $this->lasName . ' (customer)';
    }
}

$c = new User();
$c->firstName = "Usnida";
$c->lasName = "Faradila";
// $c->city = "bali";
// $c->county = "indonesia";

echo $c->fullName()  . "<br>";
// echo $c->location()  . "<br>";


$c = new Customer();
$c->firstName = "Rafi";
$c->lasName = "Akmal";
$c->city = "bali";
$c->county = "indonesia";

echo $c->fullName()  . "<br>";
echo $c->location()  . "<br>";


if (is_subclass_of($c, "User")) {
    echo "Instance Customer merupakan subclass User <br>";
}

$parents = class_parents($c);
echo implode(", ", $parents);
