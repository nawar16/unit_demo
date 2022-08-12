<?php



namespace App\Services;


class CheckoutService
{

    private $pricing_rules;
    public $total;


    public function __construct($pricing_rules)
    {
        $this->pricing_rules = $pricing_rules;
    }

    public function scan(String $item)
    {
        $rule = $this->pricing_rules[$item];
      
        $this->total += $this->{$rule[0]}($rule[1], $rule[2]);
    }

    private function getTotal()
    {
        info('(--------------);');
        return $this->total;
    }

    private function get_one_free()
    {
        return 1;
    }
    private function bulk_discount($rule1, $rule2)
    {
        return 2;
    }
}
