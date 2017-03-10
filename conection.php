<?php
//一度だけ読み込みます。
require_once('config.php');

//DB接続設定
function connectPdo() {
  try{
    return new PDO(DSN,DB_USER,DB_PASSWORD);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}
