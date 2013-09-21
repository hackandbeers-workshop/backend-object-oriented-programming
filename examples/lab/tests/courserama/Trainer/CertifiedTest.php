<?php
namespace Test\Courserama\Trainer;

use Courserama\Trainer\Certified;

/**
 * @group incomplete
 */
class CertifiedTest extends \PHPUnit_Framework_TestCase
{
    protected $trainer;

    public function setUp()
    {
        $this->trainer = new Certified();
    }

    public function test_regular_should_be_a_trainer()
    {
        $this->assertInstanceOf('Courserama\Trainer', $this->trainer);
    }

    public function test_certified_trainer_should_have_min_five_years_of_experience()
    {
        $this->setExpectedException('Courserama\Trainer\InvalidExperienceException');

        $this->trainer->setYearsOfExperience(4);
    }

    public function test_certified_trainer_should_have_min_ten_given_courses()
    {
        $this->setExpectedException('Courserama\Trainer\InvalidCoursesNumberException');

        $this->trainer->setNumberOfCoursesGiven(2);
    }
}