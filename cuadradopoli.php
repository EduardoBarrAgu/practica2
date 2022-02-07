<?php

    class cuadrado extends figura{
        public function perimetro()
        {
        return 'Perimetro del '.get_called_class().' es: '.(4 * $this->lado); 
        }
        public function area()
        {
        return 'Area del '.get_called_class().' es: '.pow($this->lado,2); 
        } 
    }