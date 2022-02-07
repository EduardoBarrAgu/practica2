<?php

  class triangulo extends figura{
    public function perimetro()
    {
    return 'Perimetro del '.get_called_class().' es: '.(3 * $this->lado); 
    }
    public function area()
    {
    return 'Area del '.get_called_class().' es: '.(sqrt(3) / 4) * pow($this->lado,2); 
    }
      
  }