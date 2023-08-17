<?php


// INDEXED ARRAYS
$ids = array(23, 55, 12);
$people = array('Kevin', 'Jeremy', 'Sara');

// Declaring array
$cars = ['Honda', 'Toyota', 'Ford'];
// Adding element at a position
$cars[3] = 'Chevy';
// Adding element at the end
echo '----------------INDEXED ARRAYS---------------<br>';
print_r ($ids);  
echo '<br>';
print_r ($people);  
echo '<br>';
var_dump($people);
echo '<br>';
var_dump($cars);
echo '<br>';

// ASSOCIATIVE ARRAYS
$people_runs = array ( 'Brad' => 10, 'Jose' => 20, 'George' => 30 );
$score_board = [ 100 => 'Manish', 200 => 'Domino', 300 => 'Keenu' ];
//adding element
$people_runs ['Maverick'] = '99';
$score_board [44] = 'Teletubbies';
echo '----------------ASSOCIATIVE ARRAYS---------------<br>';
print_r($people_runs);  
echo '<br>';
print_r ($score_board);  
echo '<br>';
print_r ( $people_runs ['Jose']);
echo '<br>';
print_r ( $score_board [200]);


// MULTI-DIMENSIONAL ARRAYS
$carsCollection = array ( 
    array('Honda', 10, 20),
    array('BMW', 130, 220),
    array('Mercedes', 120, 270),
    array('Ford', 160, 207),
    array('Maruti', 160, 20)
);
echo '----------------MULTI-DIMENSIONAL ARRAYS---------------<br>';
print_r($carsCollection);  
echo '<br>';
echo $carsCollection[0][0];  
echo '<br>';
echo $carsCollection[1][0];  
echo '<br>';
echo $carsCollection[0][1];  










?>