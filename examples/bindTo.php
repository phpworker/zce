<?php

class Example
{
    public $text = 'hello there';

    public function bye()
    {
        return 'bye';
    }
}

$func = function() {
    echo '<p>' . $this->text . '</p>';
};

// func has a this property assigned to the class
$func = $func->bindTo(new Example);

$func();

print_r($func);
