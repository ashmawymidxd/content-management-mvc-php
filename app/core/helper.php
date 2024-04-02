<?php
namespace ahmed\core;
class helper{
    public static function redirect($url){
        header("Location: ".URL."/".$url);
    }

    public static function url($path){
        return URL."/".$url;
    }
}
