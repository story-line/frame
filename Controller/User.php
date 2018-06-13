<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:21
 */

namespace Controller;

use Controller;
use Model\Database;

class User extends Controller
{
    public function login()
    {
//        echo url('User','login',['id'=> 1]);
//        var_dump($_SERVER['HTTP_HOST']) ;
        redirect(url('user','login'));
//        if (IS_GET) {
//            $data = [
//                'db_type' => 'mysql',
//                'host' => '127.0.0.1',
//                'user' => 'root',
//                'pass' => 'root',
//                'db_name' => 'test',
//            ];
//            //$this->assign('url', url('User', 'login'));
//            $this->assign('arr', $data);
//            $this->display('user/login');
//        } else {
//            $db = Database::GetInstance();
//            $pdo = $db->connect_db();
//            var_dump($pdo);
//            var_export($pdo);
//            die;
//            echo 'this is login action';
//        }
    }

    public function DoLogin()
    {

    }

    public function register()
    {
        echo 'this is register action';
    }
}