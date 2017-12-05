<?php
namespace Tmjp;
use Tmjp\Cars;
use Tmjp\Model;
use Tmjp\Brand;
use Tmjp\Interfaces\Wheels;
use Tmjp\Interfaces\Cars as CarContract;
use Tmjp\Traits\Transmission;

class Toyota extends Cars
{     
    protected $brand;

    public function brand()
    {
        return 'Toyota';
    }
    public function wheels()
    {
        return '4';
    }
    public function transmission()
    {
        return 'MT';
    }
    public function seats()
    {
        return '6';
    }
    public function entry()
    {
        return 'with Key';
    }       
}