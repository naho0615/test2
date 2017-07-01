<?php 


$name = $_POST['name'];     //受信と変数に代入
echo "受信に成功しました。";   //echoで文字列を表示
echo "<br>";               //echoで<br>を表示
echo $name;                //変数を表示
echo "<br>";

$pass = $_POST['pass'];
echo "受信に成功しました。";
echo "<br>";
echo $pass;



echo $_GET['id'];           //GETで受信と表示

/*
echoとprint
POSTとGET
を調べましょう
*/
