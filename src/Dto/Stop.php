<?php

namespace DRM\Dto;

use DRM\Dto\Generics\Location;
use DRM\Dto\Generics\Products;
use DRM\Dto\Stop\Station;
use JsonSerializable;

class Stop implements JsonSerializable
{
    public string $type;
    public string $id;
    public string $name;
    public ?Location $location = null;
    public ?Products $products = null;
    public ?Station $station = null;
    public ?int $distance = null;
    /**
     * @var Location[] $entrances
     */
    public ?array $entrances = null;

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

        if ($this->entrances) {
            $return['entrances'] = $this->entrances;
        }

        return $return;
    }
}
