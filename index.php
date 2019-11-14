 1. implement a function closestToZero to return the value closest to zero
        function closestToZero($arrayValues = array()) {
      
            if(empty($arrayValues)) {
                return 0;
            }
            
            $closest = 0;
            
            for ($i = 0; $i < count($arrayValues) ; $i++) {
                if ($closest === 0) {
                    $closest = $arrayValues[$i];
                } else if ($arrayValues[$i] > 0 && $arrayValues[$i] <= abs($closest)) {
                    $closest = $arrayValues[$i];
                } else if ($arrayValues[$i] < 0 && - $arrayValues[$i] < abs($closest)) {
                    $closest = $arrayValues[$i];
                }
            }
            
            return $closest;
            
        }

        $input = [7,-10, 13, 8, 4, -7.2,-12,-3.7,3.5,-9.6, 6.5,-1.7, -6.2,7];

        echo "Result: " . closestToZero($input);

    2. Compute the sum of the numbers list using a while-loop
        function getsum($n) {  
            $sum = 0; 
            while ($n != 0) { 
                $sum = $sum + $n % 10; 
                $n = $n/10; 
            } 
            return $sum; 
        } 
        $n = 687; 
        $res = getsum($n); 
        echo("$res");
    3. Compute the sum of the numbers list using a for-loop
        function sum_of_digits($nums) {
            $digits_sum = 0;
              for ($i = 0; $i < strlen($nums); $i++) {
                     $digits_sum += $nums[$i];
                }
            return $digits_sum;
        }
        echo sum_of_digits("12345")."\n";
        echo sum_of_digits("9999")."\n";

    4. Compute the sum of the numbers list using a Recursion function
        $n = 1;
        echo Recursion($n);
        function Recursion($n) {
            if ($n <= 10) {
                if($n < 10) {
                    echo "$n+";
                }
                else echo "$n=";
            return $n+Recursion($n+1);
            }
        }
    
    5. Combines two lists by alternatively taking elements

    function merge_array($array1, $array2, $n1, $n2) { 
        $i = 0; 
        $j = 0; 
        $k = 0; 
        $array3 = array(); 
      
        // Traverse both array 
        while ($i < $n1 && $j < $n2) { 
            $array3[$k++] = $array1[$i++]; 
            $array3[$k++] = $array2[$j++]; 
        } 
  
        // Store remaining elements of the first array

        while ($i < $n1) 
            $array3[$k++] = $array1[$i++]; 
      
        // Store remaining elements of the second array 
        
        while($j < $n2) 
            $array3[$k++] = $array2[$j++]; 
              
        echo "Array after merging"."\n"; 
        for ($i = 0; $i < ($n1 + $n2); $i++) 
            echo $array3[$i] .", "; 
        } 
      
        // Inputs before merging 
        $array1 = array('a', 'b', 'c'); 
        $n1 = count($array1); 
      
        $array2 = array(1, 2, 3); 
        $n2 = count($array2); 
        merge_array($array1, $array2, $n1, $n2);

    6. First 100 Fibonacci numbers
        function fibonacci($n) {
            $fib_array = [0, 1];
            for ($i = 2; $i < $n; $i++) {
                $fib_array[$i] = $fib_array[$i - 1] + $fib_array[$i - 2];
            }
            return $fib_array;
        }
        echo "<pre>";
        print_r(fibonacci(100));
   

    7. Given array of integers, find the lowest absolute sum of elements

   function sumOfMinAbsDifferences($arr, $n) { 
      
    // sort the given array 
    sort($arr); 
    sort( $arr,$n); 
      
    // initialize sum 
    $sum = 0; 
      
    // min absolute difference for the 1st array element 

    $sum += abs($arr[0] - $arr[1]); 
      
    // min absolute difference for the last array element
 
    $sum += abs($arr[$n - 1] - $arr[$n - 2]); 
      
    // find min absolute difference for rest of the array elements and add them to sum
 
    for ($i = 1; $i < $n - 1; $i++) 
        $sum += min(abs($arr[$i] - $arr[$i - 1]),  
                   abs($arr[$i] - $arr[$i + 1])); 
          
    // required sum  

    return $sum; 

    } 
 
    $arr = array(1, 8, 9, 15, 16); 
    $n = sizeof($arr); 
    echo "Sum = ", sumOfMinAbsDifferences($arr, $n);
 
  //8. Write a program that outputs all possibilities to put + or - or nothingbetween the numbers
    function pc_permute($items, $perms = array( )) {
        if (empty($items)) {
            $return = array($perms);
        }  else {
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
         list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             $return = array_merge($return, pc_permute($newitems, $newperms));
         }
    }
    return $return;
}
$value = array('1', '2', '34','5','67','8','9');
echo "<pre>";
var_dump(pc_permute($value));