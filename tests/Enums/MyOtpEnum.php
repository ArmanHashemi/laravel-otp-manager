<?php

declare(strict_types=1);

namespace ArmanHashemi\OtpManager\Tests\Enums;

use ArmanHashemi\OtpManager\Contracts\OtpTypeInterface;

enum MyOtpEnum: string implements OtpTypeInterface
{
    case SIGNUP = 'signup';
    case RESET_PASSWORD = 'reset_password';

    public function identifier(): string
    {
        return $this->value;
    }
}
