<?php

require_once (__DIR__ . '../class/buscaminas.php');
require_once (__DIR__ . '../class/jugador.php');

class Factoria {
    public static function crearJugador($id, $password, $email) {
        return new Jugador($id, $password, $email);
    }

    public static function crearBuscaminas($tam) {
        return new Buscaminas($tam);
    }
}
