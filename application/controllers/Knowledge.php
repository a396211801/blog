<?php
/**
 * User: lidc
 */

class Controller_Knowledge extends Blog_Web{

    protected  $layout ='index';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function IndexAction()
    {
        $this->display('knowledge/index');
    }

}