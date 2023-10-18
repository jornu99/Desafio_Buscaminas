<?php

class Buscaminas
{
    public $id;
    public $tabVisible;
    public $tabOculto;
    public $tam;
    public $jugadorId;
    public $terminado;
    public $estado;

// ----------------------------------------------------------
    public function __construct()
    {
        $this->id = 0;
        $this->tabVisible = [];
        $this->tabOculto = [];
        $this->tam = 0;
        $this->jugadorId;
        $this->terminado = false;
        $this->estado = 0;
    }

// ----------------------------------------------------------
    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

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
        return '{ID: ' . $this->id . 'Tamaño: ' . $this->tam . ', Tablero: ' . print_r($this->tabOculto) . '}';
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

    public function addMinas($mina)
    {
        while ($mina > 0 && $mina < $this->tam) {
            $azar = rand(0, count($this->tabOculto) - 1);

            if ($this->tabOculto[$azar] === 0) {
                $this->tabOculto[$azar] = '*';
                $mina--;
            }
        }

        return $this->tabOculto;
    }

    public function addPistas()
    {
        for ($i = 0; $i < count($this->tabOculto); $i++) {
            if ($this->tabOculto[$i] != '*') {
                if ($this->tabOculto[$i - 1] === '*' && $this->tabOculto[$i + 1] === '*') {
                    $this->tabOculto[$i] = 2;
                }

                if ($this->tabOculto[$i - 1] === '*' || $this->tabOculto[$i + 1] === '*') {
                    $this->tabOculto[$i] = 1;
                }
            }
        }
    }

    public function destaparCasilla($pos)
    {
        if($this->tabVisible[$pos] === 'X') {
            $this->tabVisible[$pos] = $this->tabOculto[$pos];
        }
    }

    public function estadoPartida()
    {
        $casilla = 0;
        $mina = 0;

        for ($i = 0; $i < count($this->tabOculto); $i++) {
            if ($this->tabOculto[$i] === '*') {
                $mina++;
            }
        }

        for ($i = 0; $i < count($this->tabOculto); $i++) {
            if ($this->tabOculto[$i] !== '*') {
                $casilla++;
            }
        }

        if (in_array('*', $this->tabVisible)) {
            $this->terminado = true;
            $this->estado = -1;
        }

        if ($casilla === count($this->tabOculto) - $mina) {
            $this->terminado = true;
            $this->estado = 1;
        }

        return $this->estado;
    }
}