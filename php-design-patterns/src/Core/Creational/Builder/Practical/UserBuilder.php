<?php

namespace Core\Creational\Builder\Practical;
use AllowDynamicProperties;
use Core\Creational\Builder\Practical\Enums\Role;

#[AllowDynamicProperties] class UserBuilder implements UserBuilderInterface{
    private ?User $user = null;
    public function __construct(){
        $this->reset();
}

    public function reset(): void{
        $this->user = null;
}
    public function setBasicInfo(
    string $firstName,
    string $lastName,
    string $email,
    string $age,
    Role $role,
    bool $active = false,
): UserBuilderInterface
    {
        $this->user = new User(
            firstName: $firstName,
            lastName: $lastName,
            email: $email,
            age: $age,
            role: $role,

        );
        return $this;
    }

    public function  setAddress(
    string $street,
    string $city,
    string $state,
    string $postalCode,
    string $country,
): UserBuilderInterface{
        $this->address = new Address(
            street: $street,
            city: $city,
            state: $state,
            postalCode: $postalCode,
            country: $country,
        );
        $this->user->setAddress($this->address);
        return $this;
    }

    public function setPhone(
    string $ddd,
    string $number,
    bool $active = true,
): UserBuilderInterface{
        $this->Phone = new Phone(
            ddd: $ddd,
            number: $number,
            active: $active,
        );
        $this->user->setPhone($this->phone);
        return $this;
    }

    public function build(): User{
     return $this->user;
    }
}