<?php
namespace app\index\controller;

use app\index\controller\Common;

class User extends Common
{
    // 用户教师登录
    public function login()
    {
        return $this->view->fetch();
    }

    // 检测用户教师登录
    public function checkLogin()
    {
        
    }

    // 注销登录
    public function logout()
    {
        
    }
}