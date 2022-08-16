<?php 
/*・1~10まで数値をランダムで生成して、偶数か奇数かを判定し表示するようにしてください。
生成したランダム値も表示してください。 ※ランダム値生成：rand(1,10);
*/
$num = rand(1, 10);
if ($num % 2 === 0) {
    echo $num . "は偶数です。";
} else {
    echo $num . "は奇数です。";
}
/*・テストの点数をランダムで生成して、点数に応じて以下の通り成績を表示してください。
0点〜49点    不可
50点〜69点   可
70点〜79点   良
80点〜99点   優
100点       満点
*/
$score = rand(0, 100);
if ($score < 50) {
    echo '不可';
} else if ($score < 70) {
    echo '可';
} else if ($score < 80) {
    echo '良';
} else if ($score < 90) {
    echo '優';
} else {
    echo '満点';
}
echo $score . '点' . "<br>";
/*・２教科のテストの点数をランダムで生成して、以下の条件に応じて合格/不合格を表示してください
両方とも 60 点以上の場合    合格
合計が 130 点以上の場合     合格
合計が 100 点以上かつ      どちらかのテストが90点以上であれば合格
上記以外は不合格
*/
$score_one = rand(0, 100);
$score_two = rand(0, 100);
$total = $score_one + $score_two;
echo '1教科:' . $score_one . '2教科:' . $score_two . "<br>";
if ($score_one >= 60 && $score_two >= 60) {
    echo '合格';
} else if ($total >= 130) {
    echo '合格';
} else if ($total >= 100 && ($score_one >= 90 || $score_two >= 90)) {
    echo '合格';
} else {
    echo '不合格';
}
?>