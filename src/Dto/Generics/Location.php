<?php

namespace DRM\Dto\Generics;

class Location implements \JsonSerializable
{
    public string $type;
    public ?string $id;
    public float $latitude;
    public float $longitude;

    public function jsonSerialize()
    {
        $return = [
            'type' => $this->type,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude
        ];

        if ($this->id) {
            $return['id'] = $this->id;
        }

        return $return;
    }
}
