<?php
namespace DluTwBootstrap\Form\Element\Line;

/**
 * Textarea line element
 * @package DluTwBootstrap
 * @copyright David Lukas (c) - http://www.zfdaily.com
 * @license http://www.zfdaily.com/code/license New BSD License
 * @link http://www.zfdaily.com
 * @link https://bitbucket.org/dlu/dlutwbootstrap
 */
class TextArea extends \Zend\Form\Element\TextArea
           implements \DluTwBootstrap\Form\Element\PlaceholderText
{

    /* ******************** METHODS ************************ */

    /**
     * Load default decorators
     * @return TextArea
     */
    public function loadDefaultDecorators() {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }
        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $getId = function(\Zend\Form\Decorator $decorator) {
                return $decorator->getElement()->getId() . '-element';
            };
            $this->addDecorator('ViewHelper')
                //->addDecorator('Errors')
                ->addDecorator('Label');
        }
        return $this;
    }

    /**
     * Sets the placeholder text
     * @param string $placeholderText
     */
    public function setPlaceholderText($placeholderText) {
        $this->setAttrib('placeholder', $placeholderText);
    }

    /**
     * Returns the placeholder text
     * @return string
     */
    public function getPlaceholderText() {
        $placeholderText    = $this->getAttrib('placeholder');
        return $placeholderText;
    }
}