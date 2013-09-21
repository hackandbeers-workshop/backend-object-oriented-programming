<?php
// Common example of composition //
class Car
{
    private $carburetor;

    public function __construction()
    {
        // Direct instantiation is not recommended //
        $this->carburetor = new Carburetor();
    }
}

// This class has no meaning outside the car scope //
class Carburetor{}
