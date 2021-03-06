<?php

/**
 * Autogenerated file for problem WordPattern
 */

namespace LeetCode\Problems\WordPattern;

class WordPattern
{
    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $str = $s;
        if ($pattern==$str || $pattern=="") return false;
		$str = explode(" ", $str);
		if(count($str)==1 && strlen($pattern)>1){
			$str = str_split($str[0]);
		} 
		
		foreach($str as $key => $word){
			if(isset($res[$pattern[$key]])){
				if($res[$pattern[$key]] != $word) return false;
			}
			$res[$pattern[$key]] = $word;
		}
		
		return count($res) == count(array_unique($res));
    }
}
