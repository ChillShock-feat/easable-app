<?php
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');
//CROS対策
header('Access-Control-Allow-Origin: *');

class GetBackData
{   
    /**
     * back.easableのmysqlからデータを取得する関数
     * @param array
     * @return array 連想配列の形式
     */
    public function getData($sql)
    {
        $url = 'https://back.easable.jp/easable-back/app/front/api.php';
        $data = [];

        // 送信データをURLエンコード。
        $data = http_build_query($sql, "", "&");

        // これを指定しないと動かない
        $header = [
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: " . strlen($data)
        ];
        // 送信の準備(ストリームを作る)
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => implode("\r\n", $header),
                'content' => $data
            ]
        ];

        $context = stream_context_create($options);

        $data = file_get_contents($url, false, $context);

        $data = json_decode($data, true);

        return $data;
    }
}
