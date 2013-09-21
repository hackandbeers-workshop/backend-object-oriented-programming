<?php
namespace Test\Courserama\Trainer;

use Courserama\Trainer\Regular;

/**
 * @group incomplete
 */
class TrainerTest extends \PHPUnit_Framework_TestCase
{
    protected $trainer;

    public function setUp()
    {
        $this->trainer = new Regular();
    }

    public function test_regular_should_be_a_trainer()
    {
        $this->assertInstanceOf('Courserama\Trainer', $this->trainer);
    }

    public function test_Regular_trainer_should_be_able_to_have_years_of_experience()
    {
        $expectedYearsOfExperience = 3;

        $this->trainer->setYearsOfExperience($expectedYearsOfExperience);

        $this->assertEquals($expectedYearsOfExperience, $this->trainer->getYearsOfExperience());
    }

    public function test_Regular_trainer_should_be_possible_to_have_courses()
    {
        $expectedCourses = 2;

        $this->trainer->setNumberOfCoursesGiven($expectedCourses);

        $this->assertEquals($expectedCourses, $this->trainer->getNumberOfCoursesGiven());
    }
}