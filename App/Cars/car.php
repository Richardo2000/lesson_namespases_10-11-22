<?php

namespace App\Cars;
class Car extends Details
{
protected $model;
protected $year;
protected $hp;
public function __construct($model, $year, $hp)
{
    $this->model = $model;
    $this->year = $year;
    $this->hp = $hp;
}
public function show()
{
   $price = $this->price();
    echo "
    <div style='...'>
    <h2>Модель: $this->model</h2>
    <p>Год производства: $this->year</p>
    <p>Кол-во лошадиных сил: $this->hp</p>
    <p>Примерная стоимость на рынке: $price</p>
    </div>
    ";

}
}