<?php

class User 
{
    // properties
    public $name;
    public $email;
    public $password;

    // constructor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // method
    public function greet()
    {
        return "Welcome $this->name <br>";
    }
}

echo "<h1>CLASS, OBJECT, INSTANTIATION, CONSTRUCTOR</h1>";

// instantiation
$user = new User("Carl Joseph Salac", "salaccarljoseph@gmail.com", "12345678");
echo "
    {$user->greet()}
    Your Email : $user->email <br>
    Your Password : $user->password <br>
";

echo '<br>';

// instantiation
$user1 = new User("John Doe", "johndoe@gmail.com", "password");
echo "
    {$user1->greet()}
    Your Email : $user1->email <br>
    Your Password : $user1->password <br>
";

?>