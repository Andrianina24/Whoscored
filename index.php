<?php

use PgSql\Connection;

require 'flight/Flight.php';
require 'flight/autoload.php';

Flight::route('/', function () {
    // echo 'hello world!';

    // $bdd = mysqli_connect('localhost', 'root', '', 'win');
    // $sql = 'SELECT * FROM user';
    // $resultat = mysqli_query($bdd, $sql);
    // while ($donnees = mysqli_fetch_assoc($resultat))
    //     echo $donnees['name'];
    // if ($bdd->connect_error) {
    //     echo "error";
    // }

    // $psql=Connection::get()->connect();
    // $bdd=new StockDB($psql);
    // $bd=$bdd->all();
});

Flight::start();
