<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self OK()
 * @method static self VALIDATION_ERROR()
 */
final class TransactionStatusCode extends Enum
{
    public const OK = 2;
    public const VALIDATION_ERROR = 3;
}
