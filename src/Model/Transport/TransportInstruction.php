<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport;

final class TransportInstruction
{
    private $transporterCode;
    private $trackAndTrace;

    public function __construct(TransporterCode $transporterCode, TrackAndTrace $trackAndTrace = null)
    {
        if ($trackAndTrace === null && !\Assert\Assertion::choice($transporterCode->toString(), [TransporterCode::BRIEFPOST, TransporterCode::OTHER], 'Track & Trace cannot be left empty for this Transporter Code.')) {
            throw new \InvalidArgumentException('');
        }

        $this->transporterCode = $transporterCode;
        $this->trackAndTrace = $trackAndTrace;
    }

    public function transporterCode(): TransporterCode
    {
        return $this->transporterCode;
    }

    public function trackAndTrace()
    {
        return $this->trackAndTrace;
    }

    public function withTransporterCode(TransporterCode $transporterCode): TransportInstruction
    {
        return new self($transporterCode, $this->trackAndTrace);
    }

    public function withTrackAndTrace(TrackAndTrace $trackAndTrace = null): TransportInstruction
    {
        return new self($this->transporterCode, $trackAndTrace);
    }

    public static function fromArray(array $data): TransportInstruction
    {
        if (! isset($data['transporterCode']) || ! \is_string($data['transporterCode'])) {
            throw new \InvalidArgumentException("Key 'transporterCode' is missing in data array or is not a string");
        }

        $transporterCode = TransporterCode::fromValue($data['transporterCode']);

        if (isset($data['trackAndTrace'])) {
            if (! \is_string($data['trackAndTrace'])) {
                throw new \InvalidArgumentException("Value for 'trackAndTrace' is not a string in data array");
            }

            $trackAndTrace = TrackAndTrace::fromScalar($data['trackAndTrace']);
        } else {
            $trackAndTrace = null;
        }

        return new self($transporterCode, $trackAndTrace);
    }

    public function toArray(): array
    {
        return [
            'transporterCode' => $this->transporterCode->value(),
            'trackAndTrace' => null === $this->trackAndTrace ? null : $this->trackAndTrace->toScalar(),
        ];
    }
}
