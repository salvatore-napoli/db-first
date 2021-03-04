<?php
$cars = [
	[
		'brand' => 'Ford',
		'model' => 'Focus',
		'productionYear' => '2020',
		'color' => 'blue',
		'type' => 'sedan',
		'bluetooth' => true,
		'seats' => 5,
		'airbags' => true,
		'price' => 11300,
		'air conditioning' => true,
		'autopilot' => false
	],

	[
		'brand' => 'BMW',
		'model' => 'Gran Coupé',
		'productionYear' => '2021',
		'color' => 'black',
		'type' => 'coupe',
		'bluetooth' => false,
		'seats' => 4,
		'airbags' => true,
		'price' => 32000,
		'air conditioning' => true,
		'autopilot' => false
	]
];

foreach ($cars as $car) {
	print_r($car);
	echo '<br /><br />';
}
