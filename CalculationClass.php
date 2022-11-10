<?php

class CalculationClass
{
    /**
     * 消費税の計算を行うメソッド
     * @param int $price
     * @return int
     */
    public function taxCalculation($price)
    {
        return (int)round($price * 1.05);
    }
}
