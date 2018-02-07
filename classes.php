<?php
    class Car
    {
        public $brand;
        public $price;
        public $color;
        public $enginePower;
        public $automatedGearbox;

        public function priceCar()
        {
            if ($this->automatedGearbox == 1) {
                return "Цена " . $this->brand . " с АТ: " . $this->price*1.8 . "$";
            } else {
                return $this->price;
            }
        }
    }
    $carAudi = new Car();
    $carAudi->brand = "Audi";
    $carAudi->price = 40000;
    $carAudi->enginePower = 6.5;
    $carAudi->automatedGearbox = 1;
    echo $carAudi->priceCar() . PHP_EOL;
    echo '<br><br>';
    $carRenault = new Car();
    $carRenault->brand = "Renault";
    $carRenault->price = 10000;
    $carRenault->color = "Yellow";
    $carRenault->enginePower = 1.6;
    $carRenault->automatedGearbox = 1;
    echo $carRenault->priceCar() . PHP_EOL;
    echo "<br><br>";

    class Tv
    {
        public $brand;
        public $diagonal;
        public $displayResolution;
        public $totalPrice;

        public function __construct($brand, $diagonal, $displayResolution)
        {
            $this->brand = strtolower($brand);
            $this->diagonal = $diagonal;
            $this->displayResolution = $displayResolution;
        }

        public function totalPrice()
        {
            if (($this->brand == "Sumsung" && $this->diagonal >= 1.1 && $this->displayResolution == "4k") ||
                ($this->brand == "LG" && $this->diagonal >= 1.1 && $this->displayResolution == "4k")) {
                return  100500;
            }
            return 35000;
        }
    }
    $tvSumsung = new TV('Sumsung', 1.1, '4k');
    $tvLg = new TV('LG', 1.1, '4k');
    echo $tvSumsung->brand . "<br>";
    echo $tvSumsung->totalPrice(). "<br>";
    echo $tvLg->brand . "<br>";
    echo $tvLg->totalPrice(). "<br>";
    echo "<br><br>";

    class Pen
    {
        public $brand;
        public $color;
        public $price;

        public function penInfo()
        {
            return $this->brand . ": " . $this->color . "-" . $this->price;
        }
    }
    $penErichKrause = new Pen;
    $penErichKrause->brand = "ErichKrause";
    $penErichKrause->color = 'black';
    $penErichKrause->price = 300;
    echo $penErichKrause->penInfo() . PHP_EOL;
    echo '<br><br>';
    $penParker = new Pen;
    $penParker->brand = "Parker";
    $penParker->color = 'blue';
    $penParker->price = 1000;
    echo $penParker->penInfo() . PHP_EOL;
    echo "<br><br>";

    class Duck
    {
        public static $count = 0;
        public function __construct()
        {
            self::$count++;
        }

        public function count_color()
        {
            if (self::$count <= 1) {
                return "Duck is white" . "<br>";
            } else {
                return "Duck is grey" . "<br>";
            }
        }
    }
    $duckWhite = new Duck;
    echo $duckWhite->count_color() . PHP_EOL;
    $duckWhite2 = new Duck;
    echo $duckWhite2->count_color() . PHP_EOL;
    $duckWhite3 = new Duck;
    echo $duckWhite3->count_color() . PHP_EOL;
    echo "<br><br>";

    class Product
    {
        public $shirt;
        public $jeans;
        public $shirtPrice;
        public $jeansPrice;
        public $price;

        public function getProducts()
        {
            $this->price = ($this->shirt * $this->shirtPrice) + ($this->jeans * $this->jeansPrice);
            if ($this->price >= 15000) {
                $this->price = ($this->price - ($this->price/100)*15);
                return $this->brand . ": " . $this->price;
            }
            return $this->brand . ": " . $this->price;
        }
    }
    $productMustang = new Product;
    $productMustang->brand = "Mustang";
    $productMustang->shirt = rand(1, 3);
    $productMustang->shirtPrice = 3000;
    $productMustang->jeans = rand(1,3);
    $productMustang->jeansPrice = 9000;
    echo $productMustang->getProducts() . PHP_EOL;
    echo '<br><br>';
    $productLevis = new Product;
    $productLevis->brand = "Levis";
    $productLevis->shirt = rand(1, 3);
    $productLevis->shirtPrice = 4000;
    $productLevis->jeans = rand(1, 3);
    $productLevis->jeansPrice = 10000;
    echo $productLevis->getProducts() . PHP_EOL;
    echo "<br><br>";

?>

<!doctype html>
<html lang="ru">
<head>
    <title>Домашнее задание к лекции 3.1 «Классы и объекты»</title>
</head>
<body style="width: 700px; margin: 0 auto;">
<p>Инкапсуляция – первый и базовый принцип ООП, все объекты базируются на этом принципе. Это механизм, объединяющий данные и обрабатывающий их код как единое целое.
    Включение мелких элементов в более крупный объект, в результате чего программист работает непосредственно с этим объектом,
    что приводит к упрощению программы, поскольку из нее исключаются второстепенные детали. Данная возможность обеспечивается классами и объектами, а также методами.</p>
<p>Плюсы ООП: ООП является стандартом; Объекты соотносятся с реальным миром;
    Более читабельный и чистый код.
    Любая сложная система без объектов трудно поддерживаемый код (спагетти-код).</p>
    <p>Минусы: Снижение быстродействия за счет более сложной организации программной системы;
    Разработка и документирование классов - задача более трудная, чем это было в случае процедур и модулей;
    В сложных иерархиях классов поля и методы обычно наследуются с разных уровней.
    И не всегда легко определить, какие поля и методы фактически относятся к данному классу.</p>
</body>
</html>