<?php 
// 掛け算の九九を表示してください。 (for文をネストする)
for ($num = 1; $num <= 9; $num++) {
  for ($score = 1; $score <= 9; $score++) {
    echo "{$num} * {$score}=" . $num * $score . "<br>";
  }
}
// 以下の配列から名前、年齢、出身を表示してください[配列]
$emp = [
  '山田' => ['age' => '20','pref' => '東京'],
  '田中' => ['age' => '23','pref' => '神奈川'],
  '佐藤' => ['age' => '24','pref' => '埼玉'],
  '鈴木' => ['age' => '25','pref' => '千葉'],
];
foreach ($emp as $key => $value) {
  echo "name:{$key}" . "<br>";
  echo "age:{$value['age']}" . "<br>";
  echo "pref:{$value['pref']}" . "<br>";
}
/* 
  1~50までの3が付く数字と3の倍数だけの配列を作成し、その後出力してください。
  3がつく数字の判定は文字列に変換して、文字列検索する関数を使用してください。（自分で調べましょう）
  [表示イメージ]
  3 6 9 12 13 ........
 */
$array = [];
for ($num = 1; $num <= 50; $num++) {
  if ($num % 3 == 0 || strpos((string)$num, '3') !== false) {
    $array[] = $num;
  }
}
echo('<pre>');
print_r($array);
echo('</pre>');
/* 
  2つ目の課題の配列から、名前と出身地だけの連想配列を作成し、表示してください。
  [配列]
  [name => '名前', 'pref' => '出身']
 */
$array = [];
foreach ($emp as $key => $value) {
  array_push($array, ['name' => $key, 'pref' => $value['pref']]);
}
echo('<pre>');
print_r($array);
echo('</pre>');
?>

