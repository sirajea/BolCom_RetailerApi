<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class ReturnItemList
{
    private $returns;

    /**
     * @param \BolCom\RetailerApi\Model\Rma\ReturnItem[]|null $returns
     */
    public function __construct(ReturnItem ...$returns)
    {
        $this->returns = $returns;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Rma\ReturnItem[]
     */
    public function returns(): array
    {
        return $this->returns;
    }

    /**
     * @param \BolCom\RetailerApi\Model\Rma\ReturnItem[]|null $returns
     * @return \BolCom\RetailerApi\Model\Rma\ReturnItemList
     */
    public function withReturns(array $returns): ReturnItemList
    {
        return new self(...$returns);
    }

    public static function fromArray(array $data): ReturnItemList
    {
        if (! isset($data['returns']) || ! \is_array($data['returns'])) {
            throw new \InvalidArgumentException("Key 'returns' is missing in data array or is not an array");
        }

        $returns = [];

        foreach ($data['returns'] as $__value) {
            if (! \is_array($data['returns'])) {
                throw new \InvalidArgumentException("Key 'returns' in data array or is not an array of arrays");
            }

            $returns[] = ReturnItem::fromArray($__value);
        }

        return new self(...$returns);
    }
}
