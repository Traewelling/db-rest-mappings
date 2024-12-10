<?php

namespace DRM\Dto\Trip;

use DRM\Dto\Stop;

class Stopover
{
    public Stop $stop;
    public ?string $arrival = null;
    public ?string $plannedArrival = null;
    public ?int $arrivalDelay = null;
    public ?string $arrivalPlatform = null;
    public ?string $arrivalPrognosisType = null;
    public ?string $plannedArrivalPlatform = null;
    public ?string $departure = null;
    public ?string $plannedDeparture = null;
    public ?int $departureDelay = null;
    public ?string $departurePlatform = null;
    public ?string $departurePrognosisType = null;
    public ?string $plannedDeparturePlatform = null;
}
