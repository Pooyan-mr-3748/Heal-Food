<?php

namespace Pooyan3748\heal;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\event\Listener;


class Main extends PluginBase implements Listener {
    public function onEnable() : void {
    	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN ."on plugin");
    }


    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command->getName() == "heal") {
            if ($sender instanceof Player) {
                $sender->setHealth(20);
                $sender->sendMessage("your health is full");
            }
        }


        if ($command->getName() == "food") {
            if ($sender instanceof Player) {
                $sender->getHungerManager()->setFood(20);
                $sender->sendMessage("your food is fulll");
            }
        }

        return false;
    }

public function onDisable() : void {
        $this->getLogger()->info(TextFormat::RED ."off Plugin");
    }
}