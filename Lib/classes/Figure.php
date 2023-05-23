<?php

/**
 * Class Figure
 *
 * This class represents a collection of known figures and their corresponding values.
 * It inherits from Singleton to ensure that only one instance of the class can exist at any given moment.
 *
 * @package Lib
 */
namespace Lib;

use Lib\Singleton;

class Figure extends Singleton
{
    /**
     * @var array $knownFigures An array containing known figures and their corresponding values.
     * @access private
     */
    private array $knownFigures = [
        "circle" => 0,
        "square" => 4
    ];

    /**
     * Retrieves a figure's corresponding value.
     * @param string $key The name of the figure.
     * @return string The formatted string with the figure name and its corresponding value.
     * @access public
     */
    public function getFigure(string $key) : string
    {
        $figureName = strtolower($key);
        $val = $this->knownFigures[$figureName];

        if (isset($val)) {
            return $figureName . " - " . $val . "\n";
        }

        return $figureName . " - " . "not defined" . "\n";
    }

    /**
     * Retrieves a figure's corresponding number of corners.
     * @param string $key The name of the figure.
     * @return int|null The corresponding number of corners or null if the figure is not defined.
     * @access public
     */
    public function getFigureCornersCount(string $key) : ?int
    {
        if (isset($this->knownFigures[strtolower($key)])) {
            return $this->knownFigures[strtolower($key)];
        }
        return null;
    }

    /**
     * Adds a new figure to the collection.
     * @param string $key The name of the figure.
     * @param int $value The corresponding value.
     * @return void
     * @access public
     */
    public function addFigure(string $key, int $value) : void
    {
        $this->knownFigures[strtolower($key)] = $value;
    }

    /**
     * Deletes a figure from the collection.
     * @param string $key The name of the figure.
     * @return void
     * @access public
     */
    public function deleteFigure(string $key) : void
    {
        unset($this->knownFigures[strtolower($key)]);
    }

    /**
     * Updates the value of a figure in the collection.
     * @param string $key The name of the figure.
     * @param int $value The new corresponding value.
     * @return void
     * @access public
     */
    public function updateFigure(string $key, int $value) : void
    {
        $this->knownFigures[strtolower($key)] = $value;
    }

    /**
     * Returns a string representation of all the figures in the collection.
     * @return string The formatted string with all the figures and their corresponding values.
     * @access public
     */
    public function __toString() : string
    {
        $res = '';

        foreach ($this->knownFigures as $figureName => $value) {
            $res .= $figureName . " - " . $value . "\n";
        }

        return $res;
    }
}