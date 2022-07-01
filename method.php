
<?php

abstract class Transfer
{
    abstract public function SelectVehicle($cars);

    public function transfer($cars){
        $order = $this->SelectVehicle($cars);
    }
}

class Economy extends Transfer
{
    private int $price;
    private string $brand;

    public function __construct($price, $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function SelectVehicle($cars)
    {
        return new Economy($this->price, $this->brand);
    }
}

class Standard extends Transfer
{
    private int $price;
    private string $brand;

    public function __construct($price, $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function SelectVehicle($cars)
    {
        return new Standard($this->price, $this->brand);
    }
}

class Luxury extends Transfer
{
    private int $price;
    private string $brand;

    public function __construct($price, $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function SelectVehicle($cars)
    {
        return new Luxury($this->price, $this->brand);
    }
}

interface OrderComplete
{
    public function order();
}

class Economy implements OrderComplete
{
    public function order()
    {
        return "{Complete the order}";
    }
}
class Standard implements OrderComplete
{
    public function order()
    {
        return "{Complete the order}";
    }
}
class Luxury implements OrderComplete
{
    public function order()
    {
        return "{Complete the order}";
    }
}

function clientCode(Transfer $cars)
{
    $cars->SelectVehicle($cars);

clientCode(new Economy());
clientCode(new Standard());
clientCode(new Luxury());

