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
    <p>
      <?php
      // クラスを定義する
      class User {
        // プロパティを定義する
        private $name;
        private $age;
        private $gender;

        // コンストラクタを定義する
        public function __construct(string $name, int $age, string $gender) {
          $this->name = $name;
          $this->age = $age;
          $this->gender = $gender;
        }
      }

      //インスタンス化する
      $user =new User('侍太郎', 36, '男性');

      // インスタンス$userの各プロパティ値を出力する
      print_r($user);
      ?>
    </p>
    <p>
      <?php
     
     // 演習(AI、各プロパティに直接アクセスして、値を代入する)
      class Eve_nt {
        public $name;
        public $date;
        public $location;
    
        // コンストラクタで各プロパティに値を代入
        public function __construct($name, $date, $location) {
            $this->name = $name;
            $this->date = new DateTime($date);
            $this->location = $location;
        }
    
        // 開催日までの日数を返すメソッド
        public function daysUntilEvent() {
            $today = new DateTime();
            $interval = $today->diff($this->date);
            return $interval->days;
        }
    }
    
    // インスタンスの作成
    $event = new Eve_nt("プログラミング初心者向けセミナー", "2025-05-10", "東京国際フォーラム");
    
    // プロパティを出力
    echo "イベント名: " . $event->name . "<br>";
    echo "開催日: " . $event->date->format('Y-m-d') . "<br>";
    echo "開催場所: " . $event->location . "<br>";
    
    // 開催日までの日数を出力
    echo "開催日まであと " . $event->daysUntilEvent() . " 日です。<br>";
    ?>
</p>


 <!-- 演習(各プロパティに間接的にアクセスして、値を代入する) -->
    <p>
      <?php
    class Event
{
    private $name;
    private $date;
    private $location;

    // コンストラクタ
    public function __construct($name, $date, $location)
    {
        $this->name = $name;
        $this->date = new DateTime($date);
        $this->location = $location;
    }

    // 各プロパティの値を取得するメソッド
    public function getName()
    {
        return $this->name;
    }

    public function getDate()
    {
        return $this->date->format('Y-m-d');
    }

    public function getLocation()
    {
        return $this->location;
    }

    // 開催日までの日数を返すメソッド
    public function daysUntilEvent()
    {
        $today = new DateTime();
        $interval = $today->diff($this->date);
        return $interval->days;
    }
}

// 実行結果
$event = new Event(
    'プログラミング初心者向けセミナー', 
    '2024-12-15', // 現在より未来の日付を設定
    '東京国際フォーラム'
);

// 各プロパティにアクセスして値を出力
echo "イベント名: " . $event->getName() . PHP_EOL;
echo "開催日: " . $event->getDate() . PHP_EOL;
echo "開催場所: " . $event->getLocation() . PHP_EOL;

// 開催日までの日数を出力
echo "開催日までの日数: " . $event->daysUntilEvent() . "日" . PHP_EOL;

?>
</p>
    </body>
</html>