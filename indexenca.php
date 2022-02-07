<?php

    class Persona{
        public $nombre;
        public $correo;
        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }
    }

    class Usuario extends Persona{

    }
    $persona1 = new Persona("maicol", "mal@gmail.com");
    echo $persona1->correo;
    echo '<br />';
    echo '<br />';
    $usuario1 = new Usuario("maicol", "maicol@gmail.com");
    echo $usuario1->correo;
    ?>