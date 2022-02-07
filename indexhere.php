<?php

        require 'figura.php';
        require 'cuadrado.php';
        require 'triangulo.php';
//asignacion de variables
        $cuadrado = new Cuadrado(4, 3);
        $triangulo = new Triangulo(3, 6);
//calculo de perimetro
        echo 'Eduardo Barranco Agular';
        echo '<br />';
        echo 'Perimetro del Cuadrado: '.$cuadrado->perimetro();
        echo '<br />';
        echo 'Perimetro del triangulo: '.$triangulo->perimetro();