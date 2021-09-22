<?php
namespace Ritesh\Firstmodule\Block\Catalog\Product;
 
class View extends \Magento\Catalog\Block\Product\View
{
    /**
     * Retrieve current product model
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {

       // $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/Error.log');
       // $logger = new \Zend\Log\Logger();
       // $logger->addWriter($writer);
       // $logger->info('data');
       // $logger->info(print_r($data, 1));
        // logging to test override    s
        // $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        // $logger->debug('Block Override Test');
        
        if (!$this->_coreRegistry->registry('product') && $this->getProductId()) {
            $product = $this->productRepository->getById($this->getProductId());
            $this->_coreRegistry->register('product', $product);
        }
        return $this->_coreRegistry->registry('product');
    }
}
?>
