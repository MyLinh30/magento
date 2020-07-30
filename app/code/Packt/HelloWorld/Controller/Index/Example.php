<?php

namespace Packt\HelloWorld\Controller\Index;

class Example
{
    protected $title;

    public function execute()
    {
        echo $this->setTitle('Welcome');
        echo $this->getTitle();
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

}