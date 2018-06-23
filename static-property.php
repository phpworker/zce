<?php

// what will be the output?

class Foo
{
    static $bar = 'bar';

    public static function baz()
    {
        echo 'Hello World';
    }
}

$foo = new Foo();
$foo->baz();
echo $foo->bar;
