<?php

namespace Dendy\Dictionary;

class Jawa{
    public static function translate($word){
        switch($word){
            case 'satu':
                return 'siji';

            case 'dua':
                return 'loro';

            case 'tiga':
                return 'telu';

            default:
                return 'ora ono';
        }
    }
}
