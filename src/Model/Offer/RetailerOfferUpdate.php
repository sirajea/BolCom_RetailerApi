<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class RetailerOfferUpdate
{
    private $referenceCode;
    private $onHoldByRetailer;
    private $unknownProductTitle;
    private $fulfilment;

    public function __construct(ReferenceCode $referenceCode = null, bool $onHoldByRetailer, Title $unknownProductTitle = null, Fulfilment $fulfilment)
    {
        $this->referenceCode = $referenceCode;
        $this->onHoldByRetailer = $onHoldByRetailer;
        $this->unknownProductTitle = $unknownProductTitle;
        $this->fulfilment = $fulfilment;
    }

    public function referenceCode()
    {
        return $this->referenceCode;
    }

    public function onHoldByRetailer(): bool
    {
        return $this->onHoldByRetailer;
    }

    public function unknownProductTitle()
    {
        return $this->unknownProductTitle;
    }

    public function fulfilment(): Fulfilment
    {
        return $this->fulfilment;
    }

    public function withReferenceCode(ReferenceCode $referenceCode = null): RetailerOfferUpdate
    {
        return new self($referenceCode, $this->onHoldByRetailer, $this->unknownProductTitle, $this->fulfilment);
    }

    public function withOnHoldByRetailer(bool $onHoldByRetailer): RetailerOfferUpdate
    {
        return new self($this->referenceCode, $onHoldByRetailer, $this->unknownProductTitle, $this->fulfilment);
    }

    public function withUnknownProductTitle(Title $unknownProductTitle = null): RetailerOfferUpdate
    {
        return new self($this->referenceCode, $this->onHoldByRetailer, $unknownProductTitle, $this->fulfilment);
    }

    public function withFulfilment(Fulfilment $fulfilment): RetailerOfferUpdate
    {
        return new self($this->referenceCode, $this->onHoldByRetailer, $this->unknownProductTitle, $fulfilment);
    }

    public static function fromArray(array $data): RetailerOfferUpdate
    {
        if (isset($data['referenceCode'])) {
            if (! \is_string($data['referenceCode'])) {
                throw new \InvalidArgumentException("Value for 'referenceCode' is not a string in data array");
            }

            $referenceCode = ReferenceCode::fromString($data['referenceCode']);
        } else {
            $referenceCode = null;
        }

        if (! isset($data['onHoldByRetailer']) || ! \is_bool($data['onHoldByRetailer'])) {
            throw new \InvalidArgumentException("Key 'onHoldByRetailer' is missing in data array or is not a bool");
        }

        $onHoldByRetailer = $data['onHoldByRetailer'];

        if (isset($data['unknownProductTitle'])) {
            if (! \is_string($data['unknownProductTitle'])) {
                throw new \InvalidArgumentException("Value for 'unknownProductTitle' is not a string in data array");
            }

            $unknownProductTitle = Title::fromString($data['unknownProductTitle']);
        } else {
            $unknownProductTitle = null;
        }

        if (! isset($data['fulfilment']) || ! \is_array($data['fulfilment'])) {
            throw new \InvalidArgumentException("Key 'fulfilment' is missing in data array or is not an array");
        }

        $fulfilment = Fulfilment::fromArray($data['fulfilment']);

        return new self(
            $referenceCode,
            $onHoldByRetailer,
            $unknownProductTitle,
            $fulfilment
        );
    }

    public function toArray(): array
    {
        return [
            'referenceCode' => null === $this->referenceCode ? null : $this->referenceCode->toString(),
            'onHoldByRetailer' => $this->onHoldByRetailer,
            'unknownProductTitle' => null === $this->unknownProductTitle ? null : $this->unknownProductTitle->toString(),
            'fulfilment' => $this->fulfilment->toArray(),
        ];
    }
}