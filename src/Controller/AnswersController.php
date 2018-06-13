<?php

namespace App\Controller;

/**
 * Answers Controller
 *
 * @property \App\Model\Endpoint\AnswersEndpoint Answers
 */
class AnswersController extends AppController
{
    /**
     * Get an answer from a remote webservice
     *
     * @return void
     */
    public function view()
    {
        $this->loadModel('Answers', 'Endpoint');

        $answer = $this->Answers->find()
            ->execute();

        $this->set('answer', $answer->first());
    }
}
