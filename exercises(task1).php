<?php

echo "EX-1","<br>";
echo "1-upper case: ";
$str="this Is the first task";
echo strtoupper($str),"<br>";

echo "--------------------------------------------------","<br>";

echo "2-lower case: ";
echo strtolower($str),"<br>";
echo "--------------------------------------------------","<br>";

echo "3-upper case for first letter: ";
echo ucwords($str),"<br>";
echo "--------------------------------------------------","<br>";

echo "4-first letter upper: ";
echo ucfirst($str),"<br>";
echo "--------------------------------------------------","<br>";
echo "EX-2","<br>";
echo "number format:  ";
$string = '085119';

$numformat=substr(chunk_split($string, 2, ':'), 0, -1);
echo $numformat,"<br>";


echo "--------------------------------------------------","<br>";
echo "EX-3","<br>";
$orange="this is the coding academy by orange";



if ( str_contains( $orange,'orange')){

    echo "word fuond!","<br>";}

echo "--------------------------------------------------","<br>";

echo "EX-4","<br>";
$path = "localhost/php/test.php";
  
$file1 = basename($path);
echo $file1,"<br>";
echo "--------------------------------------------------","<br>";
echo "EX-5","<br>";
$email  = 'ziad@geeks.com';
  
  
  $username = strstr($email, '@', true);
  
 
  echo $username."<br>";

  echo "--------------------------------------------------","<br>";
  echo "EX-6","<br>";
  $newstring = substr($email , -3);
  echo $newstring,"<br>";
  echo "--------------------------------------------------","<br>";
  echo "EX-7","<br>";
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $pass= substr(str_shuffle($chars),0,8);
    echo $pass,"<br>";
    echo "--------------------------------------------------","<br>";
    echo "EX-8","<br>";


    $st="that is amazing car";
    $arr=explode(' ', $st);
    $arr[0]="our";

    foreach ($arr as $value) {
        echo "$value ";
      }
    

    echo "<br>","--------------------------------------------------","<br>";
    echo "EX-9","<br>";

  

    $string1='dragonball';
    $string2='dragonboll';
    $position = strspn($string1 ^ $string2, "\0");

    printf(
        'First difference at position %d: "%s" vs "%s"',
        $position, $string1[$position], $string2[$position]
    );
    echo "<br>","--------------------------------------------------","<br>";
    echo "EX-10","<br>";
    $dump="Twinkle, twinkle, littlestar.";
$d=explode(' ', $dump);

echo var_dump($d);


    echo "<br>","--------------------------------------------------","<br>";
    echo "EX-11","<br>";
    $str = 'a';
echo ++$str;
echo "<br>","--------------------------------------------------","<br>";
echo "EX-12","<br>";
$brown = 'the brown fox';
$replacement = 'quick ';

echo substr_replace($brown, $replacement, 4, 0);

echo "<br>","--------------------------------------------------","<br>";


$arrb=explode(' ', $brown);
 echo $arrb[0];

echo "<br>","--------------------------------------------------","<br>";
echo "EX-13","<br>";
$num=00000683205.4;
$NoZero=explode('0', $num);
 foreach($NoZero as $v){
  echo $v;
 }

 echo "<br>","--------------------------------------------------","<br>";
 echo "EX-14","<br>";
$fox="the quick brwon fox jump over the lazy dog";
$NoFox=explode('fox', $fox);
foreach($NoFox as $v){
 echo $v;
}
echo "<br>","--------------------------------------------------","<br>";
echo "EX-15","<br>";
$dash="the quick brwon fox jump over the lazy dog-------";
echo str_replace("-","",$dash); 
echo "<br>","--------------------------------------------------","<br>";
echo "EX-16","<br>";
$x='\"\1+2\3*2:2-3/4*3';
$v=str_replace(array( "+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^",
"~", "*", "?", ":","\"","/","\\"), ' ', $x);

echo $v;

echo "<br>","--------------------------------------------------","<br>";
echo "EX-17","<br>";
$tt="the quick brown fox jumbs over the lazy dog";
$t=explode(' ', $tt);

for($i=0;$i<5;$i++){
  echo $t[$i]." ";
}
 


echo "<br>","--------------------------------------------------","<br>";
echo "EX-18","<br>";
$c="2,564.32";
echo str_replace(",","",$c); 
echo "<br>","--------------------------------------------------","<br>";
echo "EX-19","<br>";
for ($x = ord('a'); $x <= ord('z'); $x++){
 echo chr($x)." ";}

 echo "\n";
 echo "<br>","--------------------------------------------------","<br>";

 $stat="the quick-brown:fox!jumbs)over the lazy dog";
 $n=str_replace(array( "+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^",
"~", "*", "?", ":","\"","/","\\"), ' ', $stat);

$after=explode(' ', $n);

for($i=0;$i<5;$i++){
  echo $after[$i]." ";
}


echo "<br>","--------------------------------------------------","<br>";



?>
