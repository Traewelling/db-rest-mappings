<?php

namespace DRM\Dto;

class Stop
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
}
