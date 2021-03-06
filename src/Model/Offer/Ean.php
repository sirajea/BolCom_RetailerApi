<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class Ean
{
    private $value;

    public function __construct(string $value)
    {
        if (!\Assert\Assertion::regex($value, '/^\d{13}$/', 'EAN Code should be 13 characters long.')) {
            throw new \InvalidArgumentException('');
        }

        if (!\BolCom\RetailerApi\Model\Assert\AssertEan::assert($value)) {
            throw new \InvalidArgumentException('EAN Code is invalid.');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function fromString(string $ean): Ean
    {
        return new self($ean);
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
