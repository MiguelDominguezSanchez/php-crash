<?php
// Simple Array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[0];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com'
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'
  ],
  [
    'first_name' => 'Jan',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
  ]
];

// echo $people[1]['email'];
var_dump(json_encode($people));
