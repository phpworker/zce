<?php
//What would be the output of the following code?
namespace MyFramework\DB;

class MyClass
{
    static function myName()
    {
        return __METHOD__;
    }
}

print MyClass::myName();
