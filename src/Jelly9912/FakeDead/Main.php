<?php

namespace Jelly9912\FakeDead;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Random;


class Main extends PluginBase implements Listener {

public function onEnable(){
 $this->getLogger()->info(TextFormat::GREEN . "FakeDead has been enabled");
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }
 
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		if(strtolower($command->getName()) == "fd"){
		if(!(isset($args[0]))){
		$sender->sendMessage(TextFormat::GOLD . "[FakeDead] " . TextFormat::YELLOW . "Use /fd <player>");
		return true;
			}elseif(isset($args[0])){
			if($sender->hasPermission("fakedead.command")){
			switch(mt_rand(1, 13)){
     case 1:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " died");
         break;
     case 2:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " drowned");
         break;
     case 3:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " fell out of the world");
         break;
     case 4:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " fell from a high place");
         break;
     case 5:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " was died by void");
         break;
     case 6:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " suffocated in a wall");
         break;
     case 7:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " tried to swim in lava");
         break;
     case 8:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " went up in flames");
         break;
     case 9:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " burned to death");
         break;
     case 10:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " was pricked to death");
         break;
     case 11:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " blew up");
         break;
     case 12:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " was killed by magic");
         break;
     case 13:
         $this->getServer()->getInstance()->broadcastMessage($args[0] . " hit the ground too hard");
         break;
       }
					}else{
					$sender->sendMessage(TextFormat::RED . "You do not have permission to use this command");
     }
				}
			}
		}
	}
