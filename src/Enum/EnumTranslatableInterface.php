<?php

/**
 * Part of unicorn project.
 *
 * @copyright  Copyright (C) 2021 __ORGANIZATION__.
 * @license    __LICENSE__
 */

declare(strict_types=1);

namespace Windwalker\Utilities\Enum;

use Windwalker\Utilities\Contract\LanguageInterface;

/**
 * Interface EnumTranslatableInterface
 */
interface EnumTranslatableInterface extends EnumMetaInterface
{
    public function trans(LanguageInterface $lang, ...$args): string;

    public static function getTransItems(LanguageInterface $lang, ...$args): array;
}
