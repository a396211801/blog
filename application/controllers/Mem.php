<?php
/**
 * User: Administrator
 */
class Controller_Mem extends Blog_Web
{
    protected $layout ='index';

    public function init(){
        parent::init();
    }

    public function  AboutAction()
    {
        $this->display('about/index');
    }
}