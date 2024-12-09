<?php

namespace DRM\Dto\Trip;

use DRM\Dto\Operator;

class LineDTO
{
    public string $type;
    public string $id;
    public string $fahrtNr;
    public string $name;
    public bool $public;
    public string $adminCode;
    public string $productName;
    public string $mode;
    public string $product;
    public Operator $operator;
}
