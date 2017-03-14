<?php

class BirdRun{
    private $bird;
    public function __construct(Bird $bird)
    {
        $this ->bird = $bird;
    }

    public function run(){
        $flySpeed = $this ->bird->fly();
    }
}
/*не нарушаем LSP*/
class Duck extends Bird{

    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim(){
        $swimSpeed = 2;
        return $swimSpeed;

    }

}


/*нарушаем LSP*/
class Penguin extends Bird{
    public function fly()
    {
        return 'i can`t fly ((((';
    }

    public function swim(){
        $swimSpeed = 4;
        return $swimSpeed;
    }
}