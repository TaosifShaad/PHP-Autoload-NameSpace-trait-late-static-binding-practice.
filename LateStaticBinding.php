<?php

class ParentClass
{
    public static string $str = 'Speaking from Parent';

    public static function where() {
        echo static::$str;
    }

    public static function runWhere() {
        self::where();
    }
}

class ChildClass extends ParentClass
{
    public static string $str = 'Speaking from child';

    public static function where() {
        echo static::$str;
    }
}

(new ChildClass())->runWhere();
