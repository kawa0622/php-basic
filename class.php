<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
    // クラスを定義する
    class product {
      // プロパティを定義する
      public $name; // 商品名
    }

    // インスタンスを生成する
    $shampoo = new product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセスし、値を表示する
    echo $shampoo->name;
    ?>
    </p>
    </body>
</html>