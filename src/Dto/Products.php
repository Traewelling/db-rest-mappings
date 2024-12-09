<?php

namespace DRM\Dto;

class Products
{
    public bool $nationalExpress;
    public bool $national;
    public bool $regionalExp;
    public bool $regional;
    public bool $suburban;
    public bool $bus;
    public bool $ferry;
    public bool $subway;
    public bool $tram;
    public bool $taxi;

    public function __construct(array $data)
    {
        $this->nationalExpress = $data['nationalExpress'];
        $this->national = $data['national'];
        $this->regionalExp = $data['regionalExp'];
        $this->regional = $data['regional'];
        $this->suburban = $data['suburban'];
        $this->bus = $data['bus'];
        $this->ferry = $data['ferry'];
        $this->subway = $data['subway'];
        $this->tram = $data['tram'];
        $this->taxi = $data['taxi'];
    }
}
