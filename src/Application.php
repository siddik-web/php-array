<?php
namespace App;

final class Application
{
    private static $application;

    private static $name;

    final private function __construct(){}

    public static function getApplication()
    {
        if (!empty(self::$application))
        {
            return self::$application;
        }

        return self::$application = new Application();
    }

    public static function getName()
    {
        echo self::$name;
    }

    public static function setName($name)
    {
        self::$name = $name;
    }

    public static function addItem($data)
    {
        $array = [];

        $array[] = $data;

        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}