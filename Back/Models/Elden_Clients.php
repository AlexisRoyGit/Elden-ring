<?php

class Elden_Clients {
    private int $id_clients;
    private string $pseudo;
    private string $avatar;

    public function getId(): int 
    {
        return $this->id_clients;
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