<?php
namespace Test\Courserama\Course;

use Courserama\Course\Advanced;
use Courserama\Attendee;
use Courserama\Trainer;

/**
 * @group incomplete
 */
class AdvancedTest extends \PHPUnit_Framework_TestCase
{
    protected $advancedCourse;

    public function setUp()
    {
        $this->advancedCourse = new Advanced();
    }

    public function test_advanced_is_a_course()
    {
        $this->assertInstanceOf('Courserama\Course', $this->advancedCourse);
    }

    public function test_price_is_expected()
    {
        $expectedPrice = 100;

        $this->assertEquals($expectedPrice, $this->advancedCourse->getPrice());
    }

    public function test_advanced_can_register_several_attendees()
    {
        $expectedAttendees = 2;

        $this->advancedCourse->addAttendee(new Attendee\Regular());
        $this->advancedCourse->addAttendee(new Attendee\Student());

        $this->assertEquals($expectedAttendees, $this->advancedCourse->getTotalAttendees());
    }

    public function test_advanced_can_have_one_trainer()
    {
        $expectedTrainer = new Trainer\Regular();

        $this->advancedCourse->setTrainer($expectedTrainer);

        $this->assertEquals($expectedTrainer, $this->advancedCourse->getTrainer());
    }
}