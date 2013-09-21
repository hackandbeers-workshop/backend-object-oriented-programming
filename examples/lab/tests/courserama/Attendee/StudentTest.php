<?php
namespace Test\Courserama\Attendee;

/**
 * @group incomplete
 */
class StudentTest extends \PHPUnit_Framework_TestCase
{
    private $attendee;

    public function setUp()
    {
        $this->attendee = new Student();
    }

    public function test_student_should_be_an_attendee()
    {
        $this->assertInstanceOf('Courserama\Attendee\Attendee', $this->attendee);
    }

    public function test_student_attendee_should_have_expected_discount()
    {
        $expectedDiscount = 10;

        $this->assertEquals($expectedDiscount, $this->attendee->getDiscount());    
    }

    public function test_student_attendee_should_be_younger_than_eighteen_years()
    {
        $this->setExpectedException('Courserama\Attendee\InvalidAgeException');

        $attendee = new Regular();
        $attendee->setAge(21);
    }
}

