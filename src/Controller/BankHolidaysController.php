<?php

namespace App\Controller;

/**
 * Bank Holidays Controller
 *
 * @property \App\Model\Endpoint\BankHolidaysEndpoint BankHolidays
 */
class BankHolidaysController extends AppController
{
    public function index()
    {
        $this->loadModel('BankHolidays', 'Endpoint');

        $holidays = $this->BankHolidays->find();

        $this->set('holidays', $holidays);
    }
}
