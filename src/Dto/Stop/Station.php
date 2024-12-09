<?php

namespace DRM\Dto\Stop;

use DRM\Dto\Generics\Location;
use DRM\Dto\Generics\Products;

class Station
{
    public string $type;
    public string $id;
    public string $name;
    public Location $location;
    public Products $products;
}
