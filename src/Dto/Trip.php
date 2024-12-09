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

    public function __construct(array $data)
    {
        $this->tripId = $data['tripId'];
        $this->stop = new Stop($data['stop']);
        $this->when = $data['when'];
        $this->plannedWhen = $data['plannedWhen'];
        $this->delay = $data['delay'];
        $this->platform = $data['platform'];
        $this->plannedPlatform = $data['plannedPlatform'];
        $this->prognosisType = $data['prognosisType'];
        $this->direction = $data['direction'];
        $this->provenance = $data['provenance'];
        $this->line = new Line($data['line']);
        $this->remarks = $data['remarks'];
        $this->origin = $data['origin'];
        $this->destination = new Destination($data['destination']);
        $this->currentTripPosition = new CurrentTripPosition($data['currentTripPosition']);
        //$this->loadFactor = $data['loadFactor'] ?? null;
    }
}
