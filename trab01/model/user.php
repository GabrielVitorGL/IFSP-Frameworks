<?php

class User
{
    private $users = [
        ['username' => 'professor', 'password' => '123', 'perfil' => 'professor'],
        ['username' => 'aluno', 'password' => '123', 'perfil' => 'aluno']
    ];

    public function getUser($username, $password)
    {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return $user;
            }
        }
        return null;
    }
}
