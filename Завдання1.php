<?php

echo "<hr>"."Завдання 1:";
$text1="Hello";
$text2="World!";
echo $text1." ".$text2;

echo "<hr>"."Завдання 2:";
 function finder ($strof){
  $var="hello";
  $ht=strpos($var, $strof);
  $htl=strlen($strof);
  echo substr($var, $ht, $htl); 
  }
       echo "'",finder("h"),"', ";
       echo "'",finder("e"),"', ";
       echo "'",finder("o"),"'.";

echo "<hr>"."Завдання 3:";
function znach($a){
if($a>0&&$a<5){
	echo 'Вірно';
}else{ 
	echo 'Невірно';
 }
}
echo znach(-5).',';
echo znach(0).',';
echo znach(-3).',';
echo znach(2).'';

echo "<hr>"."Завдання 4:";
$min=14;
   if($min>0&&$min<15){
	echo "1 чверть";
}else if($min>=15&&$min<30){
    echo "2 чверть";
}else if($min>=30&&$min<45){
    echo "3 чверть";
}else if($min>=45&&$min<60){
    echo "4 чверть";
}else{
    echo "Число не попадає в жодну чверть";
}

echo "<hr>"."Завдання 5:";
$year=2000;
    if($year % 4 == 0&&$year % 100 != 0 ||$year % 400 == 0){
	echo"Рік Є високосним.";
    }else{
  echo "Рік %d НЕ Є високосним. \n";
   }

echo "<hr>"."Завдання 6:";
$string = '385934';
$part1= substr($string,0,3);
$part2= substr($string,3,3);
$part1mas=str_split($part1);
$part2mas=str_split($part2);
$p1=array_sum($part1mas);
$p2=array_sum($part1mas);

if($p1==$p2){
	echo "Yes";
}else{
	echo "No";
}
