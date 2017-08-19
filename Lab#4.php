<?
//1
$ip = "206.190.36.45";
$host = gethostbyaddr($ip);
echo gethostbyname($host);

//1.2
$domain = 'dotcom.com';
$host = gethostbyname($domain);
if (filter_var($host, FILTER_VALIDATE_IP)) {
    echo 'валідний';
} else {
    echo 'невалідний';
}
//1.3
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://google.com");
exit();

//2

$page = 'https://www.epam.com/about';
function counting($svg)
{
    preg_match_all('/<svg/', file_get_contents($svg), $matches);
    return count($matches[0]);
}

echo counting($page);
//3
$arr = [1, -2, 3, 4, -5, -4, 3, 2, 1];
$arr2 = [[1, 3], [0, 4], [6, 8]];
$arrMax[] = 0;
function maxumum($array, $ranges)
{
    foreach ($ranges as $key => $range) {
        $new = array_sum(array_slice($array, $range[0], ($range[1]) - $range[0] + 1));
        $arrMax[$key] = $new;
    }
    arsort($arrMax);
    return $ranges[key($arrMax)];
}

print_r(maxumum($arr, $arr2));
echo '<hr>';

//4

function task_sort($array, $start, $length = null)
{
    if (is_null($length)) {
        $length = count($array);
    }

    if (isset($start)) {
        $left = array_slice($array, 0, $start);
        if (isset($length)) {
            $right = array_slice($array, $start + $length);
            $current_segment = array_slice($array, $start, $length);

        } else {
            $right = array_slice($array, count($arr));
            $current_segment = array_slice($array, $start);
        }
        asort($current_segment);

        return array_merge($left, $current_segment, $right);
    } else {
        echo "incorect";
    }

}

$arr = [1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2];
var_dump(task_sort($arr, 3));
echo "<hr>";
var_dump(task_sort($arr, 3, 5));
echo '<hr>';

//5
function counterSmile($arr)
{
    return count(preg_grep('/[:;][-~]?[)D]/', $arr));
}

;
$arr1 = [':)', ';(', ';}', ':-D'];
$arr2 = [';D', ':-(', ':-)', ';~)'];
$arr3 = [';]', ':[', ';*', ':$', ';-D'];
echo "У 1:" . counterSmile($arr1) . ', ' . "У 2: " . counterSmile($arr2) . ', ' . "У 3:" . counterSmile($arr3);
echo '<hr>';
//6
$str = "raersrrrersassswwaaadfdfeeefgtthtgffdd";
function getLongestLength($str)
{
    $longest = 0;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if (($length = strrpos($str, $str[$i]) - $i + 1) > $longest) {
            $longest = $length;
            $char = $i;
        }

    }
    return $str[$char] . $longest;
}

print_r(getLongestLength($str));