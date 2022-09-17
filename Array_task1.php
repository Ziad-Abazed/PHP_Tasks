<?php
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-1","<br>";
$colors = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-2","<br>";
echo '<ul>';
echo '<li>' . implode( '</li><li>', $colors) . '</li>';
echo '</ul>';


echo "<br>","--------------------------------------------------","<br>";
echo "Ex-3","<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;

}


echo "<br>","--------------------------------------------------","<br>";
echo "Ex-4","<br>";
	$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-5","<br>";
function insertIN($pos,$val){
   $arr=array(1,3,2,4,3);
   array_splice( $arr, $pos, 0, $val );
    return  $arr; 
}


print_r( insertIN(2,"$"));


echo "<br>","--------------------------------------------------","<br>";
echo "Ex-6","<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);
foreach($fruits as $key => $fruit)
{
echo  $key ." = ". $fruit ."<br>" ;

}

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-7","<br>";

function temperatures($temp){
$sum=0;

    foreach($temp as $t){
        $sum=$sum+$t;
    }
    $average=$sum/count($temp);
    echo "Average Temperature is: ".$average."<br>";
    sort($temp);
    
   echo "List of five lowest temperatures: ";
   for($i=0;$i<5;$i++){
    echo $temp[$i].",";
   } 
   echo "<br>";
   echo "List of seven highest temperatures: ";
   for($i=count($temp)-1;$i>(count($temp)-6);$i--){
    echo $temp[$i].",";
   }
    
  
   
} 
temperatures([70,80,78, 60, 65, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 61, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-8","<br>";

$array1=array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

print_r(array_merge($array1,$array2));
// foreach($array2 as $n){
//     array_push($array1, $n);
// }
// print_r($array1);
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-9","<br>";
function toUpper($arr){

    for($i=0;$i<count($arr);$i++){
        $arr[$i]=strtoupper($arr[$i]);
    }
    return $arr;

}

print_r( toUpper(array("red","blue", "white","yellow")));
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-10","<br>";
function toLower($arr){

    for($i=0;$i<count($arr);$i++){
        $arr[$i]=strtolower($arr[$i]);
    }
    return $arr;

}

print_r( toLower(array("RED","blUe", "white","yellow")));
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-11","<br>";

function rangebetween($arr){
echo "this numbers is divisible by:  ";
$divisible=array();
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%4==0){
        array_push($divisible,$arr[$i]);
    }
}
print_r($divisible);
}

rangebetween(range(200,250));
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-12","<br>";
function lenArr($arr){
    $min=strlen($arr[0]);
    $max=0;
  
    for($i=1;$i<count($arr);$i++){

        if( strlen($arr[$i])<$min ) {
            $min = strlen($arr[$i]);
        }
    
        if(strlen($arr[$i])>$max  ) {
            $max =strlen($arr[$i]);
        }
    }
    
        
    echo "the The shortest array length is ". $min. "The longest array length is ".$max;
    
}
lenArr(["abcd","abc","mmmmmm","d","de","wer"]);



echo "<br>","--------------------------------------------------","<br>";
echo "Ex-13","<br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "<br>","--------------------------------------------------","<br>";
echo "Ex-14","<br>";
function minNum($arr){
    sort($arr);
    if($arr[0]==0){
        echo $arr[1];
    }
    else{
        echo $arr[0];
    }
}
minNum([2,0, 10, 12,1, 6]);
?>