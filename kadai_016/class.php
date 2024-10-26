<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
  </head>

  <body>
    <p>
      <?php
        class Food{
          private $name;
          private $price;

          public function __construct(string $name, int $price){
            $this->name =$name;
            $this->price =$price;
          }

          public function show_price(){
            echo $this->price . '円<br>';
          }
        }

        class Animal{
          private $name;
          private $height;
          private $weight;

          public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          public function show_height(){
            echo $this->height . 'cm<br>';
          }
        }

        $food = new Food('えのき', 80);
        print_r($food);
        echo '<br>';
        $food->show_price();

        echo '<br>';

        $animal = new Animal('犬', 55, 27);
        print_r($animal);
        echo '<br>';
        $animal->show_height();

      ?>
    </p>
  </body>
</html>