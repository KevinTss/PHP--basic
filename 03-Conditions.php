<?php
// $note = readline('Enter a number:');
// convert into a integer
$note = (int)readline('Enter a number:');

if ($note > 10) {
  echo 'Good';
} elseif ($note === 10) {
  echo 'Just';
} else {
  echo 'Bad';
}

$number = (int)readlin('Enter a number:');

switch ($number) {
  case 1:
    echo 'Do something';
    break;
  case 2: 
    echo 'Do something else';
    break;
  default:
    echo 'Do that by default';
}