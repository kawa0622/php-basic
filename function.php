<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 朝のあいさつを出力する関数を定義する
       function say_good_morning() {
           echo 'おはようございます！<br>';
           echo '昨日はよく眠れましたか？<br>';
           echo '今日も一日頑張りましょう！<br>';
       }

       // 夜のあいさつを出力する関数を定義する
       function say_good_evening() {
           echo 'こんばんは！<br>';
           echo '今日も一日お疲れさまでした。<br>';
       }

       // 朝のあいさつを出力する関数を呼び出す
       say_good_morning();

       // 夜のあいさつを出力する関数を呼び出す
       say_good_evening();
       ?>
   </p>
   <p>
    <?php
    //与えられた引数$priceに送料を加算し、その値を出力する関数を定義する
    function calculate_total($price) {
        $total = $price + 500;

        echo $total . '円<br>';
    }

    //関数を呼び出し、引数として購入金額を渡す  
    calculate_total(1200);
    ?>
   </p>
</body>

</html>