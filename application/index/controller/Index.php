<?php
namespace app\index\controller;
use app\index\controller\Common;

class Index extends Common
{
    /* 1 后台首页渲染 */
    public function index()
    {
        /* 判断用户是否登录 */
        // $this->isLogin();
        return $this->view->fetch('index');
    }
}
