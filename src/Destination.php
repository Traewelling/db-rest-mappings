<?php

namespace DRM;

class Destination
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
    public ?Station $station;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->location = new Location($data['location']);
        $this->products = new Products($data['products']);
        $this->station = isset($data['station']) ? new Station($data['station']) : null;
    }
}
