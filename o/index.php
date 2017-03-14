<?php
/*
 * O - Принцип открытости / закрытости
 * Open/closed principe
 * */
$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);