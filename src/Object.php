<?php

namespace BertW\CoinPaymentsApi;

class Object
{
    protected $required;

    public function __construct(array $options = [])
    {
        $this->checkRequiredProperties($options);

        $this->checkAvailableProperties($options);

        foreach (get_object_vars($this) as $var) {
            $this->$var = array_key_exists($options, $var) ? $options[$var] : null;
        }
    }

    private function checkRequiredProperties(array $options)
    {
        foreach ($this->required as $requiredProperty) {
            if (!array_key_exists($requiredProperty, $options)) {
                throw new CoinPaymentsApiException('Property [' . $requiredProperty . '] is required for ' . get_class($this));
            }
        }
    }

    private function checkAvailableProperties(array $options)
    {
        $properties = get_object_vars($this);
        foreach ($options as $option) {
            if (!array_key_exists($option, $properties)) {
                throw new CoinPaymentsApiException('"' . $option . '" is not a valid property for ' . get_class($this));
            }
        }
    }
}
