<?php

namespace Tests\Unit;

use Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function shouldCreateObject(): void
    {
        $id = 1;
        $name = 'John Doe';
        $basicSalary = 1000000;

        $obj = new Employee(
            $id,
            $name,
            $basicSalary
        );
        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($basicSalary, $obj->getBasicSalary());
    }
}
