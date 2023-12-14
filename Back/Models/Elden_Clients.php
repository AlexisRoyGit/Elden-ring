<?php

class Elden_Clients {
    private string $mail_client;
    private string $password;
    private string $pseudo;
    private string $avatar;

    public function getMail(): string 
    {
        return $this->mail_client;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPseudo(): string 
    {
        return $this->pseudo;
    }

    public function getAvatar(): string 
    {
        return $this->avatar;
    }

}