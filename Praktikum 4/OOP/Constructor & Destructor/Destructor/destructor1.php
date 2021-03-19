<?php
class Buah
{
    public function __destruct()
    {
        echo "Buah semangka ini disimpan dalam destructor";
    }
}

$buah1 = new Buah();