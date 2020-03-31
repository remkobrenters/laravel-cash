<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static DataType EXPORT()
 * @method static DataType IMPORT()
 */
class DataType extends Enum
{
    public const EXPORT = 'export';
    public const IMPORT = 'import';
}
