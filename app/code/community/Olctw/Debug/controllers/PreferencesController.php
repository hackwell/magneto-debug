<?php

class Olctw_Debug_PreferencesController extends Mage_Core_Controller_Front_Action {

    public function updatePostAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form = $request->getPost();

            /* @var $helper Olctw_Debug_Helper_Data */
            $helper = Mage::helper('debug');
//            $panels = $helper->getPanels();
        }

        $this->_redirectReferer();
    }

}
