<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UTF-8”>
<title>GET・POST練習</title>
</head>
<body>
    <h1>データの送信</h1>
    <form action="lesson9.php" method="post">
        <label>名前</label><input type="text" name="name"><br/>
        <label>年齢</label><input type="number" name="age"><br/>
        <input type="submit" value="送信">
    </form>
</body>
</html>
<?php
// ・以下フォームからデータを受け取り、「XXさんはXX歳です」と表示してください。また、年齢が120歳以上ならエラーを表示してください。
$name = $_POST['name'];
$age = $_POST['age'];
if ($age <= '120') {     
  echo('<pre>');
  echo $name . 'さんは' . $age . '歳です';
} else if ($age >= '120') {
  echo 'エラーメッセージ';
  echo('</pre>');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET・POST練習</title>
</head>
<body>
  <h1>データの送信2</h1>
  <form action="lesson9.php" method="post">
    <label>ID</label><input type="text" name="id"><br/>
    <label>PW</label><input type="number" name="password"><br/>
    <input type="submit" value="送信">
  </form>
</body>
</html>
<?php
/* ・フォームから送信されたID、パスワードを会員リスト(ID,パスワード,名前)と比較して
   ID、パスワードが一致したら名前を、それ以外はエラーメッセージを表示してください。
   ※フォームは上記htmlを参考に、会員リストは連想配列で自由に作ってください(3人程度)
 */
$users = [];
$users = [
  [
    'id' => '1',
    'pass' => '123',
    'name' => '田中'
  ],
  [
    'id' => '2',
    'pass' => '456',
    'name' => '斉藤'
  ],
  [
    'id' => '3',
    'pass' => '789',
    'name' => '前田'
  ]
];
// 変数宣言
$id;
$pw;
$index;
// ID、パスワードが一致したら名前を、それ以外はエラーメッセージを表示してください。
if (isset($_POST['id'])) {
  $id = $_POST['id'];
}
if (isset($_POST['password'])) {
  $pw = $_POST['password'];
}
if (isset($_POST['id'])) {
  $index = array_search($id, array_column($users, 'id'));
}
if (isset($_POST['id'])) { 
  if ($pw == $users[$index]['pass']) {
    echo('<pre>');
    echo $users[$index]['name'] . 'さん';
  } else {
    echo 'エラーです。' . '<br/>';
    echo('</pre>');
  }
}
?>