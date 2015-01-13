<?php namespace Petja\Test;

use Form, Config;


class FormField {

    protected static $instance;

    public static function make($name = false, array $args = null)
    {

        $msg = Config::get('Test::msg');

        echo '<b style="color: red;">Test</b> <i>'.$msg.'</i>';

    }

}