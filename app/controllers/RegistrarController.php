<?php

/**
 * Description of RegistrarController
 *
 * @author jrcsc
 */
class RegistrarController extends ControllerBase{

    public function initialize() {
        $this->tag->setTitle('Sing Up / Sign In');
        parent::initialize();
    }
    
    public function indexAction() {
        $form = new RegistrarteForm;
        var_dump($form);
        $this->view->form = $form;
    }
}
