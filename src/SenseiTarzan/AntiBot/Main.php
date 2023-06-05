<?php

namespace SenseiTarzan\AntiBot;

use pocketmine\plugin\PluginBase;
use SenseiTarzan\AntiBot\Listener\BlackListListener;
use SenseiTarzan\AntiBot\libs\SenseiTarzan\ExtraEvent\Component\EventLoader;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        EventLoader::loadEventWithClass($this, BlackListListener::class);
    }

}