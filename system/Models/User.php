<?php

namespace ToDoList\System\Models;

class User
{
    private $id;
    private $username;
    private $email;  
    private $password;

    //Construct:
    public function __construct(string $username, string $email, string $password) {        
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
    }

    //Password hashing:
    private function setPassword(string $password) : void {        
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }    

    private function isEmailValid(string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function addUser(int $id, string $username, string $email, string $password) {
        global $mysqli;
        $query = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        if ($stmt) {
            $stmt->bind_param('isss', $this->id, $this->username, $this->email, $this->password);
            $stmt->execute();
            $stmt->close();
        }
    }
}
