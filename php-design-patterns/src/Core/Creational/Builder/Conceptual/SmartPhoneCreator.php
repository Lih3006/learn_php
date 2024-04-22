<?php

namespace Core\Creational\Builder\Conceptual;
class SmartPhoneCreator
{
    protected SmartPhoneBuilderInterface $smartPhone;
    public function __construct(
        $smartPhone
    ) {
        $this->smartPhone = $smartPhone;
    }
    public function buildPhone(): SmartPhone
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addSensors();
        $this->smartPhone->addModel();
        var_dump($this->smartPhone->getSmartPhone());
        return $this->smartPhone->getSmartPhone();

    }

    public function buildPhoneWithputSensors(): SmartPhone
    {
        $this->smartPhone->addGpu();
        $this->smartPhone->addCpu();
        $this->smartPhone->addRam();
        $this->smartPhone->addModel();
        var_dump($this->smartPhone->getSmartPhone());
        return $this->smartPhone->getSmartPhone();

    }
}
