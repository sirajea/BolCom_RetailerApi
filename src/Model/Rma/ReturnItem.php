<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class ReturnItem
{
    private $returnNumber;
    private $orderId;
    private $ean;
    private $title;
    private $registrationDateTime;
    private $returnReason;
    private $returnReasonComments;
    private $customerDetails;
    private $fulfilmentMethod;
    private $handled;
    private $trackAndTrace;
    private $handlingResult;
    private $processingResult;
    private $processingDateTime;

    public function __construct(ReturnNumber $returnNumber, \BolCom\RetailerApi\Model\Order\OrderId $orderId, \BolCom\RetailerApi\Model\Offer\Ean $ean, string $title, \BolCom\RetailerApi\Model\DateTime $registrationDateTime, string $returnReason, string $returnReasonComments, \BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails, \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $fulfilmentMethod, bool $handled, \BolCom\RetailerApi\Model\Transport\TrackAndTrace $trackAndTrace, HandlingResult $handlingResult, ProcessingResult $processingResult, \BolCom\RetailerApi\Model\DateTime $processingDateTime)
    {
        $this->returnNumber = $returnNumber;
        $this->orderId = $orderId;
        $this->ean = $ean;
        $this->title = $title;
        $this->registrationDateTime = $registrationDateTime;
        $this->returnReason = $returnReason;
        $this->returnReasonComments = $returnReasonComments;
        $this->customerDetails = $customerDetails;
        $this->fulfilmentMethod = $fulfilmentMethod;
        $this->handled = $handled;
        $this->trackAndTrace = $trackAndTrace;
        $this->handlingResult = $handlingResult;
        $this->processingResult = $processingResult;
        $this->processingDateTime = $processingDateTime;
    }

    public function returnNumber(): ReturnNumber
    {
        return $this->returnNumber;
    }

    public function orderId(): \BolCom\RetailerApi\Model\Order\OrderId
    {
        return $this->orderId;
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function registrationDateTime(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->registrationDateTime;
    }

    public function returnReason(): string
    {
        return $this->returnReason;
    }

    public function returnReasonComments(): string
    {
        return $this->returnReasonComments;
    }

    public function customerDetails(): \BolCom\RetailerApi\Model\Customer\CustomerDetails
    {
        return $this->customerDetails;
    }

    public function fulfilmentMethod(): \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod
    {
        return $this->fulfilmentMethod;
    }

    public function handled(): bool
    {
        return $this->handled;
    }

    public function trackAndTrace(): \BolCom\RetailerApi\Model\Transport\TrackAndTrace
    {
        return $this->trackAndTrace;
    }

    public function handlingResult(): HandlingResult
    {
        return $this->handlingResult;
    }

    public function processingResult(): ProcessingResult
    {
        return $this->processingResult;
    }

    public function processingDateTime(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->processingDateTime;
    }

    public function withReturnNumber(ReturnNumber $returnNumber): ReturnItem
    {
        return new self($returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withOrderId(\BolCom\RetailerApi\Model\Order\OrderId $orderId): ReturnItem
    {
        return new self($this->returnNumber, $orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withTitle(string $title): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withRegistrationDateTime(\BolCom\RetailerApi\Model\DateTime $registrationDateTime): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withReturnReason(string $returnReason): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withReturnReasonComments(string $returnReasonComments): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withCustomerDetails(\BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withFulfilmentMethod(\BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $fulfilmentMethod): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withHandled(bool $handled): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withTrackAndTrace(\BolCom\RetailerApi\Model\Transport\TrackAndTrace $trackAndTrace): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $trackAndTrace, $this->handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withHandlingResult(HandlingResult $handlingResult): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $handlingResult, $this->processingResult, $this->processingDateTime);
    }

    public function withProcessingResult(ProcessingResult $processingResult): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $processingResult, $this->processingDateTime);
    }

    public function withProcessingDateTime(\BolCom\RetailerApi\Model\DateTime $processingDateTime): ReturnItem
    {
        return new self($this->returnNumber, $this->orderId, $this->ean, $this->title, $this->registrationDateTime, $this->returnReason, $this->returnReasonComments, $this->customerDetails, $this->fulfilmentMethod, $this->handled, $this->trackAndTrace, $this->handlingResult, $this->processingResult, $processingDateTime);
    }

    public static function fromArray(array $data): ReturnItem
    {
        if (! isset($data['returnNumber']) || ! \is_int($data['returnNumber'])) {
            throw new \InvalidArgumentException("Key 'returnNumber' is missing in data array or is not a int");
        }

        $returnNumber = ReturnNumber::fromScalar($data['returnNumber']);

        if (! isset($data['orderId']) || ! \is_string($data['orderId'])) {
            throw new \InvalidArgumentException("Key 'orderId' is missing in data array or is not a string");
        }

        $orderId = \BolCom\RetailerApi\Model\Order\OrderId::fromString($data['orderId']);

        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        if (! isset($data['title']) || ! \is_string($data['title'])) {
            throw new \InvalidArgumentException("Key 'title' is missing in data array or is not a string");
        }

        $title = $data['title'];

        if (! isset($data['registrationDateTime']) || ! \is_string($data['registrationDateTime'])) {
            throw new \InvalidArgumentException("Key 'registrationDateTime' is missing in data array or is not a string");
        }

        $registrationDateTime = \BolCom\RetailerApi\Model\DateTime::fromString($data['registrationDateTime']);

        if (! isset($data['returnReason']) || ! \is_string($data['returnReason'])) {
            throw new \InvalidArgumentException("Key 'returnReason' is missing in data array or is not a string");
        }

        $returnReason = $data['returnReason'];

        if (! isset($data['returnReasonComments']) || ! \is_string($data['returnReasonComments'])) {
            throw new \InvalidArgumentException("Key 'returnReasonComments' is missing in data array or is not a string");
        }

        $returnReasonComments = $data['returnReasonComments'];

        if (! isset($data['customerDetails']) || ! \is_array($data['customerDetails'])) {
            throw new \InvalidArgumentException("Key 'customerDetails' is missing in data array or is not an array");
        }

        $customerDetails = \BolCom\RetailerApi\Model\Customer\CustomerDetails::fromArray($data['customerDetails']);

        if (! isset($data['fulfilmentMethod']) || ! \is_string($data['fulfilmentMethod'])) {
            throw new \InvalidArgumentException("Key 'fulfilmentMethod' is missing in data array or is not a string");
        }

        $fulfilmentMethod = \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod::fromValue($data['fulfilmentMethod']);

        if (! isset($data['handled']) || ! \is_bool($data['handled'])) {
            throw new \InvalidArgumentException("Key 'handled' is missing in data array or is not a bool");
        }

        $handled = $data['handled'];

        if (! isset($data['trackAndTrace']) || ! \is_string($data['trackAndTrace'])) {
            throw new \InvalidArgumentException("Key 'trackAndTrace' is missing in data array or is not a string");
        }

        $trackAndTrace = \BolCom\RetailerApi\Model\Transport\TrackAndTrace::fromScalar($data['trackAndTrace']);

        if (! isset($data['handlingResult']) || ! \is_string($data['handlingResult'])) {
            throw new \InvalidArgumentException("Key 'handlingResult' is missing in data array or is not a string");
        }

        $handlingResult = HandlingResult::fromValue($data['handlingResult']);

        if (! isset($data['processingResult']) || ! \is_string($data['processingResult'])) {
            throw new \InvalidArgumentException("Key 'processingResult' is missing in data array or is not a string");
        }

        $processingResult = ProcessingResult::fromValue($data['processingResult']);

        if (! isset($data['processingDateTime']) || ! \is_string($data['processingDateTime'])) {
            throw new \InvalidArgumentException("Key 'processingDateTime' is missing in data array or is not a string");
        }

        $processingDateTime = \BolCom\RetailerApi\Model\DateTime::fromString($data['processingDateTime']);

        return new self(
            $returnNumber,
            $orderId,
            $ean,
            $title,
            $registrationDateTime,
            $returnReason,
            $returnReasonComments,
            $customerDetails,
            $fulfilmentMethod,
            $handled,
            $trackAndTrace,
            $handlingResult,
            $processingResult,
            $processingDateTime
        );
    }
}
