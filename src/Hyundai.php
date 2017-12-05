<?php
namespace Tmjp;
use Tmjp\Cars;
use Tmjp\Model;
use Tmjp\Brand;
use Tmjp\Interfaces\Wheels;
use Tmjp\Interfaces\Cars as CarContract;
use Tmjp\Traits\Transmission;

class Hyundai extends Cars
{     
    protected $brand;

    public function brand()
    {
        return 'Hyundai';
    }
    public function wheels()
    {
        return '4';
    }
    public function transmission()
    {
        return 'MT';
    }       
}