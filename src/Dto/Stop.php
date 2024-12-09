<?php

namespace DRM\Dto;

use JsonSerializable;

class Stop implements JsonSerializable
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
    public ?Station $station = null;
    public ?int $distance = null;

    public function jsonSerialize()
    {
        $return = [
            'type' => $this->type,
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'products' => $this->products,
        ];

        if ($this->station) {
            $return['station'] = $this->station;
        }

        if ($this->distance) {
            $return['distance'] = $this->distance;
        }

        return $return;
    }
}
