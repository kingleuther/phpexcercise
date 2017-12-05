<?php
namespace Tmjp;
use Tmjp\Cars;
use Tmjp\Interfaces\Cars as CarContract;
use Tmjp\Traits\OwnCarTraits;

class OwnCar implements CarContract
{     
    use OwnCarTraits;
    public function brand()
    {

    }
    public function transmission()
    {
        
    }    

}