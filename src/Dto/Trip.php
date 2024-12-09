<?php

namespace DRM\Dto;


use DRM\Dto\Generics\Line;
use DRM\Dto\Trip\Remark;
use DRM\Dto\Trip\Stopover;

class Trip
{
    public Stop $origin;
    public Stop $destination;
    public string $departure;
    public string $plannedDeparture;
    public ?int $departureDelay;
    public string $arrival;
    public string $plannedArrival;
    public ?int $arrivalDelay;
    public bool $reachable;
    public Line $line;
    public string $direction;
    public ?string $arrivalPlatform;
    public ?string $plannedArrivalPlatform;
    public ?string $arrivalPrognosisType;
    public ?string $departurePlatform;
    public ?string $plannedDeparturePlatform;
    public ?string $departurePrognosisType;

    /**
     * @var Stopover[]
     */
    public array $stopovers; // Array of StopoverDTO

    /**
     * @var Remark[]
     */
    public array $remarks; // Array of RemarkDTO
    public string $id;
    public int $realtimeDataUpdatedAt;
}
