<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。





// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー

$car1 = new Car('ランクル', 100, 'black');

class Car{

    public $name;
    public $number;
    public $color;

// 車名(車種)を取得

public function __construct($name,$color,$number)
    {
        $this->name = $name;
        $this->color = $color;
        $this->number = $number;
    }

public function getName()
{
    return $this->name;
}

public function getNumber()
{
        return $this->number;
}

public function getColor()
{
    return $this->color;
}

public function setName($name)
{
    $this->name = $name;
}
public function setNumber($number)
{
    $this->number = $number;
}
public function setColor($color)
{
    $this->color = $color;
}
public function infomation()
{
    echo '車の車種'. $this->name.'、車体番号'.$this->number.'、カラー:'.$this->color.'です。';
}
}
class Taxi extends Car{
    public $pickUp;
    public $passenger;
public function pickUp($pickUp)
{
    $this->pickUp = $pickUp;
    $this->passenger += $pickUp;
}
public function lower($lower)
{
    $this->passenger -= $lower;
    if ($this->passenger < 0) {
        echo '降車人数に誤りがあります';
    }else{
        $this->pickUp - $lower;
        echo $lower.'人降車しました。';
    }
}
public function infomation()
{
        echo '車の車種'. $this->name.'、車体番号'.$this->number.'、カラー:'.$this->color.'、乗車人数は'.
    $this->pickUp .'です。';
}
}
// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);

