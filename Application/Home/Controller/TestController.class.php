<?php
/**
 * Created by PhpStorm.
 * User: dee
 * Date: 2016/8/6
 * Time: 12:44
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model\User;

class TestController extends Controller {
    public function index() {
        // 使用composer自动加载器
        // require $_SERVER['DOCUMENT_ROOT'].__ROOT__.'/vendor/autoload.php';

        // // 设置Whoops提供的错误和异常处理
        // $whoops = new \Whoops\Run;
        // $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        // $whoops->register();

        // 测试未捕获的异常
        $this->division(10, 0);
    }

    public function userlist(){
        $user = User::all();
        dd($user);
    }

    function division($dividend, $divisor) {
        if($divisor == 0) {
            throw new \Exception('Division by zero');
        }
    }
}