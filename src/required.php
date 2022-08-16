<?php 
// 処理内容を関数化(PDO接続用ファイル)
function db_open():PDO {
    $user = getenv('MYSQL_USER');
    $pass = getenv('MYSQL_PASSWORD');
    $db = getenv('MYSQL_DATABASE');
    $host = getenv('MYSQL_HOST');
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO(sprintf('mysql:dbname=%s;host=%s;charset=utf8', $db, $host), $user, $pass, $opt);
    return $dbh;
}
?>