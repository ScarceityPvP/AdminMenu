<?php

namespace Scarce\AdminMenu;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{

    public static $instance;

    public function onEnable()
    {
        self::$instance = $this;
    }

    public static function getInstance(){
        return self::$instance;
    }

}