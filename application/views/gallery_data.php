<?php
/**
 * 分页生成指定尺寸的图片数据
 * @author penny
 */

$picSize = FILTER_INPUT(INPUT_GET, 'picSize');
$pageNo = FILTER_INPUT(INPUT_GET, 'pageNo');
$pageSize = FILTER_INPUT(INPUT_GET, 'pageSize');
$total = FILTER_INPUT(INPUT_GET, 'total');
$callback = FILTER_INPUT(INPUT_GET, 'callback');

// 生成数据数组
function getPicArr($picSize = '800x600', $pageNo = 1, $pageSize = 10, $total = 5000) {
    $itemArr = array();
    for ($i = 1; $i <= $pageSize; $i++) {
        $num = ($pageNo - 1) * $pageSize + $i;
        if ($num > $total) 
        	break;

        $arr = explode('x', $picSize);
        $len = count($arr);
        $picWidth = 0 < $len ? $arr[0] : NULL;
        $picHeight = 1 < $len ? $arr[1] : NULL;
        if (!$picWidth) 
        	$picWidth = is_null($picHeight) ? '800' : $picHeight;
        if (!$picHeight) 
        	$picHeight = is_null($picWidth) ? '600' : $picWidth;

        $itemArr[] = array(
            'pic' => 'http://dummyimage.com/'.$picWidth.'x'.$picHeight.'/ddd/fff?text='.$picWidth.'+x+'.$picHeight.'+Pic'.$num,
            'des' => '图片描述'.$num
        );
    }
    return $itemArr;
}

$picSize = is_null($picSize) ? '800x600' : $picSize; // 图片尺寸，默认：800x600
$pageNo = is_null($pageNo) ? 1 : intval($pageNo, 10); // 页码，默认：1
$pageSize = is_null($pageSize) ? 10 : intval($pageSize, 10); // 每页数据数目，默认：10
$total = is_null($total) ? 5000 : intval($total, 10); // 所有数据总数，默认：5000

// 转换成 JSON 格式
$jsonStr = json_encode(array(
    'picArr' => getPicArr($picSize, $pageNo, $pageSize, $total),
    'pageNo' => $pageNo,
    'pageSize' => $pageSize,
    'total' => $total
));

// 加入 callback 参数支持
if ($callback && 0 < strlen($callback)) {
    echo $callback.'('.$jsonStr.')';
} else {
    echo $jsonStr;
}
?>