<?php
/**
 * Form decorator definition
 *
 * @category Forms
 * @package Emagister_Form_Decorator_Twitter
 * @subpackage Bootstrap
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * Defines a decorator to wrap all the Bootstrap form elements
 *
 * @category Forms
 * @package Emagister_Form_Decorator_Twitter
 * @subpackage Bootstrap
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Decorator_Wrapper extends Zend_Form_Decorator_Abstract
{

    /**
     * Renders a form element decorating it with the Twitter's Bootstrap markup
     *
     * @param $content
     *
     * @return string
     */
    public function render($content)
    {
        $hasErrors = $this->getElement()->hasErrors();

        return '<div class="clearfix' . (($hasErrors) ? ' error' : '') . '">
                    ' . $content . '
                </div>';
    }
}
