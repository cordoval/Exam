<?php

/*
 * This file is part of the PHPPeru packages.
 *
 * (c) Luis Cordova <cordoval@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPPeru\Exam\Event;

/**
 * Events.php: Short description.
 *
 * Two line explanation.
 *
 * @author Luis Cordova <cordoval@gmail.com>
 */
abstract class Events
{
    /**
     * The exam.start event is thrown each time a new is started
     * in the system.
     *
     * The event listener receives an PHPPeru\Exam\Event\ExamEvent
     * instance.
     *
     * @var string
     */
    const onExamStarted = 'exam.start';

    /**
     * The exam.abort event is thrown each time a abort is started
     * in the system.
     *
     * The event listener receives an PHPPeru\Exam\Event\ExamEvent
     * instance.
     *
     * @var string
     */
    const onExamAborted = 'exam.abort';

    /**
     * The exam.complete event is thrown each time a complete is started
     * in the system.
     *
     * The event listener receives an PHPPeru\Exam\Event\ExamEvent
     * instance.
     *
     * @var string
     */
    const onExamCompleted = 'exam.complete';
    
    /*
     * The step.read event is thrown each time a step is read
     * in the system.
     *
     * The event listener receives an PHPPeru\Exam\Event\StepEvent
     * instance.
     *
     * @var string
     */
    const onStepRead = 'step.read';

    /*
     * The step.answered event is thrown each time a step is answered
     * in the system.
     *
     * The event listener receives an PHPPeru\Exam\Event\StepEvent
     * instance.
     *
     * @var string
     */
    const onStepAnswered = 'step.answered';
}