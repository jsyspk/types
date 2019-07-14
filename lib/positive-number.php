<?php
declare(strict_types=1);

namespace J\Types;

use \InvalidArgumentException;

class PositiveNumber extends AnyNumber
{
    public function __construct(int $inputNumber)
    {
        parent::__construct($inputNumber);

        if($inputNumber === 0){
            throw new InvalidArgumentException("Given value '$inputNumber' is zero and can not be accepted as a positive integer", 40001);
        }
        if($inputNumber < 0){
            throw new InvalidArgumentException("Given value '$inputNumber' is negative and can not be accepted as a positive integer", 40002);
        }
    }

}