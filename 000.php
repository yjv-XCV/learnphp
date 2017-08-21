<?php
$members = ['Joseph', 'Yong Jun', 'Davion'];

for($i=0; $i<3; ++$i){
	echo $members[$i] . '<br>';
}

$member->name = 'Joseph';
$member->age = 22;
$member->description = 'Handsome';

foreach ($member as $key => $value) {
	echo $key . ' : ' . $value . '<br>';
}

 ?>