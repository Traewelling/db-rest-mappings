<?php

namespace DRM\Dto;

class Station
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
}
