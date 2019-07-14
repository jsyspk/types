<?php
declare(strict_types=1);

namespace J\Types\Tests;

use PHPUnit\Framework\TestCase;
use J\Types\PositiveNumber;
use \InvalidArgumentException;

class PositiveNumberTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_should_not_initialize_when_no_param_is_provided()
    {
        $this->expectException(\Error::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Too few arguments to function ');
        $this->expectExceptionMessageRegExp('/Too few arguments to function .*PositiveNumber::__construct\(\), 0 passed in .*positive\-number\-test\.php on line \d+ and exactly 1 expected/');
        $p = new PositiveNumber();
    }

    public function test_zero_is_not_acceptable_as_positive_integer()
    {
        $testInput = 0;
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(40001);
        $this->expectExceptionMessage("Given value '$testInput' is zero and can not be accepted as a positive integer");
        $p = new PositiveNumber($testInput);
    }

    public function test_must_not_accept_negative_integer()
    {
        $testInput = -5630;
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(40002);
        $this->expectExceptionMessage("Given value '$testInput' is negative and can not be accepted as a positive integer");
        $p = new PositiveNumber($testInput);
    }

    public function test_must_work_perfectly_fine_with_a_positive_number()
    {
        $testInput = 5630;
        $p = new PositiveNumber($testInput);
        $this->assertEquals($testInput, $p->value(), "The value should match");
        $this->assertIsInt($p->value());
        $this->assertIsNumeric($p->value());

    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}