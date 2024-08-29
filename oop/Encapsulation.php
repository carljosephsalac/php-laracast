<?php

class User 
{
    // properties
    public $name;
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

    // setter
    public function setCredentials($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    // getter
    public function getEmail()
    {
        return $this->email;
    }

    // getter
    public function getPassword()
    {
        return $this->password;
    }
}

echo "<h1>ENCAPSULATION</h1>";

$user = new User("Carl Joseph Salac");
$user->setCredentials("salac@gmail.com", "12345678");
echo "
    {$user->greet()}
    Your Email : {$user->getEmail()} <br>
    Your Password : {$user->getPassword()} <br> <br>
";

$user1 = new User("John Doe");
$user1->setCredentials('johndoe@gmail.com', 'password');
echo "
    {$user1->greet()}
    Your Email : {$user1->getEmail()} <br>
    Your Password : {$user1->getPassword()} <br> <br>
";

?>