<?php
namespace PHPPeru\Exam;

use Symfony\Component\EventDispatcher\EventDispatcherInterface,
    BadMethodCallException,
    Iterator;

/**
 * Descrobes a minimal API required for the concept of Exam
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @todo add methods to the interface besides the ones used as examples
 */
interface ExamInterface extends Iterator
{    
    /**
     * Begins the exam.
     * 
     * @throws BadMethodCallException if the exam can't be started 
     */
    public function start();
    
    /**
     * Aborts the exam.
     * 
     * @throws BadMethodCallException if the exam can't be aborted 
     */
    public function abort();
    
    /**
     * Completes the exam
     *
     * @throws BadMethodCallException if the exam can't be completed 
     */
    public function complete();

    /**
     * Create exam evaluation
     *
     * @throws BadMethodCallException if the exam can't be evaluated
     */
    public function evaluate();

    /**
     * Gets current step
     */
    public function getCurrentStep();

    /**
     * Gets time left
     */
    public function getTimeLeft();


    /**
     * Checks if the exam is new
     *
     * @return bool
     */
    public function isNew();

    /**
     * Checks if the exam has been started
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Checks if the exam has been aborted
     *
     * @return bool
     */
    public function isAborted();

    /**
     * Checks if the exam has been completed
     *
     * @return bool
     */
    public function isCompleted();

    
}