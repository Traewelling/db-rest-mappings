<?php

namespace DRM;

class CurrentTripPosition
{
    public string $type;
    public float $latitude;
    public float $longitude;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
