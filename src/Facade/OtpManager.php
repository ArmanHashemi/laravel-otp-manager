<?php

namespace ArmanHashemi\OtpManager\Facade;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Facade;
use ArmanHashemi\OtpManager\Contracts\OtpTypeInterface;
use ArmanHashemi\OtpManager\Dto\OtpDto;
use ArmanHashemi\OtpManager\Dto\SentOtpDto;

/**
 * @method static SentOtpDto send(string $mobile, OtpTypeInterface $type = null)
 * @method static SentOtpDto sendAndRetryCheck(string $mobile, OtpTypeInterface $type = null)
 * @method static bool verify(string $mobile, int $otp, string $trackingCode, OtpTypeInterface $type = null)
 * @method static OtpDto|null getVerifyCode(string $mobile, OtpTypeInterface $type = null)
 * @method static bool deleteVerifyCode(string $mobile, OtpTypeInterface $type = null)
 * @method static Carbon|null getSentAt(string $mobile, OtpTypeInterface $type = null)
 * @method static bool isVerifyCodeHasBeenSent(string $mobile, OtpTypeInterface $type = null)
 *
 * @see \ArmanHashemi\OtpManager\OtpManager
 */
class OtpManager extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \ArmanHashemi\OtpManager\OtpManager::class;
    }
}
