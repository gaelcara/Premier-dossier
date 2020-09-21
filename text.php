<?php

class Text{


    private static $suffix = '$';


    public static function publicWithZero($chiffre){
     return Text::withZero($chiffre);
    }




    public static function withZero($chiffre){
        if($chiffre < 10){
            return '0' . $chiffre . self::$suffix; 
        }  else{
            return $chiffre  . self::$suffix;
        }
    }

}