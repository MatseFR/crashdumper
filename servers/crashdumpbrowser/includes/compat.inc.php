<?php

function refValues($arr) {
	//	Reference is required for PHP 5.3+
    if (strnatcmp(phpversion(),'5.3') >= 0) {
        $refs = array();
        
        foreach($arr as $key => $value) {
            $refs[$key] = &$arr[$key];
        }

        return $refs;
    }

    return $arr;
}