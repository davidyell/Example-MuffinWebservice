<?php
namespace App\Webservice\Driver;

use Cake\Http\Client;
use Muffin\Webservice\AbstractDriver;

class Answers extends AbstractDriver
{
    /**
     * Initialize is used to easily extend the constructor.
     *
     * @return void
     */
    public function initialize()
    {
        $this->setClient(new Client([
            'scheme' => 'https',
            'host' => 'yesno.wtf'
        ]));
    }
}
