<?php

require 'flight/Connexion.php';
require 'flight/Flight.php';

Flight::before('start', function(&$params, &$output){
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');
});

Flight::route('/general',function () {

        // header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        // header('Access-Control-Allow-Headers: Content-Type');
        // header('Content-Type: application/json');

        $pdo = Connexion::connect();
        $query = $pdo->query('SELECT * FROM statsEquipeGeneralGeneral');

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        Flight::json($result);
    }
);

Flight::route('/attaque',function () {

    $pdo = Connexion::connect();
    $query = $pdo->query('SELECT * FROM statsEquipeAttaqueGeneral');

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($result);
}
);

Flight::route('/defense',function () {

    $pdo = Connexion::connect();
    $query = $pdo->query('SELECT * FROM statsEquipeDefenseGeneral');

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($result);
}
);

Flight::route(
    '/general/@path',
    function ($path) {

        $pdo = Connexion::connect();

        switch ($path) {
            case 'general':
                $query = $pdo->query('SELECT * FROM statsEquipeGeneralGeneral');
                break;
            case 'domicile':
                $query = $pdo->query('SELECT * FROM statsEquipeGeneralDomicile');
                break;
            case 'exterieur':
                $query = $pdo->query('SELECT * FROM statsEquipeGeneralExterieur');
                break;
            default:
                break;
        }

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        Flight::json($result);
    }
);

Flight::route('/attaque/@path', function ($path) {
    $pdo = Connexion::connect();

    switch ($path) {
        case 'general':
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueGeneral');
            break;
        case 'domicile':
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueDomicile');
            break;
        case 'exterieur':
            $query = $pdo->query('SELECT * FROM statsEquipeAttaqueExterieur');
            break;
        default:
            break;
    }

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($result);
});

Flight::route('/defense/@path', function ($path) {
    $pdo = Connexion::connect();

    switch ($path) {
        case 'general':
            $query = $pdo->query('SELECT * FROM statsEquipeDefenseGeneral');
            break;
        case 'domicile':
            $query = $pdo->query('SELECT * FROM statsEquipeDefenseDomicile');
            break;
        case 'exterieur':
            $query = $pdo->query('SELECT * FROM statsEquipeDefenseExterieur');
            break;
        default:
            break;
    }

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    Flight::json($result);
});

Flight::start();
