<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class HelloWorld extends Controller
{
    public function index($name = '2222')
    {   

        $data = Db::table('think_data')->name('data')->find();
// var_dump($data);die;
        $this->assign('result', $data);

        return $this->fetch();
    }

    public function test($name = 'test', $city = '')
    {
        // return '这是一个测试方法!';
        $this->assign(['name' => $name, 'city' => $city]);

        return $this->fetch();
    }

    public function hello2()
    {
        return '只是protected方法!';
    }

    private function hello3()
    {
        return '这是private方法!';
    }
}