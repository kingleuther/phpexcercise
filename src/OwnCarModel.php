<?php
namespace Tmjp;

use Tmjp\OwnCar;
use Tmjp\Toyota;
use Tmjp\Cars;

class OwnCarModel extends OwnCar
{
   protected $model;
   protected $brand;

   public function __construct(Cars $toyota)
   {
   $this->toyota = $toyota;  
   }  
   public function showModel()
   {
       $model = $this->toyota->showModel();
       $brand = $this->toyota->brand();
       $wheels = $this->toyota->wheels();
       $transmission = $this->toyota->transmission();
       $seats = $this->toyota->seats();
       $entry = $this->toyota->entry();
       return ['model'=>$model,'brand'=>$brand,'wheels'=>$wheels,'transmission'=>$transmission,'seats'=>$seats,'entry'=>$entry];
   }
   
}