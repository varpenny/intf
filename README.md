##前言
基于 CodeIgniter 开发一些常用的数据接口，方便日常的客户端页面请求数据测试用。

##接口概览
(1) **图片类**

根据参数出指定尺寸的图片分页数据，[详情>>](https://intf-varpenny.herokuapp.com/gallery?picSize=400x300&pageNo=2&pageSize=5&total=300&callback=showData)

`picSize`　图片尺寸*（默认：800x600）*

`pageNo`　加载的页码*（默认：1）*

`pageSize`　每页数据的数目*（默认：10）*

`total`　数据总数*（默认：5000）*

`callback`　支持回调函数

(2) **随机数类**

生成指定范围内的不重复的随机数，[详情>>](https://intf-varpenny.herokuapp.com/nums?start=10&end=100&total=5&callback=showData)

`start`　起始值*（默认：0）*

`end`　结束值*（默认：0）*

`total`　总数*（默认：0）*

`callback`　支持回调函数
