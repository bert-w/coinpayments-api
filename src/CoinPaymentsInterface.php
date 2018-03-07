<?php

namespace BertW\CoinPaymentsApi;

interface CoinPaymentsInterface
{
    /**
     * Retrieve basic account info of the merchant.
     */
    public function getBasicInfo();

    public function rates($short = 0, $accepted = 0);

    public function balances($all = 0);

    public function getDepositAddress($currency);

    public function createTransaction(array $options);
}
