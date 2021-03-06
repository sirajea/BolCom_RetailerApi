<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound\Query;

final class GetProductLabelsByEan extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Inbound\Query\GetProductLabelsByEan';

    protected $messageName = self::MESSAGE_NAME;

    public function format(): \BolCom\RetailerApi\Model\Inbound\ProductLabelFormat
    {
        return \BolCom\RetailerApi\Model\Inbound\ProductLabelFormat::fromValue($this->payload['format']);
    }

    /**
     * @return \BolCom\RetailerApi\Model\Inbound\ProductLabel[]
     */
    public function productLabels(): array
    {
        $__returnValue = [];

        foreach ($this->payload['productLabels'] as $__value) {
            $__returnValue[] = \BolCom\RetailerApi\Model\Inbound\ProductLabel::fromArray($__value);
        }

        return $__returnValue;
    }

        /**
     * @param \BolCom\RetailerApi\Model\Inbound\ProductLabelFormat $format
     * @param \BolCom\RetailerApi\Model\Inbound\ProductLabel[]|null $productLabels
     */
public static function with(\BolCom\RetailerApi\Model\Inbound\ProductLabelFormat $format, array $productLabels): GetProductLabelsByEan
    {
        return new self([
            'format' => $format->value(),
            'productLabels' => $productLabels,
        ]);
    }

    protected function setPayload(array $payload)
    {
        if (! isset($payload['format']) || ! \is_string($payload['format'])) {
            throw new \InvalidArgumentException("Key 'format' is missing in payload or is not a string");
        }

        if (! isset($payload['productLabels'])) {
            throw new \InvalidArgumentException("Key 'productLabels' is missing in payload");
        }

        $this->payload = $payload;
    }
}
