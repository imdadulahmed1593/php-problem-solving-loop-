<?php

// first day //problems (easier)
 $year = 1900;
 if($year%4 == 0){
     if($year%100 == 0){
            if($year%400 == 0){
                echo $year." is a leap year";
            }else{
                echo $year." is not a leap year";
            }
     }else{
        echo $year." is a leap year";
     }
 }else{
    echo $year." is not a leap year";
 }



$basic_salary = 25000;
if($basic_salary <= 10000){
    $gross_salary = $basic_salary*2;
    echo "gross salary is $gross_salary ";
}elseif($basic_salary > 10000 && $basic_salary <= 20000){
    $gross_salary = $basic_salary*(1+.25+.9);
    echo "gross salary is $gross_salary ";
}elseif($basic_salary > 20000){
    $gross_salary = $basic_salary*(1+.3+.95);
    echo "gross salary is $gross_salary ";
}else{
    echo "Please provide a valid basic salary";
}

echo ord(1);
echo ord(1);
echo ord(1);
shift+alt+down

$char="!";
$code = ord($char);
if($code>47 && $code<58){
    echo $char." is a digit";
}else if ($code>64 && $code<91){
    echo $char." is an alphabet";
}else if ($code>96 && $code<123){
    echo $char." is an alphabet";
}else{
    echo $char." is a symbol";
}

// first day //problems (easier)


//problem 1
$n=10;
for($i=1; $i<=$n; $i++){
    echo "$i ";
}

//problem 2
$n=10;
$sum=0;
for($i=1; $i<=$n;$i++){
    $sum+=$i;
}
echo "The sum is: $sum";

//problem 3
$n=10;
$sum=0;
for($i=1; $i<=$n;$i++){
    $sum+=$i;
}
echo "The first $n natural number is : ";
for($i=1; $i<=$n; $i++){
    echo "$i ";
};
echo "<br>";
echo "The sum is: $sum";

//problem 4

//problem 5
$n=10;
for($i=1; $i<=$n; $i++){
    $cubeResult = pow($i, 3);
    echo "The number is $i and cube of the number is : $cubeResult<br>";
}

//problem 6
$n=9;
for($i=1; $i<=10; $i++){
    echo "$n x $i = ".$n*$i."<br>";
}

//problem 7
$n=9;
for($multiplier=1; $multiplier<=10; $multiplier++){
    for($i=1; $i<=$n; $i++){
        echo "$i x $multiplier = ".$i*$multiplier.", ";
    }
    echo "<br>";
}

//problem 8
$n=10;
$sum=0;
echo "The odd numbers are : ";
for($i=0; $i<$n; $i++){
    $odd=$i*2+1;
    $sum+=$odd;
    echo $odd." ";
}
echo "<br> The sum of odd Natural numbers upto $n terms : $sum";

//problem 9
$rows=10;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

//problem 10
$rows=10;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "$j";
    }
    echo "<br>";
}

//problem 11
$rows=9;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "$i";
    }
    echo "<br>";
}

//problem 12
$rows=9;
$k=1;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "$k";
        $k++;
    }
    echo "<br>";
}

//problem 13
$rows=10;
$num=1;
$spaces=$rows-1;
for($i=1; $i<=$rows; $i++){
    for($k=$spaces; $k>=$i; $k--){
        echo "&nbsp";
    }
    for($j=1; $j<=$i; $j++){
        echo "$num ";
        $num++;
    }
    echo "<br>";
}

//problem 14
$rows=10;
$spaces=$rows-1;
for($i=1; $i<=$rows; $i++){
    for($k=$spaces; $k>=$i; $k--){
        echo "&nbsp";
    }
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}

//problem 15
$n=5;
$product=1;
for($i=$n; $i>=1; $i--){
    $product *= $i;
}
echo "The factorial of $n is $product";

//problem 16
$terms=5;
$sum=0;
echo "The even numbers are: ";
for($i=1; $i<=$terms; $i++){
    $term=$i*2;
    $sum+=$term;
    echo "$term " ;
}
echo "<br>The sum of even numbers upto $terms terms: $sum";

//problem 17
$rows=4;
for($i=1; $i<=$rows; $i++){
    for ($j=1; $j<=$i; $j++) { 
        echo "$i ";
    }
    echo "<br>";
}



//problem 18
$x=2;
$terms=5;
$sum=0;
for ($i=0; $i<$terms; $i++){
    $term = (pow($x,$i*2)/factorial($i*2))*pow(-1,$i);
    $sum += $term;
}
echo "The sum = $sum <br> Number of terms = $terms <br> Value of x = $x";

function factorial($n){
    $product=1;
    for($i=$n; $i>=1; $i--){
        $product *= $i;
    }
    return $product;
}



//problem 19
$terms=5;
$sum=0;
for($i=1; $i<=$terms; $i++){
    $sum += (1/$i) ;
}
echo "Sum of the harmonic series upto $terms terms : $sum";



//problem 20
$rows= 5;
for ($i=0;$i<$rows;$i++){
    $asterisks=2*$i+1;
    for ( $j=0; $j<$asterisks; $j++){
        echo "*";
    }
    echo "<br>";
}


//problem 21
$terms=5;
$sum=0;
for ($i=0; $i<$terms; $i++){
    for ($j=0; $j <= $i; $j++) { 
        echo "9";
       $sum += 9*pow(10, $j);
    }
    echo "<br>";    
}
echo "The sum of the series: $sum";


//problem 22


//problem 23
$x=3;
$terms=5;
$sum=0;
for ($i=0; $i<$terms; $i++){
    $term = (pow($x,$i)/factorial($i));
    $sum += $term;
}
echo "The sum = $sum <br> Number of terms = $terms <br> Value of x = $x";

function factorial($n){
    $product=1;
    for($i=$n; $i>=1; $i--){
        $product *= $i;
    }
    return $product;
}

////problem 24
$x=2;
$terms=5;
$sum=0;
for ($i=0; $i<$terms; $i++){
    $term = (pow($x,$i*2+1))*pow(-1,$i);
    $sum += $term;
}
echo "The sum = $sum <br> Number of terms = $terms <br> Value of x = $x";

function factorial($n){
    $product=1;
    for($i=$n; $i>=1; $i--){
        $product *= $i;
    }
    return $product;
}



//problem 25
$terms=5;
$sum=0;
for ($i=1; $i<=$terms; $i++){
    $term = pow($i,2);
    $sum += $term;
}
echo "The sum = $sum <br> Number of terms = $terms ";


//problem 26
$terms=5;
$sum=0;
for ($i=0; $i<$terms; $i++){
    for ($j=0; $j <= $i; $j++) { 
        echo "1";
       $sum += 1*pow(10, $j);
    }
    echo "<br>";    
}
echo "The sum of the series: $sum";

//problem 27
$num=28;
$sum=0;
for( $i =1; $i<$num; $i++){
    if($num%$i == 0){
        $sum += $i;
    }
}
echo " The sum of the divisors is : $sum <br>";
if($sum != $num){
    echo "The number is not perfect";
}else{
    echo " The number is perfect";
}


//problem 28
function findPerfectNums($start, $end){
    $perfects=array( );
    for ($i=$start; $i<=$end; $i++){
        if(findPerfect($i)){
            array_push($perfects,$i);
        }
    }
    echo "The Perfect numbers are : ";
    for($i=0; $i<count($perfects); $i++){
        echo "$perfects[$i], ";
    }
}


function findPerfect($num){
    $sum=0;
    for( $i =1; $i<$num; $i++){
        if($num%$i == 0){
            $sum += $i;
        }
    }
    if($sum != $num){
        return false;
    }else{
        return true;
    } 
}

findPerfectNums(1,50);




////problem 29
function findArmstrong($num){
    $number = strval($num);
    $sum = 0;
    for($i=0; $i<strlen($number); $i++){
        $sum += pow($number[$i],3);
    }
    if($sum != $num){
        echo "this is not an armstrong num ";
        // return false;
    }else{
        echo "this is an armstrong num ";
        // return true;
    }
}

findArmstrong(153);




//problem 30

function findArmstrongNums($start, $end){
    $armstrongs= array();
    for ($i=$start; $i <= $end ; $i++) {
        if(findArmstrong($i) ){
            array_push($armstrongs, $i);
        }
        # code...
    }
    echo "The Armstrongs numbers are : ";
        for($i=0; $i<count($armstrongs); $i++){
            echo "$armstrongs[$i], ";
        }
}


function findArmstrong($num){
    $number = strval($num);
    $sum = 0;
    for($i=0; $i<strlen($number); $i++){
        $sum += pow($number[$i],3);
    }
    if($sum != $num){
       
        return false;
    }else{
        
        return true;
    }
}

findArmstrongNums(1,1000);


//problem 31
$rows= 5;
for ($i=0;$i<=$rows;$i++){
    for($k=1; $k<=$rows-$i; $k++){
                echo "&nbsp&nbsp";
    }
    for ( $j=1; $j<=2*$i-1; $j++){
        echo "*";
    }
    echo "<br>";
}


for ($i=$rows-1;$i>=1;$i--){
    for($k=1; $k<=$rows-$i; $k++){
                echo "&nbsp&nbsp";
    }
    for ( $j=1; $j<=2*$i-1; $j++){
        echo "*";
    }
    echo "<br>";
}


//problem 32 
function findPrime($n){
    if($n==1 || $n<0){
        echo "it is not a prime number";
                return false;
            }
    for($i=2;$i<$n;$i++){
        if($n%$i == 0 ){
            echo "it is not a prime number";
            return false;
        }
    }
    echo "it is a prime number";
    return true;
}
findPrime(13);


//problem 33
function pascalsTriangle($rows){
   
    for ($i=0; $i < $rows; $i++) { 
        for ($k=$rows-1; $k>=$i ; $k--) { 
            echo "&nbsp&nbsp";
        }
        for ($j=0; $j <= $i ; $j++) { 
            $coefficient = combination($i,$j) ;
            echo "$coefficient ";
        }
        echo "<br>";
       
    }
}
function combination($n,$r){
 return factorial($n)/(factorial($r)*factorial($n-$r)) ;
}
function factorial($n){
    $product=1;
    for($i=$n; $i>=1; $i--){
        $product *= $i;
    }
    return $product;
}
pascalsTriangle(10);


//problem 34
function findAllPrimes($start, $end){
    $primes = array();
    for( $i = $start; $i<=$end; $i++){
        if(findPrime($i)){
            array_push($primes, $i);
        }
    }
    echo "The prime numbers in the given range are : ";
    for($i=0; $i<count($primes); $i++){
        echo "$primes[$i], ";
    }
}
function findPrime($n){
    if($n == 1 || $n<0){
        return false;
    }
    for($i=2;$i<$n;$i++){
        
        if($n%$i == 0 ){
           
            return false;
        }
    }
  
    return true;
}
findAllPrimes(1,30);


//problem 35
function fibonacci($n){
    $series = array(0,1);
    for ($i=2; $i <$n ; $i++) {
        $fiboElem = $series[$i-1] +$series[$i-2];
        array_push($series, $fiboElem); 
        # code...
    }

    echo " The fibo series upto $n elememts is : ";
    for ($i=0; $i <count($series) ; $i++) {
        echo "$series[$i], "; 
        # code...
    }
}
fibonacci(10);



//problem 36


//problem 37
function reverseNum($num){
    $string = strval($num);
    $reverse = "";
    for ($i=0; $i <strlen($string) ; $i++) {
        $reverse = $string[$i].$reverse; 
        # code...
    }
    $reversedNum = intval($reverse);
    return $reversedNum;
}
echo "The reversed number is ".reverseNum(12345);


//problem 38
function palindromeCheck($num){
    if(reverseNum($num) == $num){
        echo "$num is a palindrome";
    }else{
        echo "$num is not a palindrome";
    }
}
function reverseNum($num){
    $string = strval($num);
    $reverse = "";
    for ($i=0; $i <strlen($string) ; $i++) {
        $reverse = $string[$i].$reverse; 
        # code...
    }
    $reversedNum = intval($reverse);
    return $reversedNum;
}
palindromeCheck(122);


//problem 39
function sumOfNinesFactors($start, $end){
    $sum = 0;
    for ($i=$start; $i <$end ; $i++) { 
        if($i%9 == 0){
            $sum += $i;
        }
        # code...
    }
    return "The sum is $sum";
}
echo "".sumOfNinesFactors(100,200);


//problem 40


// //problem 41
function decToBinary($x) {
    $bin = 0;
    $rem; $i = 1; $step = 1;
    while ($x != 0) {
        $rem = $x % 2;
        $x = floor($x / 2);
        $bin = $bin + $rem * $i;
        $i = $i * 10;
    }
    echo "$bin";
}
decToBinary(25);


function decToOctal($x) {
    $bin = 0;
    $rem; $i = 1; $step = 1;
    while ($x != 0) {
        $rem = $x % 8;
        $x = floor($x / 8);
        $bin = $bin  + $rem* $i;
        $i = $i * 10;
    }
    echo "$bin";
}
decToOctal(52546);


function decToHex($x) {
    $hex;
    $i = 0; 
    while ($x != 0) {
        $temp = $x%16;
        if($temp<=9){
            $hex[$i]= chr(48+$temp);
        }
        else{
            $hex[$i]= chr(55+$temp);
        }
        $i++;
        $x = intval($x/16);

    }
    for($j=$i-1; $j>=0; $j--){
        echo $hex[$j];
    }
    echo "<br/>";
    
}
decToHex(525);
decToHex(116);
decToHex(10);
decToHex(33);



function binToDec($n){
    $num = strval($n);
    $dec = 0;
    $j=0;
    for ($i=strlen($num)-1; $i >=0; $i--) {
        $dec = $dec +( $num[$i] * pow(2,$j));
        $j++;
    }
    echo "$dec <br>";
}
binToDec(1011);
binToDec(111);
binToDec(1010);
binToDec(100001);


function octToDec($n){
    $num = strval($n);
    $dec = 0;
    $j=0;
    for ($i=strlen($num)-1; $i >=0; $i--) {
        $dec = $dec +( $num[$i] * pow(8,$j));
        $j++;
    }
    echo "$dec <br>";
}
octToDec(67);
octToDec(512);
octToDec(123);

function hexToDec($num){
   
    $dec = 0;
    $j=0;
    for ($i=strlen($num)-1; $i >=0; $i--) {
        if ( ord($num[$i]) <= 57){
            $dec = $dec +( $num[$i] * pow(16,$j));
        }else{
            $dec = $dec + ((ord($num[$i])-55) * pow(16, $j));
        }
        $j++;
    }
    echo "$dec <br>"; 
}
hexToDec("20D");
hexToDec("512");
hexToDec("123");



?>