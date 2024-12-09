<?php

namespace DRM\Dto;


use DRM\Dto\Departure\CurrentTripPosition;
use DRM\Dto\Generics\Line;
use JsonSerializable;

class Departure implements JsonSerializable
{
    public string $tripId;
    public Stop $stop;
    public string $when;
    public string $plannedWhen;
    public ?int $delay;
    public ?string $platform;
    public ?string $plannedPlatform;
    public ?string $prognosisType;
    public string $direction;
    public ?string $provenance;
    public Line $line;
    public array $remarks;
    public ?string $origin;
    public Stop $destination;
    public ?CurrentTripPosition $currentTripPosition;
    public ?string $loadFactor;

    public function jsonSerialize()
    {
        $return = [
            'tripId' => $this->tripId,
            'stop' => $this->stop,
            'when' => $this->when,
            'plannedWhen' => $this->plannedWhen,
            'delay' => $this->delay,
            'platform' => $this->platform,
            'plannedPlatform' => $this->plannedPlatform,
            'prognosisType' => $this->prognosisType,
            'direction' => $this->direction,
            'line' => $this->line,
            'remarks' => $this->remarks,
            'destination' => $this->destination,
            'provenance' => $this->provenance,
            'origin' => $this->origin
        ];

        if ($this->currentTripPosition) {
            $return['currentTripPosition'] = $this->currentTripPosition;
        }

        if ($this->loadFactor) {
            $return['loadFactor'] = $this->loadFactor;
        }

        return $return;
    }
}
