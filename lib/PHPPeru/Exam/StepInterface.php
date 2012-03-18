<?php
namespace PHPPeru\Exam;

/**
 * Describes a minimal API for step within an exam
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
interface StepInterface {

    function getDescription();

    function isNew();

    function isRead();

    function isAnswered();
}

?>
