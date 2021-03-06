<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class Transporter
{
    private $name;
    private $code;

    public function __construct(\BolCom\RetailerApi\Model\Transport\TransporterName $name, \BolCom\RetailerApi\Model\Transport\TransporterCode $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function name(): \BolCom\RetailerApi\Model\Transport\TransporterName
    {
        return $this->name;
    }

    public function code(): \BolCom\RetailerApi\Model\Transport\TransporterCode
    {
        return $this->code;
    }

    public function withName(\BolCom\RetailerApi\Model\Transport\TransporterName $name): Transporter
    {
        return new self($name, $this->code);
    }

    public function withCode(\BolCom\RetailerApi\Model\Transport\TransporterCode $code): Transporter
    {
        return new self($this->name, $code);
    }

    public static function fromArray(array $data): Transporter
    {
        if (! isset($data['name']) || ! \is_string($data['name'])) {
            throw new \InvalidArgumentException("Key 'name' is missing in data array or is not a string");
        }

        $name = \BolCom\RetailerApi\Model\Transport\TransporterName::fromScalar($data['name']);

        if (! isset($data['code']) || ! \is_string($data['code'])) {
            throw new \InvalidArgumentException("Key 'code' is missing in data array or is not a string");
        }

        $code = \BolCom\RetailerApi\Model\Transport\TransporterCode::fromValue($data['code']);

        return new self($name, $code);
    }
}
