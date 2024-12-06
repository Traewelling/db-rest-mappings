<?php

namespace DRM;

class Operator
{
    public string $type;
    public string $id;
    public string $name;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->name = $data['name'];
    }
}
