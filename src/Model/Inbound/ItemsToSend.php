<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class ItemsToSend
{
    private $value;

    public function __construct(int $value)
    {
        if (!\Assert\Assertion::min($value, 1)) {
            throw new \InvalidArgumentException('');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public static function fromScalar(int $itemsToSend): ItemsToSend
    {
        return new self($itemsToSend);
    }

    public function toScalar(): int
    {
        return $this->value;
    }
}
