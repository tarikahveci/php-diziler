<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
$arr_map = array_map(function ($e) {
    global $planets;
    if ($e == "") {
        return NULL;
    } else {
        return $e;
    }
},
    $planets);

$arr_filter = array_filter($arr_map, function ($e) {
    return $e != NULL ? $e : false;
});

function myRandomArr($i)
{
    global $arr_filter;
    $result = array_flip($arr_filter);
    return array_rand($result, $i);
}


print_r(myRandomArr(2));
print_r(myRandomArr(3));
print_r(myRandomArr(2));
print_r(myRandomArr(4));
print_r(myRandomArr(5));
?>