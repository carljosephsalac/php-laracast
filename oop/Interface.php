<?php

interface User
{
    public function login();
}

interface CanView
{
    public function view();
}

interface CanEdit
{
    public function edit();
}

class Admin implements User, CanView, CanEdit
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function login()
    {
        echo "$this->name logged in. <br>";
    }

    public function view()
    {
        echo "$this->name can view resource. <br>";
    }

    public function edit()
    {
        echo "$this->name can edit resource. <br>";
    }
}

echo "<h1>INTERFACE</h1>";

$admin = new Admin('Carl Joseph');
$admin->login();
$admin->view();
$admin->edit();

?>