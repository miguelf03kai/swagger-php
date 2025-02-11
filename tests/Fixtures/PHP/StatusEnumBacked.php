<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Tests\Fixtures\PHP;

use OpenApi\Attributes\Schema;

#[Schema()]
enum StatusEnumBacked: int
{
    case DRAFT = 1;
    case PUBLISHED = 2;
    case ARCHIVED = 3;
}
