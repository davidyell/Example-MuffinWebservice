<?php
namespace App\Webservice;

use App\Model\Endpoint\AnswersEndpoint;
use Muffin\Webservice\Query;
use Muffin\Webservice\ResultSet;
use Muffin\Webservice\Webservice\Webservice;

class AnswersWebservice extends Webservice
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
        $response = $this->getDriver()->getClient()->get('/api');

        if (!$response->isOk()) {
            return false;
        }

        $resultArray = $response->body(function ($body) {
            return json_decode($body, true);
        });

        $resource = $this->_transformResource(new AnswersEndpoint(), $resultArray);

        return new ResultSet([$resource], 1);
    }
}
