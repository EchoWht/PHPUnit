<?php

/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/4/8
 * Time: 14:20
 */
class User
{
    public function login($user_name,$user_pwd){
        if ($this->checkUserName($user_name)){
            if ($this->checkUserPwd($user_name,$user_pwd)){
                return 1;
            }
            return 2;
        }
        return 3;

    }
    public function checkUserName($user_name){
        if($user_name==='wang') {
            return true;
        }
        return false;
    }
    public function checkUserPwd($user_name,$user_pwd){
        if ($user_name==='wang'&&$user_pwd==='wht'){
            return true;
        }
        return false;
    }
}