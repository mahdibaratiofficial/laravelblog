<?php

if(!function_exists('isset_product')){
    function isset_product($argu){
        if(isset($argu) && !empty($argu)){
            return $argu;
        }else{
            return null;
        }
    }
}


?>