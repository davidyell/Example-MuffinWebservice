<?php

namespace App\Model\Endpoint;

use Muffin\Webservice\Model\Endpoint;

class BankHolidaysEndpoint extends Endpoint
{
    /**
     * Get the default connection name.
     *
     * This method is used to get the fallback connection name if an
     * instance is created through the EndpointRegistry without a connection.
     *
     * @return string
     *
     * @see \Muffin\Webservice\Model\EndpointRegistry::get()
     */
    public static function defaultConnectionName()
    {
        return 'bankholidays';
    }
}
