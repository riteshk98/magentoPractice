<?php
namespace Ritesh\Firstmodule\Model;
class Cars
{
   public $cars;
   public function __construct(array $cars = [])
   {
       $this->cars = $cars;
   }
}