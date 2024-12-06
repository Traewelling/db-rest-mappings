<?php

namespace DRM;

class Location
{
    public string $type;
    public string $id;
    public float $latitude;
    public float $longitude;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
