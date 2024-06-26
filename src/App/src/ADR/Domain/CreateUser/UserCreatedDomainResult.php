<?php

declare(strict_types=1);

namespace App\ADR\Domain\CreateUser;

use App\ADR\Domain\DomainResultInterface;
use App\Entity\User\User;

class UserCreatedDomainResult implements DomainResultInterface
{
    public function __construct(private readonly User $user)
    {
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
