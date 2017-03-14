<?php

/*I - Принцип разделения интерфейса*/
interface ICarTransformer{
    public function toCar();
}
interface IPlaneTransformer{
    public function toPlane();
}
interface IShipTransformer{
    public function toShip();
}