<?php
/*
* D - Принцип инверсии зависимостей
* */

class lowRankingMale{
    public function eat(){
        $wife = new Wife();
        $food = $wife->getFood();
    }
}

class averageRankingMale{
    private $wife;

    public function __construct(Wife $wife)
    {
        $this -> wife = $wife;
    }

    public function eat(){
        $food = $this -> wife -> getFood();
    }
}

class highRankingMale {
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
        $this -> foodProvider = $foodProvider;
    }

    public function eat(){
        $food = $this -> foodProvider -> getFood();
    }
}