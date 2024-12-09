<?php

namespace DRM\Dto;

class Destination
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
    public ?Station $station;
}
