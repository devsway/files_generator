<?php
require "yml.php";

Class app_yml extends yml
{

    public function getRootDir()
    {
        return $this->getArray()['root_dir'];
    }

    public function getDirDesign()
    {
        //todo:ここをいい感じに
        return $this->getArray()['design'];
    }

    public function getOnlyDir()
    {
        $tmp = $this->getArray()['design'];
        unset($tmp['files']);
        return $tmp;
    }

    public function hierarchySize()
    {
        var_dump(count($this->getOnlyDir()));
    }

    public function getFile()
    {
        return $this->getArray()['design']['files'];
    }

    /**
     * 設計図を元に実際の形のオブジェクトを作る
     *
     * @param $design_arr
     */
    private function createDirDesign($design_arr)
    {
        foreach ($this->getArray()['design']['top_dirs'] as $dir) {

        }
    }
}