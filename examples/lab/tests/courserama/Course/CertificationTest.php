<?php
namespace Test\Courserama\Course;

use Courserama\Course\Certification;
use Courserama\Attendee;
use Courserama\Trainer;

/**
 * @group incomplete
 */
class CertificationTest extends \PHPUnit_Framework_TestCase
{
    protected $certificationCourse;

    public function setUp()
    {
        $this->certificationCourse = new Certification();
    }

    public function test_advanced_is_a_course()
    {
        $this->assertInstanceOf('Courserama\Course', $this->certificationCourse);
    }

    public function test_price_is_expected()
    {
        $expectedPrice = 1000;

        $this->assertEquals($expectedPrice, $this->certificationCourse->getPrice());
    }

    public function test_advanced_can_register_several_attendees()
    {
        $expectedAttendees = 3;

        $this->certificationCourse->addAttendee(new Attendee\Regular());
        $this->certificationCourse->addAttendee(new Attendee\Regular());
        $this->certificationCourse->addAttendee(new Attendee\Student());

        $this->assertEquals($expectedAttendees, $this->certificationCourse->getTotalAttendees());
    }

    public function test_advanced_can_have_one_trainer()
    {
        $expectedTrainer = new Trainer\Certified();

        $this->certificationCourse->setTrainer($expectedTrainer);

        $this->assertEquals($expectedTrainer, $this->certificationCourse->getTrainer());
    }
}
