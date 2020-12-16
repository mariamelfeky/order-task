<?php
class Validation
{
    public static function validateText ($str)
    {
        if(!(empty($str))){
            $str = filter_var($str, FILTER_SANITIZE_STRING);
            return $str;
        }
        else{
             echo"please enter product detailes";
        }
    }

    public static function validateNumber ($number)
    {
        if(!(empty($str))){
            $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $number = abs($number);
            return $number;
        }
        else{
           echo "please enter product detailes";
        }
    }
    
}?>