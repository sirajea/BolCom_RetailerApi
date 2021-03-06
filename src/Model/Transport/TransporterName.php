<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport;

final class TransporterName
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function fromScalar(string $transporterName): TransporterName
    {
        return new self($transporterName);
    }

    public function toScalar(): string
    {
        return $this->value;
    }
}
