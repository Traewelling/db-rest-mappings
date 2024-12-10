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
    public ?string $platform = null;
    public ?string $plannedPlatform = null;
    public ?string $prognosisType = null;
    public string $direction;
    public ?string $provenance = null;
    public Line $line;
    public array $remarks;
    public ?string $origin = null;
    public Stop $destination;
    public ?CurrentTripPosition $currentTripPosition = null;
    public ?string $loadFactor = null;

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
