<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport;

final class TransportInstruction
{
    private $transporterCode;
    private $trackAndTrace;

    public function __construct(TransporterCode $transporterCode, TrackAndTrace $trackAndTrace)
    {
        $this->transporterCode = $transporterCode;
        $this->trackAndTrace = $trackAndTrace;
    }

    public function transporterCode(): TransporterCode
    {
        return $this->transporterCode;
    }

    public function trackAndTrace(): TrackAndTrace
    {
        return $this->trackAndTrace;
    }

    public function withTransporterCode(TransporterCode $transporterCode): TransportInstruction
    {
        return new self($transporterCode, $this->trackAndTrace);
    }

    public function withTrackAndTrace(TrackAndTrace $trackAndTrace): TransportInstruction
    {
        return new self($this->transporterCode, $trackAndTrace);
    }

    public static function fromArray(array $data): TransportInstruction
    {
        if (! isset($data['transporterCode']) || ! \is_string($data['transporterCode'])) {
            throw new \InvalidArgumentException("Key 'transporterCode' is missing in data array or is not a string");
        }

        $transporterCode = TransporterCode::fromValue($data['transporterCode']);

        if (! isset($data['trackAndTrace']) || ! \is_string($data['trackAndTrace'])) {
            throw new \InvalidArgumentException("Key 'trackAndTrace' is missing in data array or is not a string");
        }

        $trackAndTrace = TrackAndTrace::fromScalar($data['trackAndTrace']);

        return new self($transporterCode, $trackAndTrace);
    }
}