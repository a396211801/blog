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

    /**
     *关于我
     * */
    public function  AboutAction()
    {
        $this->display('about/index');
    }

    /**
     *慢生活首页
     * */
    public function LifeAction()
    {
        $this->display('about/life');
    }
}