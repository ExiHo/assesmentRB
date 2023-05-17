<?php

/**
 * Function Returns a string that says how many corners are in the figure,
 * if it's defined in the function.
 *
 * @param  string ...$figures Figure names
 * @return string Answer
 */
function getCornersCount (string ...$figures) : string
{
    //Check if argument is empty
    if(count($figures) === 0)
    {
        return "Empty function argument";
    }

    $res = "";

    $knownFigures = [
        "square" => 4,
        "circle" => 0
    ];

    foreach($figures as $figure)
    {
        $value = $knownFigures[strtolower($figure)];
        if(isset($value))
        {
            $res .= $figure . " - " . $value . "\n";
        }
        else
        {
            $res .= $figure . " - " . "not defined" . "\n";
        }
    }

    return $res;
}
