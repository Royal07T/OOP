<?php 

class product
{
    public $color;
    public $name;
    public $price ;

    public function priceCurrency($divisor ,$currencySymbol = '₤') 
    {
        $priceCurrency = $this->price / $divisor;
        return $currencySymbol. $priceCurrency;
    }


    

}


$product = new product();
$product->price = 570;
$product->name = 'Cliper';
$product->color = "Brown";
print $product->priceCurrency(100) . "<br>";
print $product->name. '<br>';
print $product->color . PHP_EOL."<br>";

