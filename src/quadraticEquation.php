<?php

namespace Kreslavskiy;

use core\EquationInterface;

class QuadraticEquation extends LinearEquation implements EquationInterface{

    protected function discriminant($a, $b, $c){
        return pow($b, 2) - 4 * $a * $c;
    }
    public function solve(float $a, float $b, float $c): array
    {
        if ($a == 0) {
            return $this -> linearEquation($b, $c);
        }
        $d = $this -> discriminant($a, $b, $c);

        if ($d == 0) {
            return $this -> x = [(-$b) / 2 * $a];
        }
        if ($d < 0) {
            throw new KreslavskiyException('It is impossible to solve the quadratic equation');
        }

        return $this -> x = [(-$b - sqrt($d)) / (2 * $a), (-$b + sqrt($d)) / (2 * $a)];
    }
}