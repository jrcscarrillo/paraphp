<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of traits
 *
 * @author jrcsc
 */
class traits {
    //put your code here
}
 class Base {
   public function sayHello() {
     echo 'Hello ';
   }
 }
 
 trait SayWorld {
   public function sayHello() {
     parent::sayHello();
     echo 'World!';
   }
 }
 
 class MyHelloWorld extends Base {
   use SayWorld;
 }
 
 $o = new MyHelloWorld();
 $o->sayHello(); // echos Hello World!
 
 trait TSingleton
{
    private static $_instance = null;

    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}

class FrontController
{
    use TSingleton;
}

// Can also be used in already extended classes
class WebSite extends SomeClass
{
    use TSingleton;
}

trait TBounding
{
    public $x, $y, $width, $height;
}

trait TMoveable
{
    public function moveTo($x, $y)
    {
        // ...
    }
}

trait TResizeable
{
    public function resize($newWidth, $newHeight)
    {
        // ...
    }
}

class Rectangle
{
    use TBounding, TMoveable, TResizeable;

    public function fillColor($color)
    {
        // ...
    }
}