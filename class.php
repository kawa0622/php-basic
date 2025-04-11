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

      // メソッドを定義する
      public function set_name(string $name) {// stringは文字列のこと
        $this->name = $name; // プロパティに値を代入する
      }
      public function show_name() {
        echo $this->name . '<br>'; // プロパティの値を表示する
      }
    }

    // インスタンスを生成する
    $coffee = new Product();

    //メソッドにアクセスして実行する  
    $coffee->set_name('コーヒー'); // メソッドにアクセスし、値を代入する
    $coffee->show_name(); // メソッドにアクセスし、値を表示する

    // インスタンスを生成する
    $shampoo = new Product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセスし、値を表示する
    echo $shampoo->name;
    ?>
    </p>
    </body>
</html>