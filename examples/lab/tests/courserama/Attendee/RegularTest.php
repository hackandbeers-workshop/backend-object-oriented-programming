<?php
namespace Test\Courserama\Attendee;

/**
 * @group incomplete
 */
class RegularTest extends \PHPUnit_Framework_TestCase
{
    private $attendee;

    public function setUp()
    {
        $this->attendee = new Regular();
    }

    public function test_regular_should_be_an_attendee()
    {
        $this->assertInstanceOf('Courserama\Attendee', $this->attendee);
    }

    public function test_regular_attendee_should_have_no_discount()
    {
        $expectedDiscount = 0;

        $this->assertEquals($expectedDiscount, $this->attendee->getDiscount());    
    }

    public function test_regular_attendee_should_be_older_than_eighteen_years()
    {
        $this->setExpectedException('Courserama\Attendee\InvalidAgeException');

        $attendee = new Regular();
        $attendee->setAge(17);
    }
}

