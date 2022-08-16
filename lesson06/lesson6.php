<?php
$array_one = [];
array_push($array_one, [
    "info" => [
        "name" => "田中",
        "division" => "1",
        "age" => "25"
    ],
    "skill" => [
        "lang" => ["PHP", "Ruby"],
        "fw" => ["Laravel", "CakePHP", "Rails"]
    ],
    "description" => "バックエンドエンジニア"
]);
$array_two = [];
array_push($array_two,[
    "info" => [
        "name" => "山田",
        "division" => "2",
        "age" => "23"
    ],
    "skill" => [
        "lang" => ["HTML", "CSS", "JS"],
        "fw" => ["Vue.js"]
    ],
    "description" => "フロントエンジニア"
]);
$array_three = [];
array_push($array_three,[
    "info" => [
        "name" => "佐藤",
        "division" => "2",
        "age" => "20"
    ],
    "skill" => [
        "lang" => ["PHP"],
        "fw" => []
    ],
    "description" => "PHP初学者"
]);
$array_merge = array_merge($array_one, $array_two, $array_three);
print_r($array_merge);
?>