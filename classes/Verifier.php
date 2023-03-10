<?php
class Verifier
{
    public static function synthaxeEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    public  static function  doublonEmail($email)
    {

        require('src/connexion.php');
        $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? ');
        $requete->execute([$email]);
        $user = $requete->fetch();

        if ($user) {
            return true;
        } else {
            return false;
        }
    }
}
