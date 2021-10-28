<?php
namespace Ritesh\Firstmodule\Model;
class CarsShowroom
{
   public $carsList;

   /**
    * Argument1 constructor.
    * @param array $carsList
    */
   public function __construct(array $carsList = [])
   {
       $this->carsList = $carsList;
   }

   public function getArticles()
    {
        var_dump($this->carsList);
        exit();

        return 'getArticles function of the Block class called successfully';
    }
}