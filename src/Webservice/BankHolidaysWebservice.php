<?php

namespace App\Webservice;

use Muffin\Webservice\Query;
use Muffin\Webservice\ResultSet;
use Muffin\Webservice\Webservice\Webservice;

class BankHolidaysWebservice extends Webservice
{
    /**
     * Executes a query with the read action
     *
     * @param \Muffin\Webservice\Query $query The query to execute
     * @param array $options The options to use
     * @return \Muffin\Webservice\ResultSet|bool
     * @throws \Muffin\Webservice\Exception\UnimplementedWebserviceMethodException When this method has not been
     * implemented into userland classes
     */
    protected function _executeReadQuery(Query $query, array $options = [])
    {
        /* @var \Cake\Http\Client\Response $response */
        $response = $this->getDriver()->getClient()->get('/bank-holidays.json');

        if (!$response->isOk()) {
            return false;
        }

        $resultArray = $response->body(function ($body) {
            return json_decode($body, true);
        });

        $resources = $this->_transformResults($query->endpoint(), $resultArray['england-and-wales']['events']);

        return new ResultSet($resources, count($resources));
    }
}
