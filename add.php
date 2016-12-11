<?php 
	require 'vendor/autoload.php';
	$faker = Faker\Factory::create();
	require_once 'core/init.php';
	require 'config.php';

	echo __DIR__;

$product = new Product();

try {
	for($i = 0 ; $i < 10 ; $i++){
	    $product->create(array(
			'product_name' => $faker->firstName,
			'product_price' => $faker->numberBetween(10,999),
			'product_description' => $faker->paragraph,
			'product_image' => 'http://placehold.it/50x80',
			'product_reviews' => $faker->randomDigitNotNull,
			'product_reference' => $faker->randomDigit(),
			'product_quantity' => $faker->randomDigitNotNull()-1,
 			'shop_id' => $faker->randomNumber(2)
			));
	}
} catch(Exception $e) {
    echo $e, '<br>';
}
/*
// generate data by accessing properties
for ($i = 0; $i < 10; $i++) {
    echo "<p>" . $faker->name . "</p>";
    echo "<p>" . $faker->address . "</p>";
}
*/