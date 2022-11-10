<?php

namespace App\Cars;
class Details extends Tax
{
    protected $model = [
        "BMW" => 5000,
        "Honda" => 3000,
        "Lada" => 1500
    ];
    protected function Price () {
        $price = 0;
        if (!$this->model[$this->model])  {
            return "Модель не найдена";
        }
    $price += $this->models[$this->model];
        if ($this->year >= 2015) $price += 1000;
if ($this->year >= 2000)  && $this->year <2015) $price += 1000;
if ($this->year < 2000) $price += 400;
return $price;

}