<?php

namespace Rafael\Cart\Tests;

use Rafael\Cart\CsvFileIterator;

class ProviderTests extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 2)
        );
    }

    /**
     * @dataProvider discountProvider
     */
    public function testCalcDiscount($price, $discount, $expected)
    {
        $this->assertEquals($expected, $price - ($price * ($discount / 100)));
    }

    public function discountProvider()
    {
        return new CsvFileIterator('tests/products.csv');
    }
}

?>
