<?php


namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;

interface UserBuilderInterface
{   public function reset(): void;
    public function setBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        string $age,
        Role $role,
        bool $active = false,
    ): UserBuilderInterface;

    public function  setAddress(
        string $street,
        string $city,
        string $state,
        string $postalCode,
        string $country,
    ): UserBuilderInterface;

    public function setPhone(
        string $ddd,
        string $number,
        bool $active = true,
    ): UserBuilderInterface;

    public function build(): User;
}