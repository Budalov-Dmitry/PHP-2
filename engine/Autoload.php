<?php

namespace app\engine;

class Autoload
{


    public function loadClass($className)
    {
        $filename = str_replace('app\\','../', $className) . ".php";
        $filename = str_replace('\\', '/', $filename);
        if (file_exists($filename)) {
            include $filename;
        }

    }
}