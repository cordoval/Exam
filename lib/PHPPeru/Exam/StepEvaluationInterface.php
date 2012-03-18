<?php
namespace PHPPeru\Exam;

use Symfony\Component\EventDispatcher\EventDispatcherInterface,
    BadMethodCallException,
    Iterator;

/**
 * Describes a minimal API required for the concept of each Step Evaluation
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface StepEvaluationInterface
{    
    public function isEvaluated();

    public function isCritic();

    public function isPassing();

    public function isFailing();
}