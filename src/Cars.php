<?php
namespace Tmjp;
use Tmjp\Model;
use Tmjp\Brand;
use Tmjp\Interfaces\Wheels;
use Tmjp\Interfaces\Cars as CarContract;
use Tmjp\Traits\Transmission;

abstract class Cars
{     
 
    abstract protected function brand();
    public function wheels()
    {
    }
    public function transmission()
    {
    }
    public function seats()
    {
        return '4';
    } 
    public function entry()
    {
        return 'Keyless';
    }     
    
}