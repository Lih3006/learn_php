<?php

//use Core\Creational\Builder\Conceptual\Request\BuilderRequest;
//use Core\Creational\Builder\Conceptual\Request\MethodsEnum;
//use Core\Creational\Builder\Practical\Address;
use Core\Creational\Builder\Practical\Enums\Role;
//use Core\Creational\Builder\Practical\Phone;
//use Core\Creational\Builder\Practical\User;


use Core\Creational\Builder\Practical\UserBuilder;

require_once '../vendor/autoload.php';



//$carlosFounder->setAddress(
//    new Address(
//        street: 'Rua X',
//        city: 'São Paulo',
//        state: 'SP',
//        postalCode:'36810000',
//        country: 'Brazil',
//    )
//);
//
//$carlosFounder->setPhone(
//    new Phone(
//        ddd: '11',
//        number: '999999999',
//        active: true,
//    )
//);

$user = (new UserBuilder)->setBasicInfo(
    firstName: 'Carlos',
    lastName: 'Founder',
    email: 'carlos@gmail.com',
    age: '30',
    role: Role::F,
    active: true)->setAddress(
    street: 'Rua X',
    city: 'São Paulo',
    state: 'SP',
    postalCode:'36810000',
    country: 'Brazil',
)->setPhone(
    ddd: '11',
    number: '999999999',
    active: true,
)->build();



//use Core\Creational\Builder\Conceptual\ApplePhone;
//use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
//use Core\Creational\Builder\Conceptual\SamsungPhone;
//use Core\Creational\Builder\Conceptual\SmartPhoneCreator;
//

//
//$galaxyS20 = new SmartPhoneBuilder(
//     new SamsungPhone(),
//    [
//        'gpu' => 'Adreno 650',
//        'cpu' => 'Qualcomm SM8250 Snapdragon 865',
//        'ram' => 12, // '12 GB RAM',
//        'sensors' => 'Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer',
//        'model' => 'Galaxy S20',
//    ]
//);
//
//$smartPhoneCreator = new SmartPhoneCreator($galaxyS20);
//$smartPhoneCreator->buildPhoneWithputSensors();
//echo '<br>';
//echo '<br>';
//
//$iphone11 = new SmartPhoneBuilder(
//     new ApplePhone(),
//    [
//        'gpu' => 'Apple GPU (4-core graphics)',
//        'cpu' => 'Apple A13 Bionic (7 nm+)',
//        'ram' => 12, // '12 GB RAM',
//        'sensors' => ['Face ID', 'accelerometer', 'gyro', 'proximity', 'compass', 'barometer'],
//        'model' => 'iPhone 11',
//    ]
//);
//
//echo '<br>';
//$smartPhoneCreator = new SmartPhoneCreator($iphone11);
//$smartPhoneCreator->buildPhone();

//$request = new BuilderRequest();
//$request->url('https://www.google.com');
//$request->payload(['name' => 'John', 'age' => 30]);
//$request->method(MethodsEnum::GET);
//$request->build();

