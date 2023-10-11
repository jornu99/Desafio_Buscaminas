<?php

class Buscaminas
{
    public $tabVisible;
    public $tabOculto;
    public $tam;
    public $jugadorId;
    public $terminado;
    public $estado;

// ----------------------------------------------------------
    public function __construct($tam, $jugadorId)
    {
        $this->tabVisible = [];
        $this->tabOculto = [];
        $this->tam = $tam;
        $this->jugadorId = $jugadorId;
        $this->terminado = false;
        $this->estado = 0;
    }

// ----------------------------------------------------------
    public function getTabVisible()
    {
        return $this->tabVisible;
    }

    public function setTabVisible($value)
    {
        $this->tabVisible = $value;
    }

    public function getTabOculto()
    {
        return $this->tabOculto;
    }

    public function setTabOculto($value)
    {
        $this->tabOculto = $value;
    }

    public function getTam()
    {
        return $this->tam;
    }

    public function setTam($value)
    {
        $this->tam = $value;
    }

    public function getJugadorId()
    {
        return $this->jugadorId;
    }

    public function setJugadorId($value)
    {
        $this->jugadorId = $value;
    }

    public function getTerminado()
    {
        return $this->terminado;
    }

    public function setTerminado($value)
    {
        $this->terminado = $value;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($value) {
        $this->estado = $value;
    }

// ----------------------------------------------------------
    public function __toString()
    {
        return '{Tamaño: ' . $this->tam . ', Tablero: ' . print_r($this->tabOculto) . '}';
    }

// ----------------------------------------------------------
    public function iniciarTablero($tam)
    {
        $this->tabVisible = array_fill(0, $tam, 'X');

        return $this->tabVisible;
    }

    public function iniciarTableroOculto()
    {
        $this->tabOculto = array_fill(0, count($this->tabVisible), 0);

        return $this->tabOculto;
    }
    
}

