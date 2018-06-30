<?php
require "vendor/autoload.php";

Class Yml
{
    protected $ymlFile;

    public function __construct($yml_file_string)
    {
        $this->ymlFile = \Symfony\Component\Yaml\Yaml::parse($yml_file_string);
    }

    public function getArray(){
        return $this->ymlFile;
    }

}