<?php
namespace Tmjp;

class Brand 
{
    protected $brand;
    
        public function __construct(Cars $brand)
        {
            $this->brand = $brand; 
        }    
    
        public function show()
        {
            return $this->brand->brand();
        }      
}