<?php 
// Con factory
class automovilFactory{
    private static $model=2024;

    public static function create($make)
    {
        return new automovil($make, self::$model);
    }
}


$a=automovilFactory::create('Toyota');


// SIn factory
class automovil{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

$b= new automovil('Toyota',2024);