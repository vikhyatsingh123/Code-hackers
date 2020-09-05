<?php
/**
 * @param $text
 * @param int $chars
 * @return string
 */
function shortText($text, $chars =150){
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    return $text;
}
