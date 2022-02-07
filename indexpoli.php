<?php

        require 'figura.php';
        require 'cuadrado.php';
        require 'triangulo.php';
//asignacion de variables
        $cuadrado = new Cuadrado(4);
        $triangulo = new Triangulo(3);
//calculo de perimetro
        echo 'Eduardo Barranco Aguilar';
        echo '<br />';
        echo $cuadrado->perimetro();
        echo '<br />';
        echo $triangulo->perimetro();
        echo '<br />';
        echo '<br />';
        echo $cuadrado->area();
        echo '<br />';
        echo $triangulo->area();