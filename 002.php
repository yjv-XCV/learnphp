<?php

echo 'Exercise 1';
echo '<br>';

for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j < 5; $j++) { 
		echo '*';
	}
	echo '<br>';
}

echo '<br>';
echo 'Exercise 2';
echo '<br>';

for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo '*';
	}
	echo '<br>';
}

echo '<br>';
echo 'Exercise 3';
echo '<br>';

for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j < 5-$i; $j++) { 
		echo '*';
	}
	echo '<br>';
}

echo '<br>';
echo 'Exercise 4';
echo '<br>';

function odd_number($value){
	if ($value%2 == 0)$value -= 1;
	if($value<=1) return 1;
	else return odd_number($value-2)+$value;
}
echo odd_number(6);

echo '<br>';
echo 'Exercise 5';
echo '<br>';

function sum_all($value) {
	if($value == 1) return 1;
	else return sum_all($value-1)+$value;
}

echo sum_all(6);

echo '<br>';
echo 'Exercise 6';
echo '<br>';

function prime_number($value){
	if($value == 1)return 'false';
	for($i = 2; $i < $value; $i++){
		if($value%$i == 0)return 'false';
	}
	return 'true';
}

echo prime_number(18);




 ?>