<?php

namespace Rafael\Cart\Tests;

use Rafael\Cart\Entities\Product;
use Rafael\Cart\Cart;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function testProductList()
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10.00);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20.00);

        $products = new \ArrayObject([$product, $product2]);

        $cart = new Cart();
        $cart->addProduct($product);
        $cart->addProduct($product2);

        $this->assertEquals($products, $cart->getProducts());
    }

    public function testGetTotal()
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10.00);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20.00);

        $products = new \ArrayObject([$product, $product2]);

        $cart = new Cart();
        $cart->addProduct($product);
        $cart->addProduct($product2);

        $total = 30;
        $this->assertEquals($total, $cart->getTotal());
    }


}

?>
