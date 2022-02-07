<?php

class figura {
    protected $lado;
    
    public function __construct($lado)
    {
        $this->lado = $lado; 
    }
    public function perimetro()
    {
    return 'Figura - Perimetro del '.get_called_class().' es: '.(4 * $this->lado);  
    }
    public function area()
    {
    return 'Figura - Perimetro del '.get_called_class().' es: '.pow($this->lado,2);  
    }
}