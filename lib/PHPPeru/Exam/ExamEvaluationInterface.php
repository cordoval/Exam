<?php
namespace PHPPeru\Exam;

/**
 * Describes a minimal API required for the concept of Exam Evaluation
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface ExamEvaluationInterface
{    
    function isEvaluated();

    function isCritic();

    function isPassing();

    function isFailing();

    function score();
}