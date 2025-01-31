<?php

namespace JuustMarwan\UnicodesAPI;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\Plugin;
use pocketmine\utils\TextFormat;

use JuustMarwan\UnicodesAPI\Base;

class ChatListener implements Listener {
  
    public function getOwningPlugin(): Plugin {
      
        return Base::getInstance();
    }
  
  
    public function onChat(PlayerChatEvent $event): void {
      
        $player = $event->getPlayer();
        $originalMessage = $event->getMessage();

        if(Base::$autoReplacing) {
          
            $newMessage = Base::replace($originalMessage);
            $event->setMessage($newMessage);
          
        }
    }
}
