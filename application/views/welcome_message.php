<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>接口概览</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="penny" />
<style type="text/css">
.wrap{width:1000px;margin:0 auto;font:14px/1.5 'Microsoft YaHei',sans-serif;color:#333;}
a,a:visited,a:active{color:#007adf;text-decoration:none;}
a:hover{color:#f60;text-decoration:none;}
dt{font-size:18px;}
ul{color:#555;}
i{color:#999;}
</style>
</head>
<body>
<div class="wrap">
    <h1>接口概览</h1>
    <dl>
        <dt>图片类</dt>
        <dd>
            <p>根据参数出指定尺寸的图片分页数据，<a href="gallery?picSize=400x300&pageNo=2&pageSize=5&total=300&callback=showData" target="_blank">详情&gt;&gt;</a></p>
            <ul>
                <li>picSize　图片尺寸<i>（默认：800x600）</i></li>
                <li>pageNo　加载的页码<i>（默认：1）</i></li>
                <li>pageSize　每页数据的数目<i>（默认：10）</i></li>
                <li>total　数据总数<i>（默认：5000）</i></li>
                <li>callback　支持回调函数</li>
            </ul>
        </dd>
    </dl>
</div>


</body>
</html>