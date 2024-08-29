<?php

class User 
{
    // properties
    protected $name;
    private $email;
    private $password;

    // constructor
    public function __construct($name)
    {
        $this->name = $name;       
    }

    // method
    public function greet()
    {
        return "Welcome $this->name <br>";
    }

    public function setCredentials($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

class Client extends User 
{
    public $userRole;

    public function __construct($name, $userRole)
    {
        $this->userRole = $userRole;
        parent::__construct($name); // constructor of User
    }
}

class Admin extends User 
{
    public $userRole;

    public function __construct($name, $userRole)
    {
        $this->userRole = $userRole;
        parent::__construct($name); // constructor of User
    }
}

echo "<h1>INHERITANCE</h1>";

$client = new Client('John Doe', 'Student');
$client->setCredentials('johndoe@gmail.com', 'password');
echo "
    {$client->greet()}
    Email : {$client->getEmail()} <br>
    Password : {$client->getPassword()} <br>
    User Role : $client->userRole <br> <br>
";

$admin = new Admin('Carl Joseph', 'Admin');
$admin->setCredentials('carl@gmail.com', 'admin123');
echo "
    {$admin->greet()}
    Email : {$admin->getEmail()} <br>
    Password : {$admin->getPassword()} <br>
    User Role : $admin->userRole <br> <br>
";

?>