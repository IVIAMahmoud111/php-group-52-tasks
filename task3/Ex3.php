<?php
/*Ex3  search and use the following array methods ( count , in_array , array_key_exists , array_keys , array_values , array_sum , end , array_rand , array_merge , array_replace , array_shift , array_unshift , array_push , array_pop , array_slice , array_splice )
make 1 example on each of the following array methods*/



//count:  Counts the number of elements in an array.
$fruits = ["apple", "banana", "cherry"];
$count = count($fruits); // $count will be 3
var_dump($count);

//in_array: Checks if a specific value exists in an array.
$numbers = [1, 2, 3, 4, 5];
$check = in_array(6, $numbers); // $check will be false 
var_dump($check);

//array_key_exists: Checks if a specific key exists in an array.
$user = ["name" => "John", "age" => 30, "email" => "john@example.com"];
$check = array_key_exists("age", $user); // $check will be true
var_dump($check);

//array_keys: Returns all the keys from an array.
$colors = ["red" => "#FF0000", "green" => "#00FF00", "blue" => "#0000FF"];
$keys = array_keys($colors); // $keys will be ["red", "green", "blue"]
var_dump($keys);

//array_values: Returns all the values from an array.
$grades = ["John" => 85, "Alice" => 92, "Bob" => 78];
$values = array_values($grades); // $values will be [85, 92, 78]
var_dump($values);

//array_sum: Calculates the sum of all values in an array.
$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers); // $sum will be 15
print_r($sum);

//end: Moves the internal pointer to the last element of an array and returns that element.
$fruits = ["apple", "banana", "cherry"];
$lastFruit = end($fruits); // $lastFruit will be "cherry"
print_r($lastFruit);

//array_rande: Picks one or more random keys from an array.
$cards = ["Ace", "King", "Queen", "Jack", "10", "7"];
$randomcard = $cards[array_rand($cards)];
print_r($randomcard);

//array_merge: Merges one or more arrays into a single array.
$first = ["a" => 1, "b" => 2];
$second = ["b" => 3, "c" => 4];
$merged = array_merge($first, $second); // $merged will be Array ( [a] => 1 [b] => 3 [c] => 4 )
print_r($merged);

//array_replace: Replaces values in the first array with values from subsequent arrays, based on keys.
$first = ["a" => 1, "b" => 2];
$second = ["b" => 3, "c" => 4];
$replaced = array_replace($first, $second); // $replaced will be ["a" => 1, "b" => 3, "c" => 4]
var_dump($replaced);

//array_shift: Removes and returns the first element from an array.
$fruits = ["apple", "banana", "cherry"];
$firstFruit = array_shift($fruits); // $firstFruit will be "apple"
var_dump($firstFruit);

//array_unshift: Adds one or more elements to the beginning of an array.
$fruits = ["banana", "cherry"];
array_unshift($fruits, "apple"); // $fruits will be ["apple", "banana", "cherry"]
var_dump($fruits); // It continues with the previous example

//array_push: Adds one or more elements to the end of an array.
$fruits = ["apple", "banana"];
array_push($fruits, "cherry"); // $fruits will be ["apple", "banana", "cherry"]
print_r($fruits);

//array_pop: Removes and returns the last element from an array.
$fruits = ["apple", "banana", "cherry"];
$lastFruit = array_pop($fruits); // $lastFruit will be "cherry"
print_r($lastFruit);

//array_slice: Extracts a portion of an array.
$numbers = [1, 2, 3, 4, 5];
$slice = array_slice($numbers, 2, 2); // $slice will be [3, 4]
var_dump($slice);

// array_splice: Removes a portion of an array and replaces it with something else.
$colors = ["red", "green", "blue"];
array_splice($colors, 1, 1, "yellow"); // $colors will be ["red", "yellow", "blue"]
var_dump($colors);

?>