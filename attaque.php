<?php

require 'flight/Connexion.php';
require 'flight/Flight.php';

Flight::route('/attaque', function () {
    // Récupérer la valeur de la variable $path depuis l'URL
    $path = ltrim(parse_url(Flight::request()->url, PHP_URL_PATH), '/');

    switch ($path) {
        case 'general':
            $pdo = Connexion::connect();
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueGeneral');
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            Flight::json($result);
            break;
        case 'domicile':
            $pdo = Connexion::connect();
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueDomicile');
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            Flight::json($result);
            break;
        case 'exterieur':
            $pdo = Connexion::connect();
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueExterieur');
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            Flight::json($result);
            break;
        default:
            $pdo = Connexion::connect();
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueGeneral');
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            Flight::json($result);
            break;
    }
});

Flight::start();
