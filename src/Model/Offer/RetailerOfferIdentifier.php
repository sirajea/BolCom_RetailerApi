<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class RetailerOfferIdentifier
{
    private $ean;
    private $condition;

    public function __construct(Ean $ean, Condition $condition)
    {
        $this->ean = $ean;
        $this->condition = $condition;
    }

    public function ean(): Ean
    {
        return $this->ean;
    }

    public function condition(): Condition
    {
        return $this->condition;
    }

    public function withEan(Ean $ean): RetailerOfferIdentifier
    {
        return new self($ean, $this->condition);
    }

    public function withCondition(Condition $condition): RetailerOfferIdentifier
    {
        return new self($this->ean, $condition);
    }

    public static function fromArray(array $data): RetailerOfferIdentifier
    {
        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = Ean::fromString($data['ean']);

        if (! isset($data['condition']) || ! \is_string($data['condition'])) {
            throw new \InvalidArgumentException("Key 'condition' is missing in data array or is not a string");
        }

        $condition = Condition::fromValue($data['condition']);

        return new self($ean, $condition);
    }

    public function toArray(): array
    {
        return [
            'ean' => $this->ean->toString(),
            'condition' => $this->condition->name(),
        ];
    }
}