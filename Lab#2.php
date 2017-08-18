<?php
//1
$str = 'var_test_text';
$modify = lcfirst(str_replace('_', '', ucwords($str, '_')));
echo lcfirst($modify);
echo "1). Перетворити рядок 'var_test_text' в 'varTestText'." . '<br>' . "Розв'язок: ";
echo lcfirst($modify);
'<hr>';

//2
echo "2)  Є рядок наступного вигляду: 'ФЫВА олдж'. 
	Треба перетворити на наступний рядок 'АВЫФ ждло' utf-8" . '<br>' . "Розв'язок: ";
$str = 'ФЫВА олдж';
$str1 = substr($str, 0, 8);
$str2 = substr($str, -8, 8);
function change($s)
{
    preg_match_all('/./u', $s, $ar);
    return join('', array_reverse($ar[0]));
}
echo change($str1) . ' ' . change($str2);

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
        $i += substr_count($val, '3');
    }
}
echo "всього чисел з '3': " . $i;

echo '<hr>';
$a = [342, 55, 33, 123, 66, 63, 9];
$fileterd = array_filter($a, function ($value) {
    if (strpos($value, '3') !== FALSE) {
        echo $value . ' ';
    }
});

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