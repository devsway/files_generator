<?php

Class util
{
    private function __construct()
    {
        //Do not create instance
    }

    static function superMkdir()
    {
        $args = func_get_args();
        if (empty($args)) return false;

        $result = "";
        foreach ($args as $arg) {
            $result .= $arg."/";
        }
        mkdir($result,0777, ture);
    }

}