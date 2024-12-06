<?php

namespace DRM;

class Stop
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->location = new Location($data['location']);
        $this->products = new Products($data['products']);
    }
}