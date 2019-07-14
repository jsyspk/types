<?php
declare(strict_types=1);

namespace J\Types;

abstract class AnyNumber implements Number
{
    protected $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function value(): int
    {
        return $this->number;
    }

}