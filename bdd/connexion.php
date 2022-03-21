<?php

function connect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=puissance;charset=utf8', 'root', 'root');
        return $db;
    } catch (PDOException $e) {
        print "Erreur de communication avec la base de donnée";
        die();
    }
}

?>