<?php

namespace Rafael\Cart\Tests;

use Rafael\Cart\Entities\Product;
use Rafael\Cart\Cart;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function testAddProduct() {
        $product = new Product();
        $product->setName("Product");
        $product->setDescription("Desc");
        $product->setPrice(10.00);

        $cart = new Cart();
        $cart->addProduct($product);

        $products = $cart->getProducts();
        $first_product = $products->offsetGet(0);

        $this->assertEquals($first_product, $product);

        return $product;
    }

    /**
     * @depends testAddProduct
     */
    public function testProductList(Product $product)
    {
        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20.00);

        $products = new \ArrayObject([$product, $product2]);

        $cart = new Cart();
        $cart->addProduct($product);
        $cart->addProduct($product2);

        $this->assertEquals($products, $cart->getProducts());

        return $cart;
    }

    /**
     * @depends testProductList
     * @depends testAddProduct
     */
    public function testGetTotal(Cart $cart, Product $product)
    {
        $total = 30;
        $this->assertEquals($total, $cart->getTotal());
        $this->assertEquals(10, $product->getPrice());
    }

}

?>
