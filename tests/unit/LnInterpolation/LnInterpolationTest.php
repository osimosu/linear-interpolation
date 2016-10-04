<?php

include 'src/LnInterpolation/LnInterpolation.php';

class LnInterpolationTest extends PHPUnit_Framework_TestCase
{

    public function testValueIsLinearlyInterpolatedBetweenBeforeAndAfter()
    {
        $before = 858;
        $after =  1009;
        $input = '2010-06-01 00:00:00';
        $data = array(
            '2010-05-01 12:20:08' => 858,
            '2010-06-05 16:30:54' => 1009,
        );
                
        $vInterpolation = new LnInterpolation($data);
        $output = $vInterpolation->calculate($input);
        
        $this->assertLessThan($output, $before);
        $this->assertGreaterThan($output, $after);

    }

}
