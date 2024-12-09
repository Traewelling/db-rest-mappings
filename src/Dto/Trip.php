<?php

namespace DRM\Dto;


class Trip
{
    public string $tripId;
    public Stop $stop;
    public string $when;
    public string $plannedWhen;
    public int $delay;
    public string $platform;
    public string $plannedPlatform;
    public string $prognosisType;
    public string $direction;
    public ?string $provenance;
    public Line $line;
    public array $remarks;
    public ?string $origin;
    public Destination $destination;
    public CurrentTripPosition $currentTripPosition;
    //public ?string $loadFactor;
}
