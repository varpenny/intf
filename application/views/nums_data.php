<?php
/**
 * 生成指定范围不重复的随机数
 * @author penny
 */
$start = FILTER_INPUT(INPUT_GET, 'start');
$end = FILTER_INPUT(INPUT_GET, 'end');
$total = FILTER_INPUT(INPUT_GET, 'total');
$callback = FILTER_INPUT(INPUT_GET, 'callback');

function getUniqueNums($start, $end, $total) {
    $count = 0;
    $return = array();
    while ($count < $total) {
        $return[] = mt_rand($start, $end);
        $return = array_flip(array_flip($return));
        $count = count($return);
    }
    shuffle($return);
    return $return;
}

$start = is_null($start) ? 0 : intval($start, 10); // 起始值
$end = is_null($end) ? 0 : intval($end, 10); // 结束值
$total = is_null($total) ? 0 : intval($total, 10); // 总数

// 转换成 JSON 格式
$jsonStr = json_encode(array(
    'array' => getUniqueNums($start, $end, $total),
    'start' => $start,
    'end' => $end,
    'total' => $total
));

// 加入 callback 参数支持
if ($callback && 0 < strlen($callback)) {
    echo $callback.'('.$jsonStr.')';
} else {
    echo $jsonStr;
}

?>