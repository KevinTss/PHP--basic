# PHP Basic tutorial

Tutorial link: https://www.grafikart.fr/formations/php
Official PHP documentation: https://www.php.net/docs.php

## Install PHP

MacOS include by default a version of PHP
Check it taping that command line in terminal:
```
php -v
```

Run a PHP script (ex: run index.php)

```
php ./index.php
```

## Variables

```
$name = 'Kevin';
$last_name = "Doe";
$note = 10;
$total = $note + 4;
$fullName = $name . $last_name;
```

If you want to interprete special character or variables you need to use the double quote `"$var1/n$var2"`

## Arrays

```
$notes = [10, 20];

$student = [
  'name' => "John",
  'notes' => [10, 20, 8]
];
```

## Conditions

```
if ($note > 10) {
  echo 'Good';
} elseif ($note === 10) {
  echo 'Just';
} else {
  echo 'Bad';
}
```

## Loops

```
for ($i = 0; $i < 10; $i = $i + 1) {
  echo "$i\n";
}
```

## Functions

TBD...

## Custom Functions

TBD...

## Require & Include