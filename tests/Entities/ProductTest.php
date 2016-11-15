<?php

namespace Rafael\Cart\Tests\Entities;

use Rafael\Cart\Entities\Product;
use Rafael\Cart\Entities\ProductInterface;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testProductType()
    {
        $product = new Product();
        $this->assertInstanceOf(ProductInterface::class, $product);
    }

    public function testProductName()
    {
        echo "Test 1";
        $product = new Product();
        $product->setName("Product 1");

        $this->assertEquals("Product 1", $product->getName());
    }

    public function testDescriptionValue()
    {
        echo "Test 2";
        $product = new Product();
        $product->setDescription("Product description 1");

        $this->assertEquals("Product description 1", $product->getDescription());
    }

    public function testPriceValue()
    {
        echo "Test 3";
        $product = new Product();
        $product->setPrice(10.00);

        $this->assertEquals(10.00, $product->getPrice());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testPriceValueWhenANotNumericGiven()
    {
        echo "Test 4";
        $product = new Product();
        $product->setPrice("adfadf");
    }
}

?>
