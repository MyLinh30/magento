<?php

namespace Packt\UICompo\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action
{
 public function execute()
 {
     //$this->_redirect('uicompo');
     $this->_forward('index');
 }
}