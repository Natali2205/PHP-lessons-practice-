<?php
<?
php
//1
$str = 'var_test_text';
$arr = explode('_', $str);
$str2 = '';
	foreach ($arr as $key => $val) {
        if ($key != 0) {
            $str2 .= ucfirst($val);
        } else {
            $str2 .= $val;
        }
    }
echo "1). Перетворити рядок 'var_test_text' в 'varTestText'." . '<br>' . "Розв'язок: ";
echo $str2 . '<hr>';

//2
$str = array();
$str[0] = 'Ф'; 
$str[1] = 'Ы';
$str[2] = 'В';
$str[3] = 'А';
$str[4] = ' ';
$str[5] = 'о';
$str[6] = 'л';
$str[7] = 'д';
$str[8] = 'ж';

echo "2)  Є рядок наступного вигляду: 'ФЫВА олдж'. 
	Треба перетворити на наступний рядок 'АВЫФ ждло' utf-8" . '<br>' . "Розв'язок: ";

for ($i = 4; $i >= 0; $i--) {
    echo $str[$i];
}
echo $str[4];
for ($i = 8; $i > 3; $i--) {
    echo $str[$i];
}
echo '<hr>';

//3
echo "3)  Розв'язок: " . '<br>';
$a = [342, 55, 33, 123, 66, 63, 9];
	foreach ($a as $val) {
        if (strpos($val, '3') !== false) {
            echo $val . '<br>';
        }
    }
echo '<hr>';

//4
echo "4)  Розв'язок: " . '<br>';
$a = [342, 55, 33, 123, 66, 63, 9];
	$i = 0;
	foreach ($a as $val) {
        if (strpos($val, '3') !== false) {
            $i++;
        }
    }
	echo $i;

echo '<hr>';

//5
echo "4)  Розв'язок: " . '<br>';
	$str = 'super_girls';
	$check1 = substr($str, -1);
	$check2 = substr($str, 0, 1);
    $str2 = substr($str, 1);
if ($check2 == $check1) {
    echo ucfirst($str) . $str2;
} else {
    echo 'The' . ' ' . ucfirst($str);
}

echo '<hr>';

//6
echo "4)  Розв'язок: " . '<br>';
$str = 'ATTGC';
	echo strtr($str, ['A' => 'T', 'T' => 'A', 'G' => 'C', 'C' => 'G']) . '<br>';

$str2 = 'GTAT';
	echo strtr($str2, ['G' => 'C', 'T' => 'A', 'A' => 'T', 'T' => 'A']);