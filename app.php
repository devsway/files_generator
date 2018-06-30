<?php
require_once("package/app_yml.php");
require_once("package/folder.php");
require_once("util/util.php");

$targetFile = "./config/design.yml";
$handle = fopen($targetFile, "r");
$contents_yml = fread($handle, filesize($targetFile));
$ymlHandler = new app_yml($contents_yml);
$root_dir = $ymlHandler->getRootDir();

$fullStructure = [];
$items = $ymlHandler->getOnlyDir();
foreach ($items[0] as $one) {
    foreach ($items[1] as $two) {
        foreach ($items[2] as $three) {
            util::superMkdir($root_dir, $one, $two, $three);
            foreach ($ymlHandler->getFile() as $file) {
                touch($root_dir."/".$one."/".$two."/".$three."/".$file);
            }
        }
    }
}
