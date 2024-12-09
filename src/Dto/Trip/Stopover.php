<?php

namespace DRM\Dto\Trip;

use DRM\Dto\Stop;

class Stopover
{
    public Stop $stop;
    public ?string $arrival;
    public ?string $plannedArrival;
    public ?int $arrivalDelay;
    public ?string $arrivalPlatform;
    public ?string $arrivalPrognosisType;
    public ?string $plannedArrivalPlatform;
    public ?string $departure;
    public ?string $plannedDeparture;
    public ?int $departureDelay;
    public ?string $departurePlatform;
    public ?string $departurePrognosisType;
    public ?string $plannedDeparturePlatform;
}
