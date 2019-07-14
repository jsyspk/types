<?php
declare(strict_types=1);

namespace J\Types;

use \InvalidArgumentException;
abstract class AnyPath implements Path
{
    protected $path;

    public function __construct(string $path)
    {
        if(empty($path))
        {
            throw new InvalidArgumentException("Given path '$path' is empty and can not be used as a valid path", 30000);
        }
        $this->path = $path;
    }

    public function value(): string
    {
        return $this->path;
    }

    public function __toString(): string
    {
        return $this->path;
    }
}