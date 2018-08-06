<?php

namespace JOrlex\smc;

use pocketmine\plugin\Pluginbase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends Pluginbase {

    public function onEnable(){
            $this->getLogger()->info("onEnable() has been called");
            foreach(Server::getInstance()->getOnlinePlayers() as $player){
                    $this->playerList[$player->getName()] = $this->getPlayerData($player);
            }
    }

    public function onDisable(){
            $this->getLogger()->info("onDisable() has been called");
    }
}
