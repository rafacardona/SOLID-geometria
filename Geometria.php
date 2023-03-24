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
        return $this->base * $this->altura;
    }
    public function superficie()
    {
        return 2 * ($this->base + $this->altura);
    }
}

class Rectangulo extends Paralelogramo{
    public function __construct($base, $altura)
    {
        parent::__construct($base, $altura);
    }

    /*
     * El area y la superficide de un paralelogramo y un rectangulo se calculan de la misma manera
     *
     */
}

class Cuadrado extends Rectangulo {

    public function __construct($lado)
    {
        parent::__construct($lado, $lado);
    }

    /*
     * El area seria LADO * LADO y es lo que hace area() de Rectangulo
     *
     * La superficie igual, 2(a+b)
     */
}

class Circunferncia implements Geometria{
    //radio de circuferencia
    private $radio;
    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function superficie()
    {
        //la superficie es 2 * PI * radio
        return 2 * 3.14 * $this->radio;

    }
    public function area()
    {
    //area es pi por radio al cuadrado
        return 3.14 * pow($this->radio , 2);
    }
}



