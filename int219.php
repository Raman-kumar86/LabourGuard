<?php
$person=[
    "name" => "John Doe",
    "age" =>28,
    "email" =>"john.doe@example.com",
    "is_student" =>false,
    "skills" =>["HTML","CSS","JavaScript"]
];
$json_data=json_encode($person,JSON_PRETTY_PRINT);
echo "<h3>JSon Output:</h3><pre>$json_data</pre>";
$decoded=json_decode($json_data,true);
echo "<h3>Accessing Data</h3>";
echo "Name: ".$decoded["name"]."<br>";
echo "Email: ".$decoded["email"]."<br>";
echo "Skills: ".implode(" ".$decoded["skills"]);
?>