<?php

interface Geometria{
    public function area();
    public function superficie();
}

class Paralelogramo implements Geometria{
    private $base;
    private $altura;

    //constructor de paralelogramo
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area()
    {
        // TODO: Implement area() method.
        return $this->base * $this->altura;
    }

    public function superficie()
    {
        // TODO: Implement superficie() method.
        return 2 * ($this->base + $this->altura);
    }
}
