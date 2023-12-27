<?php

class Database {

    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=8889;dbname=elden', 'root', 'root'); 
    }

    public function preventDuplication(string $mail) 
    {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT * FROM elden_clients WHERE mail_client = ?');
            $pdoStatement->bindValue(1, $mail, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                $response = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                return $response;
            } else {
                echo 'Une erreur est survenue';
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function userInscription(string $mail, string $password, string $pseudo, string $avatar) 
    {
        try {
            $pdoStatement = $this->pdo->prepare('INSERT INTO elden_clients VALUES(?,?,?,?)');
            $pdoStatement->bindValue(1, $mail, PDO::PARAM_STR);
            $newPass = password_hash($password, PASSWORD_BCRYPT);
            $pdoStatement->bindValue(2, $newPass, PDO::PARAM_STR);
            $pdoStatement->bindValue(3, $pseudo, PDO::PARAM_STR);
            $pdoStatement->bindValue(4, $avatar, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                echo '<p>Votre compte client a bien été créé</p>';
                echo '<p>Veuillez vous connecter avec vos informations <a href="../">ici</a></p>';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function userConection(string $mail, string $password) 
    {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT * FROM elden_clients WHERE mail_client = ?');
            $pdoStatement->bindValue(1, $mail, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Elden_Clients');
            if($pdoStatement->execute()) {
                $user = $pdoStatement->fetch();
                if(password_verify($password, $user->getPassword())) {
                    $_SESSION['userIdentity'] = $user->getMail();
                    header('Location: ../index.html');
                } else {
                    echo 'Votre mot de passe est incorrect, veuillez réessayer';
                }
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function displayUserInformations(string $mail)
    {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT pseudo, avatar FROM elden_clients WHERE mail_client = ?');
            $pdoStatement->bindValue(1, $mail, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Elden_Clients');
            if($pdoStatement->execute()) {
                $user = $pdoStatement->fetch();
                echo '<h1 class="title">'.$user->getPseudo().'</h1>';
                echo '<img src="Medias/'.$user->getAvatar().'" alt="Avatar du client" class="avatar-client">';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function submitStarNotation(string $identity, int $note) 
    {
        try {
            $pdoStatement = $this->pdo->prepare('INSERT INTO notation_stars VALUES(?,?)');
            $pdoStatement->bindValue(1, $identity, PDO::PARAM_STR);
            $pdoStatement->bindValue(2, $note, PDO::PARAM_INT);
            if($pdoStatement->execute()) {
                echo 'Votre note a bien été prise en compte';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}