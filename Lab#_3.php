<?php
//1
echo '<hr>'. "Завдання 1-ше: ";
$arr = [4, 3, 1, 5, 8, 2];
$repeat = [];
foreach ($arr as $value) {
    for ($i = 0; $i < $value; $i++) {
        $repeat[] = $value;
    }
}
var_dump($repeat);

//2
echo '<hr>'. "Завдання 2-ге";
$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
sort($temperatures);
$arrlength = count($temperatures);
$average = array_sum($temperatures) / count($temperatures);
$array = sort($temperatures);
//mimalne znachennya
$min = array_slice($array, 0, 3);
print_r ($min);
//seredne
foreach ($array as $key) {
    $arrayForAverage[$key] = abs($key - $average);
}
asort($arrayForAverage);
$getKeys = array_keys($arrayForAverage);
$average_ = array_slice($getKeys, 0, 3);
print_r($average);
//maksumalne
$max = rsort(array_slice($array, 0, 3));
print_r($max);

//3
/*-Отримати массив відсортований за ціною книжок

- Отрамати відфільтрований массив книжок у яких є тег ‘php’*/
echo '<hr>'. "Завдання 3-тє";
$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JSomething is wrong: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jSomething is wrong']
    ],
    [
        'name' => "Miss Peregrine's Home for Peculiar Children",
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];
echo 'массив відсортований за ціною книжок: ';
$data_price = array();
foreach ($books as $key => $arr) {
    $data_price[$key] = $arr['price'];
}
array_multisort($data_price, SORT_NUMERIC, $books);
var_export($books);

echo "відфільтрований массив книжок у яких є тег 'php’: ";
$books_php = $books;
foreach ($books_php as $index => $book) {
    if(!isset($book['tags']) || !in_array('php', $book['tags'])){
        unset($books_php[$index]);
    }
}
var_dump($books_php);

//4
echo '<hr >'. 'Завдання 4-те: ';
$arr = [10,-80,10,10,15,35] ;
$result = [];
foreach ($arr as $index => $value){
    $result[$index] = [
        'left_nums' => [],
        'right_nums' => []
    ];
    for($i = 1; $i < count($arr); $i++){
        if(isset($arr[$index-$i])){
            $result[$index]['left_nums'][] = $arr[$index-$i];
        }
        if(isset($arr[$index+$i])){
            $result[$index]['right_nums'][] = $arr[$index+$i];
        }
    }
    $result[$index]['left_sum'] = array_sum($result[$index]['left_nums']);
    $result[$index]['right_sum'] = array_sum($result[$index]['right_nums']);
    if($result[$index]['left_sum'] == $index && $result[$index]['right_sum'] == $index){
        $result['result'][] = $index;
    }
}
echo 'Result: ';
if(!empty($result['result'])){
    echo implode(', ', $result['result']);
}
else{
    echo '-1';
}
echo '<br><pre>';
var_dump($result);
echo '</pre>';
//5
echo '<hr >' . 'Завдання 5-те: ';
$input = [3, 1, 5, 3, 7, 4, 1, 5, 7];
$input2= [0, 0, 0.55, 0, 0 ];
$input3= [ 1, 1, 1, 2, 1, 1 ];
$result = array_unique($input);
print_r($result);

echo '<hr>';
$input = [3, 1, 5, 3, 7, 4, 1, 5, 7];
$input2= [0, 0, 0.55, 0, 0 ];
$input3= [ 1, 1, 1, 2, 1, 1 ];
function unique($input)
{
    $un = array_count_values(array_map('strval', $input));
    print_r(array_keys($un, "1"));
}