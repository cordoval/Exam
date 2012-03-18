<?php
namespace PHPPeru\Exam\Event;

use Symfony\Component\EventDispatcher\Event as BaseEvent;
use PHPPeru\Exam\ExamInterface;

/**
 * Provides information about an exam lifecycle event
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class ExamEvent extends BaseEvent
{
    /**
     * The exam that triggered the event
     *
     * @var ExamInterface 
     */
    protected $exam;

    /**
     * Default constructor
     *
     * @param ExamInterface $exam 
     */
    public function __construct(ExamInterface $exam)
    {
        $this->exam = $exam;
    }
    
    /**
     * Retrieves the exam registered with the event
     *
     * @return ExamInterface 
     */
    public function getExam()
    {
        return $this->exam;
    }
}