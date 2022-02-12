<?php

namespace foudreIOX;

use foudreIOX\Events\ChatEvent;
use pocketmine\plugin\PluginBase;

class Nchat extends PluginBase
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new ChatEvent(), $this);
    }
}