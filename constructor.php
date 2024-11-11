<?php 
class car
{

    public function __construct(public $name,public $color,public $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function priceCurrency($divisor ,$currencySymbol = '₤') 
    {
        $priceCurrency = $this->price / $divisor;
        return $currencySymbol. $priceCurrency;
    }

}

$car =new car('black','Mustang',40000);
print $car->name . PHP_EOL;
print $car->color . PHP_EOL;
print $car->price . PHP_EOL;