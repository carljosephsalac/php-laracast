<?php

abstract class User
{
    protected $name;
    protected $userRole;

    public function __construct($name, $userRole)
    {
        $this->name = $name;
        $this->userRole = $userRole;
    }

    // Abstract method (does not have a body)
    abstract protected function login();

    // regular method
    public function logout()
    {
        echo "$this->userRole $this->name logged out <br>";
    }
}

class Client extends User
{
    public function login()
    {
        echo "$this->userRole $this->name logged in <br>";
    }
}

class Admin extends User
{
    public function login()
    {
        echo "$this->userRole $this->name logged in <br>";
    }
}

class SuperAdmin extends User
{
    public function login()
    {
        echo "$this->userRole $this->name logged in <br>";
    }
}

echo "<h1>ABSTRACTION</h1>";

$client = new Client('John Doe', 'Client');
$admin = new Admin('Carl Joseph', 'Admin');
$superAdmin = new SuperAdmin('Salac', 'Super Admin');

$client->login();
$admin->login();
$superAdmin->login();

echo '<br>';

$client->logout();
$admin->logout();
$superAdmin->logout();

?>