<?php
// require_once関数で呼び出し
require_once('required.php');
// 県ごとの区の数を表示
try {
    $dbh = db_open();
    $sql = 'SELECT prefecture_name, count(*) FROM city JOIN large_area ON large_area.large_area_id = city.large_area_id GROUP BY large_area.prefecture_name ORDER BY large_area.large_area_id;';
    $stmt = $dbh->query($sql);
    // 接続を切る
    $sql = null;
    $dbh = null;
    while ($row = $stmt->fetch()) {
        echo $row[0] . 'は';
        echo $row[1] . '件' . '<br>';
    };
} catch (PDOException $e) {
    echo "エラー!: " . $e->getMessage() . '<br>';
    // 例外処理時接続を切る
    $sql = null;
    $dbh = null;
    exit;
}
?>