<?php

class Olctw_Debug_Block_Abstract extends Mage_Core_Block_Template {

    const DEFAULT_STORE_ID = 1;

    public function _getViewVars() {
        return $this->_viewVars;
    }

    public function getShowTemplateHints() {
        return false;
    }

}
