<?php
	
$name = 'Lorem ipsum';

$age = 399;

$is_male = true;

if ($is_male) {
	echo $name . ' is a boy.';
} else {
	echo $name . ' is not a boy.';
}

echo '<br>';

if ($age<18) {
	echo $name . ' is under age';
} else if ($age <= 100) {
	echo $name . ' is ok';
} else {
	echo $name . ' is not ok..';
}

echo '<br>';

if ($age > 30 && $is_male) {
	echo $name . ' is a man';
} else{
	echo $name . ' is not a man';
}


 ?>