<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
 $user_name = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

    // 配列$user_nameの要素を一つずつ順番に出力する
    foreach ($user_name as $user_name) {
    echo $user_name . '<br>';
    }
    
    // 配列$user_nameのインデックスと値を一つずつ順番に出力する
    foreach ($user_name as $index => $value) {
      echo "{$index} : {$value} <br>";
    }
    ?>
    </p>
    <p>
      <?php
      $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

      // 連想配列$personal_dataのキーと値を一つずつ順番に出力する
      foreach ($personal_data as $key => $value) {
        echo "{$key} は{$value}です。<br>";
        
      }

      // 連想配列$personal_dataの値を一つずつ順番に出力する
      foreach ($personal_data as $value) {
        echo $value . '<br>';
      }
        ?>
    </p>
    
    <p>
      <form>
        <select>
          <?php
          $birthplace = [
            '北海道地方',
            '東北地方',
            '関東地方',
            '中部地方',
            '近畿地方',
            '中国地方・四国地方',
            '九州地方',
          ];
          // 配列$user_nameの要素を一つずつ順番に出力する
          foreach ($birthplace as $birthplace) {
            echo "<option>{$birthplace}</option>";
          }
          ?>
        </select>
      </form>

      <p>
        <?php
        $user_name = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

        //検索したいユーザー名を代入する変数
        $target = '侍二郎';

        foreach ($user_name as $user_name) {
          echo $user_name . '<br>';

          //変数$user_nameと変数$targetが一致すれば、break文で繰り返し処理を強制終了する
          if ($user_name === $target) {
            echo "{$target}さんが見つかったので、繰り返し処理を強制終了します";
            break;
          }
        }
        ?>
        </p>

    </body>
</html>