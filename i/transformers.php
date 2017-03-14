<?php

class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer {
    public function toCar()
    {
        echo 'transform to car';
    }

    public function toPlane()
    {
        echo 'transform to plane';
    }

    public function toShip()
    {
        echo 'transform to ship';
    }
}

class CarTransformer implements ICarTransformer {

    public function toCar()
    {
        echo 'transform to car';
    }

}