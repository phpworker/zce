<?php

//What is the output of the following code?
class Number
{
    private $v = 0;

    public function __construct($v)
    {
        $this->v = $v;
    }

    public function mul()
    {
        return function($x) {
            return $this->v * $x;
        };
    }
}

$one = new Number(1);
$two = new Number(2);

$double = $two->mul()->bindTo($one);
print_r($double); // closure function binded to object $one

print_r($two->mul()); // this closure function is binded to object $two

echo $double(5); // 5
