<?php

declare(strict_types=1);

namespace App\Exception;

use DomainException;
use Mezzio\ProblemDetails\Exception\CommonProblemDetailsExceptionTrait;
use Mezzio\ProblemDetails\Exception\ProblemDetailsExceptionInterface;

class OutOfBoundsException extends DomainException implements ProblemDetailsExceptionInterface
{
    use CommonProblemDetailsExceptionTrait;

    public static function create(string $message): self
    {
        $e         = new self($message);
        $e->status = 400;
        $e->detail = $message;
        $e->type   = '/api/v1/doc/parameter-out-of-range';
        $e->title  = 'Parameter out of range';
        return $e;
    }
}
