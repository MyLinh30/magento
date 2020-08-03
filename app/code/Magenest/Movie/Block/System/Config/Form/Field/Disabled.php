<?php

namespace Magenest\Movie\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Disabled extends \Magento\Config\Block\System\Config\Form\Field
{

    private $movieCollection;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [],\Magenest\Movie\Model\ResourceModel\MageMovie\Collection $movieCollection)
    {
        parent::__construct($context, $data);

        $this->movieCollection = $movieCollection;
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        $recordsOfMovie = $this->movieCollection->countRecords();

        $element->setData(['readonly'=>'true','value'=>$recordsOfMovie]);
        return $element->getElementHtml();
    }
}