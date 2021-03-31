<?php

use PHPUnit\Framework\TestCase;
use Kreslavskiy\LinearEquation;
use Kreslavskiy\KreslavskiyException;

final class LinearEquationTest extends TestCase {
    public function testSolveLinearEquation() {
        $solver = new LinearEquation();

        $this->assertEquals(
            [-4],
            $solver->linearEquation(1, 4)
        );

        $this->assertEquals(
            [1],
            $solver->linearEquation(2, -2)
        );

        // a == 0
        $this->expectException(KreslavskiyException::class);
        $solver->linearEquation(0, 1);
    }
}