<?php

namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;

class User
{
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected string $email,
        protected string $age,
        protected Role $role,
        protected bool $active = false,
        protected ?Address $address = null,
        protected ?Phone $phone = null,
    )
    {
    // $this->>validate();
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function setPhone(Phone $phone): void
    {
        $this->phone = $phone;
    }
}