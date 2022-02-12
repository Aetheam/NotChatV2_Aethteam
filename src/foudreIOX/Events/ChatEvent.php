<?php

namespace foudreIOX\Events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Server;

class ChatEvent implements Listener
{
    public function chat(PlayerChatEvent $event)
    {
        Server::getInstance()->broadcastMessage("§f[§e!§f] §4You can't use §eChat §f[§e!§f]");
        $event->cancel();
    }
}