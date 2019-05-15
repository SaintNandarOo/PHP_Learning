<?php 
$flavors = array(
	'Japanese' => array(
		'hot' => 'wasabi',
		'salty' => 'soy sauce'
	),
	'Chinese' => array(
		'hot' => 'mustard',
		'pepper-salty' => 'prickly ash'
	)
);
$meals = array(
	'breakfast' => ['Walnut Bun','Coffee'],
	'lunch' => ['Cashew Nuts', 'White Mushrooms'],
	'snack' => ['Dried Mulberries','Salted Sesame Crab']
);
$lunches = [
	['Chicken','Eggplant','Rice'],
	['Beef','Scallions','Noodles'],
	['Eggplant','Tofu']
];
$flavors = array(
	'Japanese' => array(
		'hot' => 'wasabi',
		'salty' => 'soy sauce'
	),
	'Chinese' => array(
		'hot' => 'mustard',
		'pepper-salty' => 'prickly ash'
	)
);

print $meals['lunch'][1] . "<br>";
print $meals['snack'][0] ."<br>";
print $lunches[0][0] . "<br>";
print $lunches[2][1]. "<br>";
print $flavors['Japanese']['salty'] . "<br>"; 
print $flavors['Chinese']['hot'];
?>
