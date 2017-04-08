<?php

/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/4/8
 * Time: 14:20
 */
require dirname(__DIR__) . '/src/User.php';
class UserTest extends PHPUnit_Framework_TestCase
{
    public function testCheckUserNameTrue(){
        $User=new User();
        $this->assertEquals(true,$User->checkUserName('wang'));
    }
    public function testCheckUserNameFalse(){
        $User=new User();
        $this->assertEquals(false,$User->checkUserName('zhang'));
    }
}