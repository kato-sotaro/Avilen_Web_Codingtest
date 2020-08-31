<?php
$endpoint = explode('/', $_SERVER['PATH_INFO'])[1];
if($endpoint=="start"){
    include("index.html");
    exit;
}

if($endpoint=="api"){
    // ここに処理を記述してください。
    // jsonから倍数の数字を抽出してリストにする
    // 辞書を取得する方法がわからなかったので、ここでは辞書を取得したと仮定する
    $url = "http://sample.com/jsondata.json";
    array_nums = array_keys($url);
    // 1-30で倍数のものをifで分ける。
    for ($i = 1; $i <= 30; $i++) {
        $a = ''
        foreach ($array_nums as $array_num) {
            if ($i % $array_num == 0){
                $a += $url[$array_num] //jsonのキーを取り出す
            }
        }
        if ($a == ''){
            echo strval($i)　. ','
        } else{
            echo a . ','
        }
    }
    }
}
?>