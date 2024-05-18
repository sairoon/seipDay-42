<?php

namespace App\classes;

use App\classes\Addess;
use App\classes\Example;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;

class Home extends ExampleThree implements Example, ExampleTwo
{
    use ExampleFive; //trait class

    public $name;
    protected $mobile;
    private $password;
    public $address;

    private static $brand = 'BITM';

    public function __construct()
    {
        $this->name = 'Alu';
        $this->mobile = '12345678';
        $this->password = 'abcd';
        $this->address = 'BASIS';

    }
    public function five()
    {
//        echo 'Hi Five..';
        parent::six();
//        $this->five();
    }

    public static function four(){
        echo 'Hi Dude!!';
    }
    public function exampleOne(){
        // TODO: Implement exampleOne() method.
        echo 'hi dude!!';
    }
    public function exampleTwo(){
        echo 'hello dude';
    }
    public function exampleThree()
    {
        // TODO: Implement exampleThree() method.
        echo 'ewww dude';
    }

    public static function  name(){
        /*echo 'Alu Mia';
        $this->mobile();
        $address = new Addess();
        echo $address->one();
        echo $address->two();
        echo $address->three();
        echo $this->address;*/
        echo self::$brand;
    }

    protected function mobile(){
        /*echo '0123456789';
        $this->password();*/

    }

    private function password(){
        echo 'abcde';
    }


    public function index(){
        header('Location: route.php?page=home');
    }
}
