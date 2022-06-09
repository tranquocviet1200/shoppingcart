<?php
namespace App;
class Cart{
    public $products = null;
    public $toltalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->toltalPrice = $cart->toltalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function addCart($product, $id)
    {
        $newProduct = ['quanty' => 0,'price' => $product->price, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products )){
                $newProduct = $this->products[$id];
            }
        }

        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->toltalPrice += $product->price;
        $this->totalQuanty++;
        
    }
}
?>