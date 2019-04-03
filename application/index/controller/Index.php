<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
//        return '欢迎来到景德镇陶瓷大学科研管理系统';
        return $this->view->fetch('index');
    }
}
