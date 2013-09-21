<?php
// Bad design example //
abstract class Animal{}

abstract class Reptile extends Animal
{
    public function crawl()
    {
        // do the crawling //
    }
}

abstract class Bird extends Animal
{
    public function fly()
    {
        // Do the flying //
    }

    public function hasFeathers()
    {
        return true;
    }
}

class Turtle extends Reptile{}
class Woodpecker extends Bird{}
class Platypus extends ?



// Favor interfaces over inheritance //
interface Flyer
{
    function fly();
}

interface Crawler
{
    function crawl();
}

class Dragon implements Flyer, Crawler{}

// Abstract classes are useful for putting common logic that rarely changes //
abstract class Shape
{
    abstract public function area();
    abstract public function draw();
}

class Square extends Shape
{
    protected $side = 0;

    // This is called override //
    public function area()
    {
        return $this->side * $this->side;
    }

    public function draw()
    {
        // Do the draw //
    }
}

// Interfaces are useful to describe behavior that is not related to any class in the system //
interface Countable
{
    function count();
}

interface Clonable
{
    function clone();
}

class Something implements Countable, Clonable{}

// Note on interfaces: Interfaces cannot represent entities.
// Wrong use of interfaces //
interface Person
{
    function getName();
    function setName();
}

// The interface is not describing a behavior but an attribute.
class Engineer implements Person{}
