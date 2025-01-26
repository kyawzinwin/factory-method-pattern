<?php

require "./vendor/autoload.php";

use App\Payment\Abstract\PaymentManager;
use App\Payment\Paypal\PaypalPaymentManager;
use App\Payment\Stripe\StripePaymentManager;

function makePayment(PaymentManager $payment) {
    $payment->makePayment();
}

function makeRefund(PaymentManager $payment) {
    $payment->makeRefund();
}

makePayment(new PaypalPaymentManager);
makeRefund(new StripePaymentManager);

