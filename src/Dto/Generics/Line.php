<?php

namespace DRM\Dto\Generics;

class Line
{
    public string $type;
    public string $id;
    public string $fahrtNr;
    public string $name;
    public bool $public;
    public ?string $adminCode = null;
    public string $productName;
    public string $mode;
    public string $product;
    public ?Operator $operator;
}
