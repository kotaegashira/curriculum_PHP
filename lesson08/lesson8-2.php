<?php 
/*
  価格を渡し税込価格を返す関数を作成してください。（税込価格を表示すること）
  また、引数が数値でない場合、引数無しで呼び出した場合それぞれでエラーメッセージを表示してください。
 */
function tax($price = 100) {
  if (!is_numeric($price)) {
    return '文字列です。';
  }
  $tax = $price * 1.1;
  return $tax;
} 
// 関数の呼び出し
$price = tax(100);
echo '消費税込みの値段：' . $price . '円';
// 引数が数値でない場合エラーメッセージを表示。
$int = '引数';
echo is_numeric($int = '引数') ? '数値です。' : 'エラーメッセージ';
// 引数なしで呼び出した場合エラーメッセージを表示。
function foo() {
  echo 'エラーメッセージ';
}
foo();
/*
  変数が空かどうか判定する組み込み変数を使用して、
  空の場合OK、空でない場合はNGと表示する処理を作成してください。
 */
$value = '';
$string = '文字列';
if (empty($value)) {
  echo('<pre>');
  echo 'OK';
} else {
  echo 'NG';
}
if (empty($string)) {
  echo 'OK';
} else {
  echo 'NG';
  echo('<pre>');
}
/*
  配列かどうか判定する組み込み関数を使用して、
  配列の場合はOK、配列でない場合はNGと表示する処理を作成してください。
 */
$isArray = array('a', 'b', 'c');
if (is_array($isArray)) {
  echo('<pre>');
  echo '配列です。';
} else {
  echo 'OK';
}
// 配列です。
$notArray = 'abc';
if (is_array($notArray)) {
  echo '配列です。';
} else {
  echo 'NG';
  echo('</pre>');
}
// 配列ではありません。
?>