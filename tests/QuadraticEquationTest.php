<?php

use PHPUnit\Framework\TestCase;
use Kreslavskiy\QuadraticEquation;
use Kreslavskiy\KreslavskiyException;

final class QuadraticEquationTest extends TestCase {
    public function testSolve() {
        $solver = new QuadraticEquation();

        $this->assertEquals(
            [-4],
            $solver->solve(0, 1, 4)
        );
        
        $this->assertEquals(
            [0, 0.5],
            $solver->solve(4, -2, 0)
        );

        $this->assertEquals(
            [0, 5],
            $solver->solve(1, -5, 0)
        );
        
        // a == 0
        $this->expectException(KreslavskiyException::class);
        $solver->solve(0, 0, 0);
        
        // Дискриминант < 0
        $this->expectException(KreslavskiyException::class);
        $solver->solve(1, -2, 2);
    }
}