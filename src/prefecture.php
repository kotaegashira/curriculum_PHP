<?php
// require_once関数で呼び出し
require_once('required.php');
// 地方ごとの県を表示
try {
    $dbh = db_open();
    $sql = 'SELECT a.prefecture_name, b.name FROM large_area AS a JOIN prefecture AS b ON a.large_area_id = b.large_area_id;';
    $stmt = $dbh->query($sql);
    // 接続を切る
    $sql = null;
    $dbh = null;
    while ($row = $stmt->fetch()) {
        echo $row[0];
        echo ' : ' . $row[1] . '<br>';
    };
} catch (PDOException $e) {
    echo "エラー!: " . $e->getMessage() . '<br>';
    // 例外処理時接続を切る
    $sql = null;
    $dbh = null;
    exit;
}
?>