<?php
/**
 * Created by PhpStorm.
 * User: vektorel
 * Date: 14.10.2018
 * Time: 14:31
 */

$user = [
    ["adsoyad"=>"ceren savaş",
        "username"=>"cörön",
        "password"=>"123456abc"]
];

function login($username='', $password='', $user=[]){
    $login=0;
    foreach ($user as $key=>$value){
        if($key=="username"){
            if($value==$username){
                $login=1;
            }
            else
                $login=0;
        } elseif ($key=="password"){
            if($value==$password){
                $login=1;
            }
            else
                $login = 0;
        }
    }

    return $login;
}
