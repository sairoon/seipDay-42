<?php


namespace App\classes;


class Addess
{
    public $presentAddress = 'Dhake';
    protected $permanentAddress = 'Faridpur';
    private $gfAddress = 'idk';
    protected $address = 'BITM';

    public function one(){
        echo 'This is One';
    }
    protected function two(){
        echo 'This is Two';
    }
    private function three(){
        echo 'This is Three';
    }
}