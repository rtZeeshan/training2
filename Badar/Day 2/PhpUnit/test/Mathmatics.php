<?php
namespace Maths;

// Class declartion
/**
 * Class Mathss
 * @package vendor
 */
class Arithmetic
{
   
    // method declaration
    /**
     * @param $x
     * @param $y
     * @return mixed
     */
    public function add($x, $y)
    {
        return $x+$y;
    }

    /**
     * @param $x
     * @param $y
     * @return mixed
     */
    public function subtract($x, $y)
    {
        if ($x>$y) {
            return $x-$y;
        } else {
            return $y-$x;
        }

    }

    /**
     * @param $x
     * @param $y
     * @return mixed
     */
    public function multiply($x, $y)
    {
        return $x*$y;
    }

    /**
     * @param $x
     * @param $y
     * @return float
     */
    public function divide($x, $y)
    {
        if ($x>$y) {
            return $x/$y;
        } else {
            return $y/$x;
        }
    }
}
