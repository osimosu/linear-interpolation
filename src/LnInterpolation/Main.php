<?php

include 'LnInterpolation.php';

$array = array(
    '2010-05-01 12:20:08' => 858,
    '2010-06-05 16:30:54' => 1009,
    '2010-07-04 08:11:20' => 1156,
    '2010-08-02 14:06:20' => 1293,
    '2010-08-31 13:50:00' => 1345,
    '2010-10-03 17:34:20' => 1512
);

$vInterpolation = new LnInterpolation($array);

$input = array(
    '2010-06-01 00:00:00',
    '2010-07-01 00:00:00',
    '2010-08-01 00:00:00',
    '2010-09-01 00:00:00',
    '2010-10-01 00:00:00'
);


foreach ($input as $value) {
    echo $vInterpolation->calculate($value) . PHP_EOL;
}
