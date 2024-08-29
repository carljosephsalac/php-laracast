<?php

class User
{
    public function userRole()
    {
        return 'Your are user';
    }
}

class Client extends User
{
    public function userRole()
    {
        return 'You are client!';
    }
}

class Admin extends User
{
    public function userRole()
    {
        return 'You are admin!';
    }
}

class SuperAdmin extends User
{
    public function userRole()
    {
        return 'You are super admin!';
    }
}

// accepts only object of User class
function showUserRole(User $user) 
{
    echo "{$user->userRole()} <br>";
}

$user = new User();
$client = new Client();
$admin = new Admin();
$superAdmin = new SuperAdmin();

echo "<h1>POLYMORPHISM</h1>";

showUserRole($user);
showUserRole($client);
showUserRole($admin);
showUserRole($superAdmin);

?>