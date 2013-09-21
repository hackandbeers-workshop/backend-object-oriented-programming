<?php
namespace Test\Courserama\Fundamental;

use Courserama\Course\Fundamental;
use Courserama\Attendee;
use Courserama\Trainer;

/**
 * @group incomplete
 */
class FundamentalTest extends \PHPUnit_Framework_TestCase
{
    protected $fundamentalCourse;

    public function setUp()
    {
        $this->fundamentalCourse = new Fundamental();
    }

    public function test_advanced_is_a_course()
    {
        $this->assertInstanceOf('Courserama\Course', $this->fundamentalCourse);
    }

    public function test_price_is_expected()
    {
        $expectedPrice = 10;

        $this->assertEquals($expectedPrice, $this->fundamentalCourse->getPrice());
    }

    public function test_advanced_can_register_several_attendees()
    {
        $expectedAttendees = 1;

        $this->fundamentalCourse->addAttendee(new Attendee\Student());

        $this->assertEquals($expectedAttendees, $this->fundamentalCourse->getTotalAttendees());
    }

    public function test_advanced_can_have_one_trainer()
    {
        $expectedTrainer = new Trainer\Regular();

        $this->fundamentalCourse->setTrainer($expectedTrainer);

        $this->assertEquals($expectedTrainer, $this->fundamentalCourse->getTrainer());
    }
}