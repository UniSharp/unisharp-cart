<?php
namespace UniSharp\Cart\Enums;

use Konekt\Enum\Enum;
use UniSharp\Cart\Contracts\ShippingStatusContract;

class ShippingStatus extends Enum implements ShippingStatusContract
{
    const __default = self::PENDING;
    const PENDING = 0;
    const COMPLETE = 1;
    const CANCEL = 2;
}
