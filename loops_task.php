<?php

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-1","<br>";
$j=1;
while($j<10){
echo $j."-";
$j++;

}
echo $j;

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-2","<br>";
$sum=0;
for($i=1;$i<31;$i++){
    $sum=$sum+$i;
}

echo "the total for the numbers between 0 to 30 is: ".$sum;

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-3","<br>";
for($i=0;$i<5;$i++){

    for($j=4;$j>=0;$j--){
       
        if ($j<=$i) {
            echo  chr(ord('A')+$i)." ";
            
        }else{
            echo "A ";
        }
    }
    echo "<br>";
}

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-4","<br>";
for ($i=0; $i < 5; $i++) { 
    for ($j=4; $j >=0; $j--) { 
        if ($j <= $i) {
            echo  (1+$i)." ";
        }else{
            echo "1"." ";
        }
    }
    echo "<br>";
}

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-5","<br>";

for($i=1;$i<6;$i++){
    for($j=1;$j<6;$j++){
        if($i==$j){
            echo $j." ";
        }
        else{
            echo "0"." ";
        }

    }
    echo "<br>";
}

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-6","<br>";
function facto($num){
    $f=1;
    for($i=1;$i<$num+1;$i++){
        $f=$f*$i;
    }

    echo "the factorial for ".$num." = ".$f;

}
facto(5);

echo "<br>","--------------------------------------------------","<br>";
echo "Ex-7","<br>";
$num = 0;  
$n1 = 0;  
$n2 = 1;  
 
echo $n1.' '.$n2.' ';  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  }




echo "<br>","--------------------------------------------------","<br>";
echo "Ex-8","<br>";

$text="Orange Coding Academy";
$txt=strtolower($text);
$search_char="c";
$count=0;
for($i=0; $i< strlen($txt); $i++)
  { 
    if(substr($txt,$i,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count;




echo "<br>","--------------------------------------------------","<br>";
echo "Ex-10","<br>";
for($i=1;$i<=50;$i++){
    if($i%3==0){
        echo "Fizz ";
    }
    elseif($i%5==0){
        echo "Buzz ";
    }
    elseif($i%5==0&&$i%3==0){
        echo "FizzBuzz ";

    }
    else{
        echo $i." ";
    }
}



echo "<br>","--------------------------------------------------","<br>";
echo "Ex-11","<br>";
$n=1;
for($i=1;$i<6;$i++){
    for($j=1;$j<=$i;$j++){
        echo $n++." "; 
    }
    echo "<br>";
}




echo "<br>","--------------------------------------------------","<br>";
echo "Ex-12","<br>";




echo "<br>","--------------------------------------------------","<br>";
echo "Ex-9","<br>";

?>




<html>
<body>
<table cellpadding="3" cellspacing="0" border="1">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>

