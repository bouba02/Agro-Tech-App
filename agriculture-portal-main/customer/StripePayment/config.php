<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51NlbYYIQrsglLn2kU78w42jDBaQ40Hll1Xyzy07BftmWcV7DzoIcgCl4AiYj1hgXiEZBFbHzA5cz9jPKirj7tIWg00CHi4CuYg",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51NlbYYIQrsglLn2k3YCl6KtV9e0V17a6kxWVaHaINdsCVqqiKuiQqGgF9jtwmp8iauHEjo8zlqyj5AuHnOaFKRHI00jYiaw77B"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
