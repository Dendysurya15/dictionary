<?php

use Dendy\Dictionary\Jawa;
use Dendy\Dictionary\Sunda;

if(! function_exists('translatedToSundaLanguage')){
    function translatedToSundaLanguage($word){
        return Sunda::translate($word);
    }
}

if(! function_exists('translatedToJawaLanguage')){
    function translatedToJawaLanguage($word){
        return Jawa::translate($word);
    }
}