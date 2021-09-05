<?php

//array index number
$biodata = ["salma,", 19, "idn", "lampung", 4.5, true, false, 2000];

//echo $biodata {3};

//array asosiatif
$salma = [
  "id"=> 1,
  "name"=> "salma",
  "age"=> 19,
];

echo $salma["id"];

//array di dalam array
$salma = [
    "id"=> 1,
    "name"=> "salma",
    "age"=> 19,
    "address" => [
       "city" => "lampung",
       "country" => "indonesia"
    ]
  ];
echo $salma["address"]["city"]; 

?>