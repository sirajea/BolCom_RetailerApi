<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class ProductLabelFormat
{
    public const OPTIONS = [
        'AVERY_J8159' => 0,
        'AVERY_J8160' => 1,
        'AVERY_3474' => 2,
        'DYMO_99012' => 3,
        'BROTHER_DK11208D' => 4,
        'ZEBRA_Z_PERFORM_1000T' => 5,
    ];

    public const AVERY_J8159 = 0;
    public const AVERY_J8160 = 1;
    public const AVERY_3474 = 2;
    public const DYMO_99012 = 3;
    public const BROTHER_DK11208D = 4;
    public const ZEBRA_Z_PERFORM_1000T = 5;

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function AVERY_J8159(): self
    {
        return new self('AVERY_J8159');
    }

    public static function AVERY_J8160(): self
    {
        return new self('AVERY_J8160');
    }

    public static function AVERY_3474(): self
    {
        return new self('AVERY_3474');
    }

    public static function DYMO_99012(): self
    {
        return new self('DYMO_99012');
    }

    public static function BROTHER_DK11208D(): self
    {
        return new self('BROTHER_DK11208D');
    }

    public static function ZEBRA_Z_PERFORM_1000T(): self
    {
        return new self('ZEBRA_Z_PERFORM_1000T');
    }

    public static function fromName(string $value): self
    {
        if (! isset(self::OPTIONS[$value])) {
            throw new \InvalidArgumentException('Unknown enum name given');
        }

        return self::{$value}();
    }

    public static function fromValue($value): self
    {
        foreach (self::OPTIONS as $name => $v) {
            if ($v === $value) {
                return self::{$name}();
            }
        }

        throw new \InvalidArgumentException('Unknown enum value given');
    }

    public function equals(ProductLabelFormat $other): bool
    {
        return \get_class($this) === \get_class($other) && $this->name === $other->name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function toString(): string
    {
        return $this->name;
    }
}