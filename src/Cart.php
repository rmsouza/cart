<?php
namespace Rafael\Cart;

use Rafael\Cart\Entities\ProductInterface;

class Cart
{
    protected $products;

    public function __construct() {
        $this->products = new \ArrayObject();
    }

    public function addProduct(ProductInterface $product)
    {
        $this->products->append($product);
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product)
            $total += $product->getPrice();
        return $total;
    }
}

?>
