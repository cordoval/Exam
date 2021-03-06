<?php
namespace PHPPeru\Exam;

use Symfony\Component\EventDispatcher\EventDispatcherInterface,
    BadMethodCallException,
    Iterator;

/**
 * @author Luis Cordova <cordoval@gmail.com>
 */
class ExamEvaluation implements ExamEvaluationInterface
{    
    public function isEvaluated()
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function isCritic()
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function isPassing()
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function isFailing()
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function score()
    {
        throw new BadMethodCallException('Not implemented');
    }
}