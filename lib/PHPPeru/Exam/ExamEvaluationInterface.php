<?php
namespace PHPPeru\Exam;

use Symfony\Component\EventDispatcher\EventDispatcherInterface,
    BadMethodCallException,
    Iterator;

/**
 * Describes a minimal API required for the concept of Exam Evaluation
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface ExamEvaluationInterface
{    
    public function isEvaluated();

    public function isCritic();

    public function isPassing();

    public function isFailing();

    public function score();
}