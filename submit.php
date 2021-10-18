<?php 
require_once('stripe-php-master/init.php');

$publishableKey = "pk_test_TYooMQauvdEDq54NiTphI7jx";
$secretKey = "sk_test_4eC39HqLyjWDarjtT1zdp7dc";

\Stripe\Stripe::setApiKey($secretKey);

echo '<pre>';

print_r($_POST);

if( isset($_POST['stripeToken']) and !empty($_POST['stripeToken']) ) {
	$token = $_POST['stripeToken'];

	\Stripe\Stripe::setVerifySslCerts(false);

	$data = \Stripe\Charge::create(array(
		'amount' => 500,
		'currency' => 'usd',
		'description' => 'Test payment',
		'source' => $token
	));

	print_r($data);

}



