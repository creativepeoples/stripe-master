<?php 
require_once('stripe-php-master/init.php');

$publishableKey = "pk_test_TYooMQauvdEDq54NiTphI7jx";
$secretKey = "sk_test_4eC39HqLyjWDarjtT1zdp7dc";

\Stripe\Stripe::setApiKey($secretKey);

?>

<form action="submit.php" method="post">
	<script type="text/javascript" 
		src="https://checkout.stripe.com/checkout.js" 
		class="stripe-button"
		data-key="<?=$publishableKey?>"
		data-amount="500"
		data-name="Arifin Billah"
		data-description="Test payment"
		data-image=""
		data-currency="usd"

	></script>
</form>