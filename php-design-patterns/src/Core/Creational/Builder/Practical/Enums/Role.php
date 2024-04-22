<?php

namespace Core\Creational\Builder\Practical\Enums;

enum Role: string
{
    case F = 'Founder';
    case A = 'Admin';
    case U = 'User';
}