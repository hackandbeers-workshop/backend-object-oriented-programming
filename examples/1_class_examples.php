<?php
/**
 * Basic composition of a class. 
 * It should contain state and behavior.
 */
abstract class Person{
    // Visibility scope //
    protected $firstName;
    protected $lastName;

    public function getFullName()
    {
        return sprintf(
            '%s %s',
            $this->firstName,
            $this->lastName
        );
    }
}

/**
 * Inheritance examples
 */
class Student extends Person {}
class Teacher extends Person{
    /**
     * @var array of Student
     */
    protected $students;
}
