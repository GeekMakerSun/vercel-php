<?php
// 返回JSON
header('Content-type: application/json;charset=utf-8');
 
// 官方API接口
$api = get_headers('http://mp.weixinbridge.com/mp/wapredirect?url='.$_REQUEST['url']);
 
// 判断是否被拦截，主要是下标为6的节点返回的是weixin110就代表被封了
if (trim(empty($_REQUEST['url']))) {
        $result = array(
                'code' => 201,
                'msg' => '请传入需要检测的URL',
                'tips' => 'www.likeyun.cn'
        );
}else if($api[6] !== 'Location: '.$_REQUEST['url'].''){
        $result = array(
                'code' => 202,
                'msg' => '域名被拦截',
                'tips' => 'www.likeyun.cn'
        );
}else{
        $result = array(
                'code' => 200,
                'msg' => '域名正常',
                'tips' => 'www.likeyun.cn'
        );
}
 
// 输出JSON
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>