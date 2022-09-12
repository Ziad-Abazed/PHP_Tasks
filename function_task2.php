<?php
echo "Ex-1"."<br>";
function primeNum($num){
    
    $n = 0;

  for($i = 2; $i < ($num/2+1); $i++) {
    if($num % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $num." is a prime number.";
  } else {
    echo $num." is not a prime number.";
  }
    
}

primeNum(5);

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-2","<br>";
function reverse($s){
$len=strlen($s);
    for($i=$len;$i>=0;$i--){
        echo $s[$i];
        
    }
}
reverse("abcdefjh");

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-3","<br>";
function checkLowerCase($str){
        if($str==strtolower($str)){
            echo "your string is  ok";
        }
        else {
           echo "your string is not ok";

        }
    }


checkLowerCase("this is the test");


echo "<br>","--------------------------------------------------","<br>";
echo "Ex-4","<br>";
function swap($x,$y){
    $n=$x;
    $x=$y;
    $y=$n;
    return "x="."$x"."and"."y="."$y";


}

echo swap(4,5);

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-6","<br>";

function Armstrong($num){
    $numto="$num";
$sum=0;
$pow=0;

    for($i=0;$i<strlen($numto);$i++){

       $pow= pow($numto[$i],3);
       $sum=$sum+$pow;

    }

    if($num==$sum){
        echo $num." is  Armstrong";
    }
    else{
        echo $num."is not armstrong ";
    }


}
Armstrong(407);


echo "<br>","--------------------------------------------------","<br>";
echo "Ex-7","<br>";
function isPalindrome($str){
    $st=strtolower( str_replace(array( "+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^",
    "~", "*", "?", ":","\"","/","\\",","),"", $str));
    $after=explode(' ', $st);
$finalst="";
    for($i=0;$i<count($after);$i++){
        $finalst.=$after[$i];
      }
      $Rst=strrev($finalst);
    
    if($Rst==$finalst){
      echo  "this string is palindrome";
    }
    else{
       echo "this string is not palindrome";
    }
}
isPalindrome("Eva, can I see bees in a cave?");

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-8","<br>";
function removeDoubl($arr){
echo print_r(array_unique($arr));
}

removeDoubl([1,3,4,2,1,4,5,4,5]);
echo "<br>","--------------------------------------------------","<br>";
//PHP BASIC TASK
echo "PHP BASIC TASK"."<br>";
echo "Ex-1","<br>";
function checkLeapYear($year) {
    if(checkdate(2, 29, $year)==true){
        echo "this year is leap";

    }
    else{
        echo "this year not leap";
    }
    
}
checkLeapYear(2016);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-2","<br>";
function season($temp){

    if($temp<20){
        echo "it is winter time";
    }
    else{
        echo " it is summer time";
    }
}
season(30);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-3","<br>";
function sumSame($n,$n2){
    if($n==$n2){
        return "the triple=".($n+$n2)*3;
    }
    else{
        return "the sum=".$n+$n2;
    }
}

echo sumSame(3,3);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-4","<br>";

function multiBythree($num){
    if($num<=0){
        echo "the number must be positive or greater than zero";

    }
    elseif($num%3==0){
        return 'true';
    }
    else {
        return 'false';
    }
}

echo multiBythree(9);


echo "<br>","--------------------------------------------------","<br>";

echo "Ex-5","<br>";

function sum30($num,$num2){
    $sum=$num+$num2;
    if($sum==30){
        echo 'true';
    }
    else{
        echo 'false';
    }
}



sum30(20,10);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-6","<br>";
function rangeIn($num){
    if($num>=20 &&$num<=50){
        return 'true';
    }
    else{
        return 'false';
    }
}
 echo rangeIn(40);


echo "<br>","--------------------------------------------------","<br>";

echo "Ex-7","<br>";

function largest($arr){
    $max=$arr[0];
    for($i=1;$i<count($arr);$i++){
        if($arr[$i]>$max){
            $max=$arr[$i];

          

        }


    }
    echo "the largesnumber is: ".$max;
}

largest([2,3,5,1]);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-8","<br>";


function unitCal($unit){
    if($unit<=50){
        echo $unit." units the price 2.5JOD/unit the total is: ".($unit*2.50)."jod";
    }
   elseif($unit>50 && $unit<=100){
    echo $unit." units the price 5JOD/unit the total is: ".($unit*5)."jod";
    }
    elseif($unit>100 && $unit<=250){
        echo $unit." units the price 6.2JOD/unit the total is: ".($unit*6.2)."jod";
    }else{
        echo $unit." units the price 7.5JOD/unit the total is: ".($unit*7.50)."jod";
    }
}


unitCal(60);








echo "<br>","--------------------------------------------------","<br>";

echo "Ex-9","<br>";

function calcul($num,$num2,$op){

    if($op=='+'){
         return $num+$num2;
    }
    elseif($op=='*'){
        return $num*$num2;
    }
    elseif($op=='-'){
        return $num-$num2;
    }
    elseif($op=='/'){
        return $num/$num2;
    }


}
echo calcul(5,2,'+')."<br>";
echo calcul(5,2,'*')."<br>";
echo calcul(5,2,'-')."<br>";


echo "<br>","--------------------------------------------------","<br>";

echo "Ex-10","<br>";

function ageVote($age){
    if($age<18){
        return 'you can not vote';
    }
    else{
        return 'you can vote';
    }
}
echo ageVote(12);

echo "<br>","--------------------------------------------------","<br>";

echo "Ex-11","<br>";
function checknum($num){
    if($num==0){
        echo "the num is zero"."<br>";
    }
    elseif($num<0){
        echo "the number is negative"."<br>";
    }
    else{
        echo "the number is positive"."<br>";
    }
}

checknum(0);

checknum(4);
checknum(-1);



echo "<br>","--------------------------------------------------","<br>";

echo "Ex-12","<br>";

function studentMark($marks){
$average=0;
$sum=0;
$grade="";

for($i=0;$i<count($marks);$i++){
    $sum=$sum+$marks[$i];
}
$average=$sum/count($marks);

    if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "F";

return $grade;    

}

echo "the average= ".studentMark([50,60,60,60]);

?>