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
    public ?int $departureDelay = null;
    public string $arrival;
    public string $plannedArrival;
    public ?int $arrivalDelay = null;
    public ?bool $reachable = null;
    public Line $line;
    public string $direction;
    public ?string $arrivalPlatform = null;
    public ?string $plannedArrivalPlatform = null;
    public ?string $arrivalPrognosisType = null;
    public ?string $departurePlatform = null;
    public ?string $plannedDeparturePlatform = null;
    public ?string $departurePrognosisType = null;

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
