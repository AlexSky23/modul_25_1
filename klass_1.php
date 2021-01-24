<?php

class Family {
    public $surname = 'Miller';
    public $peopleCount = 3;
    public $city = 'London';
}

class Father extends Family {
    public $wife = 'Anna';
    public $age = 42;

    function Fishing ()
    {}
}

class Mother extends Family {
    public $husband = 'Bob';
    public $age = 38;

    function CookingFood ()
    {}
}

class Child extends Father {
    public $age = 8;
    public $sex = 'M';

    function Gaming ()
    {}

    function Hobby_Child ()
    {
        parent::Fishing();
    }
}