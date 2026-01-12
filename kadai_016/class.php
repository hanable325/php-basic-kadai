<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</titel>

<body>
    <p>
        <?php
       // Foodクラスを定義する
        class Food {
           // プロパティを定義する
            public $name;
            public $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this ->name = $name;
                $this ->price = $price;
                }
            // priceを表示するメソッド
            public function show_price(){
                echo $this->price. '<br>';
            }
        }

       // Animalクラスを定義する
        class Animal {
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightを表示するメソッド
            public function show_height(){
                echo $this->height . '<br>';
            }
        }

        // Step3: インスタンス作成
        $apple = new Food("りんご", 150);
        $dog = new Animal("犬", 50, 10);

        // print_rで出力
        print_r($apple);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        // Step4: メソッド実行
        $apple->show_price();
        $dog->show_height();

        ?>
    </p>
    </body>

    </html>
