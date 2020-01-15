<?php

// 0 to 9 loop
for ($i = 0; $i < 10; $i = $i + 1) {
  echo "$i\n";
}

$i = 0;
while ($i < 10) {
  echo "$i\n";
  $i = $i + 1;
}

$array = [10, 11, 12, 14];

foreach ($array as $number) {
  echo "$number\n";
}

$assoc = [
  'CEO' => 'John',
  'CMO' => 'Jane'
];

foreach ($assoc as $role => $name) {
  echo "$name is the $role of the company\n";
}