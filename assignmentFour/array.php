<?php

$employee = [


    [
        "id" => 1,
        "firstName" => "Rofyda",
        "lastName" => "sayed",
        "salary" => 6000,
        "email" => "rofyda@mail.com",
        "isActive" => 1


    ],

    [

        "id" => 2,
        "firstName" => "mai",
        "lastName" => "sayed",
        "salary" => 10500,
        "email" => "mai@mail.com",
        "isActive" => 0
    ],

    [

        "id" => 3,
        "firstName" => "abdallah",
        "lastName" => "sayed",
        "salary" => 3500,
        "email" => "abdallah@mail.com",
        "isActive" => 1
    ],

    [

        "id" => 4,
        "firstName" => "wafaa",
        "lastName" => "fawzy",
        "salary" => 7000,
        "email" => "wafaa@mail.com",
        "isActive" => 0
    ],

    [

        "id" => 5,
        "firstName" => "sayed",
        "lastName" => "abdallah",
        "salary" => 4500,
        "email" => "sayed@mail.com",
        "isActive" => 1
    ],

    [

        "id" => 6,
        "firstName" => "mohamed",
        "lastName" => "waleed",
        "salary" => 12000,
        "email" => "mohamed@mail.com",
        "isActive" => 1
    ],

    [
        "id" => 7,
        "firstName" => "haidy",
        "lastName" => "mohamed",
        "salary" => 6000,
        "email" => "haidy@mail.com",
        "isActive" => 0
    ],

    [

        "id" => 8,
        "firstName" => "ahmed",
        "lastName" => "towfik",
        "salary" => 8000,
        "email" => "ahmed@mail.com",
        "isActive" => 1
    ],

    [

        "id" => 9,
        "firstName" => "ayman",
        "lastName" => "mohamed",
        "salary" => 3000,
        "email" => "ayman@mail.com",
        "isActive" => 0
    ],

    [

        "id" => 10,
        "firstName" => "yasser",
        "lastName" => "mohamed",
        "salary" =>  9000,
        "email" => "yasser@mail.com",
        "isActive" => 1
    ]

];
///////////////////////#1#///////////////////////////////
foreach ($employee as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key2 => $value2) {
            echo $key2 . " : " . $value2;
        }
        echo " <br>";
    }
    echo " <br>";
}
echo "******************************************************";
echo " <br>";
//////////////////////#2#/////////////////////////////
foreach ($employee as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key3 => $value3) {

            if ($key3 == "salary") {

                if ($value3 < 5000) {
                    echo " Jonior <br>";
                } elseif ($value3 > 5000 && $value3 < 10000) {
                    echo " Senior <br>";
                } elseif ($value3 > 10000) {
                    echo " Tech Lead <br>";
                }
            }
        }
    }
}
echo " <br>";
echo "******************************************************";
echo " <br>";
///////////////////////#3#//////////////////////////////////
session_start();
foreach ($employee as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $userActivation => $activeStatus) {

            if ($userActivation == "isActive") {
                if ($activeStatus == 1) {

                    $_SESSION['id'] = $value["id"];

                    print_r($_SESSION);
                    echo "<br>";
                }
            }
        }
    }
}
echo " <br>";
echo "******************************************************";
echo " <br>";
///////////////////////#4#//////////////////////////////////
foreach ($employee as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $user => $status) {

            if ($user == "isActive") {
                if ($status == 1) {

                    echo "Active user : " . $value["firstName"] . " " . $value["lastName"] . "<br>";
                }
            }
        }
    }
}
