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
    ?>
    </p>
    </body>
</html>