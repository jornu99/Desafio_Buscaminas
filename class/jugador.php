<?php

class Jugador
{
    public $id;
    public $password;
    public $email;
    public $ganadas;
    public $perdidas;
    public $enCurso;
    public $verificado;

// ----------------------------------------------------------
    public function __construct($id, $password, $email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->email = $email;
        $this->ganadas = 0;
        $this->perdidas = 0;
        $this->enCurso = 0;
        $this->verificado = false;
    }

// ----------------------------------------------------------
    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getGanadas()
    {
        return $this->ganadas;
    }

    public function setGanadas($value)
    {
        $this->ganadas = $value;
    }

    public function getPerdidas()
    {
        return $this->perdidas;
    }

    public function setPerdidas($value)
    {
        $this->perdidas = $value;
    }

    public function getEnCurso()
    {
        return $this->enCurso;
    }

    public function setEnCurso($value)
    {
        $this->enCurso = $value;
    }

    public function getVerificado()
    {
        return $this->verificado;
    }

    public function setVerificado($value)
    {
        $this->verificado = $value;
    }

// ----------------------------------------------------------
    public function __toString()
    {
        return '{ID: ' . $this->id . ', Contraseña: ' . $this->password . ', Email: ' . $this->email . ', Ganadas: ' . $this->ganadas . ', Perdidas: ' . $this->perdidas . ', En curso: ' . $this->enCurso . ', Verificado: ' . $this->verificado . '}';
    }

// ----------------------------------------------------------
}
