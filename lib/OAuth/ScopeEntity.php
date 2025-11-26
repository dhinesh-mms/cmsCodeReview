<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\OAuth;

use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\ScopeTrait;

/**
 * Class ScopeEntity
 * @package Xibo\OAuth
 */
class ScopeEntity implements ScopeEntityInterface
{
    use ScopeTrait;
    use EntityTrait;
}
