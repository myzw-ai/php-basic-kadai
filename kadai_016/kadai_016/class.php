<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>課題016</title>
</head>

<body>
    <p>
        <?php
        //クラスを定義
        class Food{
            //プロパティを定義
            private $name;
            private $price;

            //コンストラクタを定義(インスタンス前に変数へ初期設定)
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            //priceのみの出力結果をObjectのあとに表示させるためのメソッド配置を定義
            public function show_price(){
                echo $this->price;
                echo '<br>';
            }
            }
            //インスタンス化
            $food = new Food('potato',250);

            //オブジェクトの値を出力
            print_r($food);
            echo '<br>';

        //クラスを定義    
        class Animal{
            private $name;
            private $height;
            private $weight;

            //コンストラクタを定義(インスタンス前に変数へ初期設定)
            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            //heightのみの出力結果をObjectのあとに表示させるためのメソッド配置を定義
            public function show_height(){
                echo $this->height;
            }           
            }
            //インスタンス化
            $animal = new Animal('dog',60,5000);

            //オブジェクトの値を出力
            print_r($animal);
            echo '<br>';

            //各関数内で設定したメソッドの呼び出し
            $food->show_price();
            $animal->show_height();

            ?>
    </p>

    
</body>

</html>