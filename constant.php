<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 定数に値を代入する
    const SHIPPING_FEE = 500;

    // 定数の中身を出力する
    echo SHIPPING_FEE;

    // 定数の値を再代入する（エラー）
    const SHIPPING_FEE = 800; // 定数は再代入できないのでエラーになります

    // 定数の中身を出力する
    echo SHIPPING_FEE; // 定数は再代入できないのでエラーになります
    ?>
  </p>
  </body>
</html>