<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'sql_lesson');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}

// ここにDB処理いろいろ書く
$sql = "SELECT * FROM client";
if ($result = $mysqli->query($sql)) {
    // 連想配列を取得
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . $row["name"] . "<br>";
    }
    // 結果セットを閉じる
    $result->close();
}
// DB接続を閉じる
$mysqli->close();


?>

<html>
<head>
</head>
<body>
    <form action="result.php" method="post"> 
        name:<input type="text" name="name" /><br>
        pass:<input type="password" name="pass" /><br>
        <input type="submit" value="登録" />
    </form>
</body>
</html>