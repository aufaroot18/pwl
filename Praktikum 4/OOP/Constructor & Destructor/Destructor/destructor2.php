<?php
class Motor
{
    public function mulai()
    {
        echo "mulai...";
    }
    public function __destruct()
    {
        echo "selesai...";
    }
}

$motor1 = new Motor();
$motor1->mulai();
