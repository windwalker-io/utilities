<?php

/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2023 LYRASOFT.
 * @license    MIT
 */

declare(strict_types=1);

namespace Windwalker\Utilities\Attributes\Enum;

/**
 * The EnumColor class.
 */
#[\Attribute(\Attribute::TARGET_CLASS_CONSTANT)]
class Color
{
    public function __construct(public string $color)
    {
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
