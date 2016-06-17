<?php

class X {
	private $_bar;

    public function setBar($value)
    {
        $this->_bar = $value;
    }

    public function getBar()
    {
        return $this->_bar;
    }
}

$x = new X;
$x->bar = "12";
echo $x->bar;
