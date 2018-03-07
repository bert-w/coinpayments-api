<?php

namespace BertW\CoinPaymentsApi\Objects;

use BertW\CoinPaymentsApi\Object;

class Transaction extends Object
{
    protected $required = ['amount', 'currency1', 'currency2', 'address'];

    public $amount;

    public $currency1;

    public $currency2;

    public $address;

    public $buyer_email;

    public $buyer_name;

    public $item_name;

    public $item_number;

    public $invoice;

    public $custom;

    public $ipn_url;
}
