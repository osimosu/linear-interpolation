<?php

class LnInterpolation {
    
    // input array data
    private $pDatas;
    
    // initialize data
    public function __construct($dDatas) {
        $this->pDatas = $dDatas;
    }
    
    // get previous and next element in array
    public function find($input) {
        $prev_key = null;
        $next_key = null;
        foreach (array_keys($this->pDatas)as $key) {
            // convert to timestamp for comparison
            if (strtotime($key) < strtotime($input)) { 
                $prev_key = $key;
            } else {
                //  already found next key, move on
                if ($next_key == null) {  
                    $next_key = $key;
                }
            }
        }

        return array($prev_key, $next_key);
    }

    public function calculate($input) {
        list($prev_key, $next_key) = $this->find($input);
        
        //get previous and next values
        $prev_value = $this->pDatas[$prev_key];    
        $next_value = $this->pDatas[$next_key];
        
        // perform linear interpolation calculation
        $temp = ((strtotime($input) - strtotime($prev_key)) * ($next_value - $prev_value) / (strtotime($next_key) - strtotime($prev_key)));
        $y = $temp + $prev_value;
        return $y;
    }

}

