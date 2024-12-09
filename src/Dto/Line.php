<?php

namespace DRM\Dto;

class Line
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

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->fahrtNr = $data['fahrtNr'];
        $this->name = $data['name'];
        $this->public = $data['public'];
        $this->adminCode = $data['adminCode'];
        $this->productName = $data['productName'];
        $this->mode = $data['mode'];
        $this->product = $data['product'];
        $this->operator = new Operator($data['operator']);
    }
}
