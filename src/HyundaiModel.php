<?php
namespace Tmjp;

use Tmjp\Hyundai;

class HyundaiModel extends Hyundai
{
   protected $model;

   public function __construct($model)
   {
   $this->model = $model; 
   } 
   public function showModel()
   {
       return $this->model;
   }
  
}