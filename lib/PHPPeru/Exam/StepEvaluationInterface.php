<?php
namespace PHPPeru\Exam;

/**
 * Describes a minimal API required for the concept of each Step Evaluation
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface StepEvaluationInterface
{    
    function isEvaluated();

    function isCritic();

    function isPassing();

    function isFailing();
}