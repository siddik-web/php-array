<?php 
namespace App;
/**
 *  ArrayHelper Class
 *  This is the Class for how array functions are working.
 */
class ArrayHelper
{
    /**
     * Get Unique Array.
     * This function return only unique values of an array.
     *
     * @param  array $array
     * @return array
     */
    public static function getUniqueArray($array = []) : array
    {
        return array_unique($array);
    }
}