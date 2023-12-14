<?php

namespace ToDoList\System\Models;

use Exception;
use ToDoList\System\Database\Connection;

class User
{
    private $id;
    private $username;
    private $email;  
    private $password;
    
    //Validatiors:
    protected function isStringValid(string $string) : bool
    {
        if (!strlen($string) > 0) {
            return false;
        }
        return true;
    }

    protected function isEmailValid(string $email) : bool 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    //Setters:
    public function setUsername(string $username) : void
    {
        if (!$this->isStringValid($username)) {
            throw new Exception('Username cannot be empty.');
        }
        $this->username = $username;
    }
    
    public function setEmail(string $email) : void
    {
        if (!$this->isEmailValid($email)) {
            throw new Exception('Invalid email.');
        }
        $this->email = $email;
    }    

    public function setPassword(string $password) : void 
    {   
        if (!$this->isStringValid($password)){
            throw new Exception('Passowrd cannot be empty.');
        }
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    } 

    public function addUser() : bool 
    {
        $conn = Connection::connection();
        $query = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($query);                
        return $stmt->execute([
            ':username' => $this->username,
            ':email' => $this->email,
            ':password' => $this->password
        ]);
    }
}
