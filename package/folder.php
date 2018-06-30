<?php

/**
 * 仮想のフォルダクラス
 *
 * Class folder
 */
Class folder
{

    private $folder_name;
    private $files = [];

    public function __construct($folder_name)
    {
        $this->folder_name = $folder_name;
    }

    public function getName(){
        return $this->folder_name;
    }

    public function AddFiles(array $files){
        foreach ($files as $file){
            $this->files[]= $file;
        }
    }

    public function AddFolder(array $files){
        foreach ($files as $file){
            $this->files[]= $file;
        }
    }

}