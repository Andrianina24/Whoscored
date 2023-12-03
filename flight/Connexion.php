<?php

declare(strict_types=1);

class Connexion{
    public static function connect(){
        try {
            // $pdo = new PDO('pgsql:host=localhost;dbname=statsfoot', 'postgres', ' ');
            $pdo = new PDO('pgsql:host=statsfoot-whoscored.a.aivencloud.com;port=18152;dbname=defaultdb', 'avnadmin', 'AVNS_aeFWdo2UpvnX7TFnlN8');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            
        } catch (PDOException $e) {
            echo 'La connexion a échoué : ' . $e->getMessage();
        }
    }
}
