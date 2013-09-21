<?php

abstract class Person{
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

class Student extends Person {}
class Teacher extends Person{
    /**
     * @var array of Student
     */
    protected $students;
}