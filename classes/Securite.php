<?php
class Securite
{
    public static function chiffrer($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
