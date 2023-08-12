<?php
require_once('vendor/autoload.php'); // Include Stripe PHP library

\Stripe\Stripe::setApiKey('STRIPE_SECRET_KEY');

$token = $_POST['stripeToken'];
$amount = $_POST['amount'];

try {
    $charge = \Stripe\Charge::create(array(
        "amount" => $amount,
        "currency" => "usd",
        "description" => "Payment",
        "source" => $token,
    ));
    
    echo "Payment successful!";
} catch (\Stripe\Exception\CardException $e) {
    echo "Error: " . $e->getMessage();
}
?>
