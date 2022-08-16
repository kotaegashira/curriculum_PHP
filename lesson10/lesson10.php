<?php 
// [1]jsonファイルを読み込んで各都道府県名（キー名：name）を表示させる
$json = file_get_contents('sample.json');
$array = [];
$array = json_decode($json, true);
foreach ($array[0] as $key => $value) {
    echo('<pre>'); 
    echo "name: {$value['name']}";
    echo('</pre>');
}
/*
  [2]下記の形式に配列にセットして表示させるsample.json: ページ下部からダウンロードして使用してください。
  都道府県JSONファイル
 */
$data = [];
// 県名キー作成
foreach ($array[0] as $key => $value) {
    $prefecture = [$value['name'] => []];
    // 市町村名キー作成
    foreach ($value['city'] as $key => $city) {
        $prefecture[$value['name']][] = $city['city'];
        print_r('<pre>');
        print_r($prefecture);
        print_r('</pre>');
    }
    array_push($data);
}
print_r($data);
// [3]下記の形式に配列にセットして表示させる
// 配列にセットする大枠の作成
$data = [
    '北海道地方' => ['県名' => [], '市町村名' => []],
    '東北地方' => ['県名' => [], '市区町村名' => []],
    '関東地方' => ['県名' => [], '市区町村名' => []],
    '中部地方' => ['県名' => [], '市区町村名' => []],
    '近畿地方' => ['県名' => [], '市区町村名' => []],
    '中国地方' => ['県名' => [], '市区町村名' => []],
    '四国地方' => ['県名' => [], '市区町村名' => []],
    '九州地方' => ['県名' => [], '市区町村名' => []],
];
// 各地方ごとに分岐させる
foreach ($array[0] as $key => $value) {
    $local = '';
    if ((int)$key <= 1) {
        $local = '北海道地方';
    } elseif ((int)$key <= 7) {
        $local = '東北地方';
    } elseif ((int)$key <= 14) {
        $local = '関東地方';
    } elseif ((int)$key <= 23) {
        $local = '中部地方';
    } elseif ((int)$key <= 30) {
        $local = '近畿地方';
    } elseif ((int)$key <= 35) {
        $local = '中国地方';
    } elseif ((int)$key <= 39) {
        $local = '四国地方';
    } elseif ((int)$key <= 47) {
        $local = '九州地方';
    }
    // 地方の中に県名と地方を格納
    $data [$local]['県名'][] = $value['name'];
    foreach ($value['city'] as $key => $city) {
        $data[$local]['市区町村'][] = $city['city'];
    }
}
print_r('<pre>');
print_r($data);
print_r('</pre>');
?>