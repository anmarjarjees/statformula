<?php

class Formula_Model extends CI_Model {
    
    // This function receives an array of values, converts them to numbers, 
    // and calculates various statistical formulas.
    public function allFormulas($data) {
        $NumValues = [];
        $strValuesArray = $data['values'];
        
        // Debugging: print the values array.
        //        echo "<pre>";
        //         print_r($data['values']);
        //        echo "</pre>";
        //        echo '<hr />';
     
        for ($i = 0; $i < count($strValuesArray); $i++) {
            $NumValues[] = floatval($strValuesArray[$i]);
        } // End for loop
        
        // Calculate different statistical measures
        $this->mode($NumValues);
        $formulaArray['total'] = $this->countValues($NumValues);       
        $formulaArray['mean'] = $this->mean($NumValues);
        $formulaArray['variancePopulation'] = $this->variancePopulation($NumValues);
        $formulaArray['varianceSample'] = $this->varianceSample($NumValues);
        $formulaArray['sdPopulation'] = $this->sdPopulation($NumValues);
        $formulaArray['sdSample'] = $this->sdSample($NumValues);
        $formulaArray['median'] = $this->median($NumValues);
        
        return $formulaArray; 
    }
    
    // Count the number of values in the array.
    public function countValues($values) {
        $countNum = 0;
        for ($i = 0; $i < count($values); $i++) {
            $countNum++;
        } 
        return $countNum;
    }
    
    // Calculate the mean (average) of the values.
    public function mean($values) {
        $result = 0; 
        $countNum = $this->countValues($values);
        for ($i = 0; $i < $countNum; $i++) {
            $result += $values[$i];
        }
        $result /= $countNum;
        return number_format($result, 3, '.', '');
    } // End mean
    
    // Calculate the population variance.
    public function variancePopulation($values) {
        $avg = $this->mean($values);
        $countNum = $this->countValues($values);
        $variance = 0;
        
        for ($i = 0; $i < $countNum; $i++) {
            $eachValueResult = $values[$i] - $avg;
            $result = $variance + pow($eachValueResult, 2) / $countNum;
        }
        return number_format($result, 3, '.', '');
    } // End variancePopulation
    
    // Calculate the sample variance.
    public function varianceSample($values) {
        $avg = $this->mean($values);
        $countNum = $this->countValues($values);
        $variance = 0;
        
        for ($i = 0; $i < $countNum; $i++) {
            $eachValueResult = $values[$i] - $avg;
            $result = $variance + pow($eachValueResult, 2) / ($countNum - 1);
        }
        return number_format($result, 3, '.', '');
    } // End varianceSample
    
    // Calculate the population standard deviation.
    public function sdPopulation($values) {
        $avg = $this->mean($values);
        $countNum = $this->countValues($values);
        $eachValueResultTotal = 0;
        
        for ($i = 0; $i < $countNum; $i++) {
            $eachValueResultTotal += pow($values[$i] - $avg, 2) / $countNum;            
        }
        $result = sqrt($eachValueResultTotal);
        return number_format($result, 3, '.', '');
    } // End sdPopulation
    
    // Calculate the sample standard deviation.
    public function sdSample($values) {
        $avg = $this->mean($values);
        $countNum = $this->countValues($values);
        $eachValueResultTotal = 0;
        
        for ($i = 0; $i < $countNum; $i++) {
            $eachValueResultTotal += pow($values[$i] - $avg, 2) / ($countNum - 1);            
        }
        $result = sqrt($eachValueResultTotal);
        return number_format($result, 3, '.', '');
    } // End sdSample
    
    // Calculate the median of the values.
    public function median($values) {
        $countNum = $this->countValues($values);
        $result = $countNum % 2;
        
        if ($result == 0) {
            $middleIndex = $countNum / 2;
            $num1 = $values[$middleIndex];
            $num2 = $values[$middleIndex - 1];
            $result = ($num1 + $num2) / 2;
            return number_format($result, 3, '.', '');
        } else {
            $middleIndex = ($countNum - 1) / 2;
            return $values[$middleIndex];
        } 
    } // End median
    
    // Calculate the mode of the values.
    public function mode($values) {
        $countNum = $this->countValues($values);
        $twoDimArray = [];
        
        for ($i = 0; $i < $countNum; $i++) {
            $value = $values[$i];
            $count = 0;
            
            for ($j = 0; $j < $countNum; $j++) {
                if ($values[$j] == $value && $values[$j] != "") {
                    $count++;
                    $values[$j] = ""; // Mark this value as processed
                } 
            } // End inner loop
            
            $twoDimArray[] = array($value, $count);
        } // End outer loop
        
        // Debugging: print the two-dimensional array.
        //        echo "<pre>";
        //        print_r($TwoDimArray);
        //        echo "</pre>";
        
        // Debugging: output the mode as an ordered list.
        //        echo "<ol>";
        //        for ($i = 0; $i < count($TwoDimArray); $i++) {
        //            echo "<li><b>The row number $i</b>";
        //            echo "<ul>";
        //            foreach($TwoDimArray[$i] as $key => $value) {
        //                echo "<li>".$value."</li>";
        //            }
        //            echo "</ul>";
        //            echo "</li>";
        //        }
        //        echo "</ol>";
        
        $result = $countNum % 2;
        return $values[$result++];
    } // End mode
   
} // End of main Module Class
