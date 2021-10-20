<?php

namespace Ritesh\Firstmodule\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
   public function getStoreConfig()
       {
               return 'Helper Called';
       }
}