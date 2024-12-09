<?php

namespace DRM\Dto\Trip;


use DRM\Dto\Stop;

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
    public LineDTO $line;
    public string $direction;
    public ?string $arrivalPlatform;
    public ?string $plannedArrivalPlatform;
    public ?string $arrivalPrognosisType;
    public ?string $departurePlatform;
    public ?string $plannedDeparturePlatform;
    public ?string $departurePrognosisType;

    /**
     * @var StopoverDTO[]
     */
    public array $stopovers; // Array of StopoverDTO

    /**
     * @var RemarkDTO[]
     */
    public array $remarks; // Array of RemarkDTO
    public string $id;
    public int $realtimeDataUpdatedAt;
}
