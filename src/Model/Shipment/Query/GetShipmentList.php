<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Shipment\Query;

final class GetShipmentList extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Shipment\Query\GetShipmentList';

    protected $messageName = self::MESSAGE_NAME;

    public function page(): int
    {
        return $this->payload['page'];
    }

    public function fulfilmentMethod(): \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod
    {
        return \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod::fromValue($this->payload['fulfilmentMethod']);
    }

    public function orderid(): \BolCom\RetailerApi\Model\Order\OrderId
    {
        return \BolCom\RetailerApi\Model\Order\OrderId::fromString($this->payload['orderid']);
    }

    public static function with(int $page, \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $fulfilmentMethod, \BolCom\RetailerApi\Model\Order\OrderId $orderid): GetShipmentList
    {
        return new self([
            'page' => $page,
            'fulfilmentMethod' => $fulfilmentMethod->value(),
            'orderid' => $orderid->toString(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (! isset($payload['page']) || ! \is_int($payload['page'])) {
            throw new \InvalidArgumentException("Key 'page' is missing in payload or is not a int");
        }

        if (! isset($payload['fulfilmentMethod']) || ! \is_string($payload['fulfilmentMethod'])) {
            throw new \InvalidArgumentException("Key 'fulfilmentMethod' is missing in payload or is not a string");
        }

        if (! isset($payload['orderid']) || ! \is_string($payload['orderid'])) {
            throw new \InvalidArgumentException("Key 'orderid' is missing in payload or is not a string");
        }

        $this->payload = $payload;
    }
}