<?php
/**
 *
 *
 *
 *
 */

class Example extends Mage_Core_Block_Abstract
{


    protected $_partlet;

    public function _construct()
    {
        parent::_construct();

        if ($this->hasData('partlet')) {
            $this->setPartlet($this->getData('partlet'));
        }
    }


    public function setPartlet($partlet)
    {
        $this->_partlet = $partlet;
    }

    public function getPartlet()
    {
        return $this->_partlet;
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {

        $silexApp = Mage::registry('silex_partlets');
        //return "<pre>haw haw</pre>";
        $partletObject = $silexApp['partlet']->get($this->getPartlet());
        /*
                Fatal error: Class 'p2ee\partletsMagentoBridge\PartletService' not found in 
            /srv/magento_common/.modman/partletsMagentoBridge/src/p2ee/partletsMagentoBridge/SilexProvider/PartletServiceProvider.php on line 20
            */
        $silexApp['partlet']->prepare($partletObject, ['content' => "<pre>haw haw</pre>"]);

        return $silexApp['partlet']->render($partletObject);
    }

} 