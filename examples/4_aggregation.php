<?php
// Common aggregation example //
class Professor{}

class Department
{
    protected $members;

    public function addMember(Professor $professor)
    {
        $this->members[] = $professor;
    }
}

class University
{
    protected $departments;
    // ... //
}
