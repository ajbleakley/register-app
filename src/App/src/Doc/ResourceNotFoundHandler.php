<?php

declare(strict_types=1);

namespace App\Doc;

use Laminas\Diactoros\Response\TextResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ResourceNotFoundHandler implements RequestHandlerInterface
{
    private const MESSAGE = <<<'EOT'
Resource Not Found

The resource you requested cannot be found. If you were using a specific
identifier, consider searching for the correct identifier in the corresponding
collection resource (usually obtained by stripping the identifier from the
URL).

EOT;

    /**
     * {@inheritDoc}
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new TextResponse(self::MESSAGE);
    }
}
