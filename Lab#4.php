<?
//1
$ip = "206.190.36.45";
$host = gethostbyaddr($ip);
echo gethostbyname($host);
//1.2
$domain = 'mkyong123.com';

if (preg_match('/^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\\.)+[A-Za-z]{2,6}$/', $domain)) {
    $mydomain = $domain;
    echo 'Match';
} else {
    $mydomain = preg_replace("/^((?!-)[A-Za-z0-9-]{1,63}(?<!-)\\.)+[A-Za-z]{2,6}$/", "", $domain);
    echo 'No match';
}
//1.3
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://www.google.com/', false);
//5
$arr = array(':)', ';(', ';}', ':-D');
$search = array(':)', ':-D');
$count = 0;
for ($i = 0; $i < count($search); $i++) {
    echo '<br>' . $search[$i] . '<br>';

    $key = array_search($search[$i], $arr);

    echo 'Key value =>' . $key . " ";
    if ($key >= 0) {
        $count = $count + 1;
    }
}
echo '<br>' . 'Count value =>' . $count;
echo '<hr>';
$arr = array(';D', ':-(', ':-)', ';~)');
$search = array(':-)', ';D', '~)');
$count = 0;
for ($i = 0; $i < count($search); $i++) {
    echo '<br>' . $search[$i] . '<br>';

    $key = array_search($search[$i], $arr);

    echo 'Key value =>' . $key . " ";
    if ($key >= 0) {
        $count = $count + 1;
    }
}
echo '<br>' . 'Count value =>' . $count;
echo '<hr>';
$arr = array(';]', ':[', ';*', ':$', ';-D', '');
$search = [':-D'];
$count = 0;
for ($e = 0; $e < count($search); $e++) {
    echo '<br>' . $search[$e] . '<br>';

    $key = array_search($search[$e], $arr);

    if ($key >= 0) {
        $count = $count + 1;
    }
}
echo '<br>' . 'Count value =>' . $count;
echo '<hr>';
//6
$str = "raersrrrersassswwaaadfdfeeefgtthtgffdd";
function getLongestLength($string)
{
    $longest = $i = 0;
    $len = strlen($string);
    while ($i < $len) {
        if (($length = strspn($string, $string[$i], $i)) > $longest) {
            $longest = $length;
        }
        $i += $length;
    }
    return $longest;
}

print_r(getLongestLength($str));