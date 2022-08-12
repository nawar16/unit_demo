<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CheckoutService;


class CheckoutTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_checkout1()
    {
        $pricing_rules = [
            'CF1' => ['get_one_free', 3, 2],
            'SR1' => ['bulk_discount', 3, 4.5]
        ];
        $co = new CheckoutService($pricing_rules);
        $co->scan('SR1');
        $co->scan('CF1');
        $this->assertEquals(3, $co->total);
    }
}
