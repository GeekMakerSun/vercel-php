<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="margin:0;">
    <?php
        header("Content-type:text/html;charset=utf-8");
        if ($_GET["url"] == 'baidu') {
            echo "<title>百度</title>";
            // echo "<h1>你好，我是李彦宏</h1>";
            echo "<iframe src='http://www.baidu.com' style='width:100%;height:100%;position:fixed;' frameborder='0'></iframe>";
        }else if ($_GET["url"] == 'taobao') {
            echo "<title>淘宝</title>";
            // echo "<h1>你好，我是马云</h1>";
            echo "<iframe src='http://www.taobao.com' style='width:100%;height:100%;position:fixed;' frameborder='0'></iframe>";
        }else if ($_GET["url"] == 'qq') {
            echo "<title>腾讯</title>";
            // echo "<h1>你好，我是马化腾</h1>";
            echo "<iframe src='http://www.qq.com' style='width:100%;height:100%;position:fixed;' frameborder='0'></iframe>";
        }else{
            echo "<h1>别乱来...</h1>";
        }
    ?>
</body>
</html>