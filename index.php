<?php
require_once(__DIR__ . "/vendor/autoload.php");

use Lib\Figure;

/**
 * Function Returns a string that says
 * the total number of corners in the provided figures
 *
 * @param  string ...$figureNames Figure names
 * @return string Answer
 */
function getCornersCount(string ...$figureNames) : string
{
    $res = '';
    foreach ($figureNames as $name) {
        $res .= Figure::getInstance()->getFigure($name);
    }
    return $res;
}
