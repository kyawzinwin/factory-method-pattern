<?php

namespace App\Payment\Interfaces;

interface PaymentGateway
{
    public function client(); 

    public function pay(); 

    public function refund(); 
}