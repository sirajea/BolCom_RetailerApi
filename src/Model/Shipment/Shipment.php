<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Shipment;

final class Shipment
{
    private $shipmentId;
    private $shipmentDate;
    private $shipmentReference;
    private $shipmentItems;
    private $transport;
    private $customerDetails;

    public function __construct(ShipmentId $shipmentId, \BolCom\RetailerApi\Model\DateTime $shipmentDate, string $shipmentReference, array $shipmentItems, \BolCom\RetailerApi\Model\Transport\Transport $transport, \BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails)
    {
        $this->shipmentId = $shipmentId;
        $this->shipmentDate = $shipmentDate;
        $this->shipmentReference = $shipmentReference;
            foreach ($shipmentItems as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Shipment\ShipmentItem) {
                    throw new \InvalidArgumentException('shipmentItems expected an array of BolCom\RetailerApi\Model\Shipment\ShipmentItem');
                }
                $this->shipmentItems[] = $__value;
            }

        $this->transport = $transport;
        $this->customerDetails = $customerDetails;
    }

    public function shipmentId(): ShipmentId
    {
        return $this->shipmentId;
    }

    public function shipmentDate(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->shipmentDate;
    }

    public function shipmentReference(): string
    {
        return $this->shipmentReference;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Shipment\ShipmentItem[]
     */
    public function shipmentItems(): array
    {
        return $this->shipmentItems;
    }

    public function transport(): \BolCom\RetailerApi\Model\Transport\Transport
    {
        return $this->transport;
    }

    public function customerDetails(): \BolCom\RetailerApi\Model\Customer\CustomerDetails
    {
        return $this->customerDetails;
    }

    public function withShipmentId(ShipmentId $shipmentId): Shipment
    {
        return new self($shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withShipmentDate(\BolCom\RetailerApi\Model\DateTime $shipmentDate): Shipment
    {
        return new self($this->shipmentId, $shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withShipmentReference(string $shipmentReference): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withShipmentItems(array $shipmentItems): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withTransport(\BolCom\RetailerApi\Model\Transport\Transport $transport): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $transport, $this->customerDetails);
    }

    public function withCustomerDetails(\BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $customerDetails);
    }

    public static function fromArray(array $data): Shipment
    {
        if (! isset($data['shipmentId']) || ! \is_int($data['shipmentId'])) {
            throw new \InvalidArgumentException("Key 'shipmentId' is missing in data array or is not a int");
        }

        $shipmentId = ShipmentId::fromScalar($data['shipmentId']);

        if (! isset($data['shipmentDate']) || ! \is_string($data['shipmentDate'])) {
            throw new \InvalidArgumentException("Key 'shipmentDate' is missing in data array or is not a string");
        }

        $shipmentDate = \BolCom\RetailerApi\Model\DateTime::fromString($data['shipmentDate']);

        if (! isset($data['shipmentReference']) || ! \is_string($data['shipmentReference'])) {
            throw new \InvalidArgumentException("Key 'shipmentReference' is missing in data array or is not a string");
        }

        $shipmentReference = $data['shipmentReference'];

        if (! isset($data['shipmentItems']) || ! \is_array($data['shipmentItems'])) {
            throw new \InvalidArgumentException("Key 'shipmentItems' is missing in data array or is not an array");
        }

        $shipmentItems = [];

        foreach ($data['shipmentItems'] as $__value) {
            if (! \is_array($data['shipmentItems'])) {
                throw new \InvalidArgumentException("Key 'shipmentItems' in data array or is not an array of arrays");
            }

            $shipmentItems[] = ShipmentItem::fromArray($__value);
        }

        if (! isset($data['transport']) || ! \is_array($data['transport'])) {
            throw new \InvalidArgumentException("Key 'transport' is missing in data array or is not an array");
        }

        $transport = \BolCom\RetailerApi\Model\Transport\Transport::fromArray($data['transport']);

        if (! isset($data['customerDetails']) || ! \is_array($data['customerDetails'])) {
            throw new \InvalidArgumentException("Key 'customerDetails' is missing in data array or is not an array");
        }

        $customerDetails = \BolCom\RetailerApi\Model\Customer\CustomerDetails::fromArray($data['customerDetails']);

        return new self(
            $shipmentId,
            $shipmentDate,
            $shipmentReference,
            $shipmentItems,
            $transport,
            $customerDetails
        );
    }
}