<?php

if(!function_exists("profile_pic_check")){

    function profile_pic_check($name){
        if ($name) {
            return $name;
        }else{
            return 'avatar.png';
        }


    }
}