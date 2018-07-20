<?php
/**
 * Created by PhpStorm.
 * User: magento
 * Date: 16.07.18
 * Time: 17:00
 */
namespace Mi\HelloWorldMVVM\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{
    public function getGoodbyeMessage() {

        return 'some string output';
    }

    protected function _prepareLayout()
    {
        $this->setMessage('Hello');
        $this->setName($this->getRequest()->getParam('name'));
    }




}