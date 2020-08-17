<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
interface Additions {
    public function getPrice();
}

class Cafe {
    const PRICE = 10;
    private $additions = [];

    public function total() {
        $totalPrice = self::PRICE;
        foreach($this->additions as $value) {
            $totalPrice += $value->getPrice();
        }

        return $totalPrice;
    }

    public function add($addition) {
        if($addition instanceof Additions){
            array_push($this->additions, $addition);
        }

    }
}

class Milk implements Additions {
    public function getPrice() {
        return 2;
    }

}

class Sugar implements Additions {
    public function getPrice() {
        return 0.5;
    }

}

class Glass {

}

$myCafe = new Cafe();
$myCafe->add(new Milk);
$myCafe->add(new Sugar);
$myCafe->add(new Glass);
echo 'Полная стоимость напитка:' . $myCafe->total();

