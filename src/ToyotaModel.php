<?php
namespace Tmjp;

use Tmjp\Toyota;

class ToyotaModel extends Toyota
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