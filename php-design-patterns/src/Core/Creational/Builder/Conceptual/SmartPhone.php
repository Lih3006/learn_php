<?php

namespace Core\Creational\Builder\Conceptual;

abstract class SmartPhone
{
    protected ?string $gpu;
    protected ?string $cpu;
    protected ?int $ram;
    protected ?array $sensors;
    protected ?string $model;

    public function __construct(
        ?string $gpu = null,
        ?string $cpu = null,
        ?int $ram = null,
        ?array $sensors = null,
        ?string $model = null){
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->sensors = $sensors;
        $this->model = $model;
        // $this->validate();
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public  function __get($name)
    {
        return $this->{$name};
    }
}