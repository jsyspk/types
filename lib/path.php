<?php
declare(strict_types=1);

namespace J\Types;

interface Path
{
    public function value(): string;

    public function path(): string;
}