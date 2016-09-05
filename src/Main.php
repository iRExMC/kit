<?php

namespace GroupsKits;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\inventory\InventoryBase;
use pocketmine\item\Item;
use pocketmine\permission\Permission;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\particle\HeartParticle;
use pocketmine\level\particle\SmokeParticle;

class Main extends PluginBase{
	
	
	public function onEnable(){
		$this->getServer()->getLogger()->info(Color::GREEN."[GroupsKits] Plugin Has Been Enabled");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info(Color::RED."[GroupsKits] Plugin Has Been Disabled");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'kitvip':
				if($sender->hasPermission("groupskits.kitvip")){
					$sender->sendMessage(Color::AQUA."You Have A VIP Kit");
					$sender->getInventory()->setHelmet(item::get(310, 0, 1));
					$sender->getInventory()->setChestplate(item::get(311, 0, 1));
					$sender->getInventory()->setLeggings(item::get(312, 0, 1));
					$sender->getInventory()->setBoots(item::get(313, 0, 1));
					$sender->getInventory()->additem(item::get(276, 0, 1));
					$sender->getInventory()->additem(item::get(364, 0, 64));
					$sender->getInventory()->additem(item::get(261, 0, 1));
					$sender->getInventory()->additem(item::get(262, 0, 1));
					$sender->getLevel()->addSound(new AnvilUseSound($sender));
					$sender->getLevel(5)->addParticle(new FlameParticle($sender));
				} else {
					
					$sender->sendMessage(Color::RED."You Not VIP");
				}
				break;
			case 'kityt':
				if($sender->hasPermission("groupskits.kityt")){
					$sender->sendMessage(Color::YELLOW."You Have A YouTuber Kit");
					$sender->getInventory()->setHelmet(item::get(306, 0, 1));
					$sender->getInventory()->setChestplate(item::get(307, 0, 1));
					$sender->getInventory()->setLeggings(item::get(308, 0, 1));
					$sender->getInventory()->setBoots(item::get(309, 0, 1));
					$sender->getInventory()->additem(item::get(267, 0, 1));
					$sender->getInventory()->additem(item::get(366, 0, 64));
					$sender->getInventory()->additem(item::get(261, 0, 1));
					$sender->getInventory()->additem(item::get(262, 0, 1));
					$sender->getLevel()->addSound(new AnvilUseSound($sender));
					$sender->getLevel(5)->addParticle(new SmokeParticle($sender));
				} else {
					
					$sender->sendMessage(Color::RED."You Not YouTuber");
				}
				break;
			case 'kitplayer':
				if($sender->hasPermission("groupskits.kitplayer")){
					$sender->sendMessage(Color::GREEN."You Have A Player Kit");
					$sender->getInventory()->setHelmet(item::get(314, 0, 1));
					$sender->getInventory()->setChestplate(item::get(315, 0, 1));
					$sender->getInventory()->setLeggings(item::get(316, 0, 1));
					$sender->getInventory()->setBoots(item::get(317, 0, 1));
					$sender->getInventory()->additem(item::get(272, 0, 1));
					$sender->getInventory()->additem(item::get(apple, 0, 64));
					$sender->getLevel()->addSound(new AnvilUseSound($sender));
					$sender->getLevel(5)->addParticle(new HeartParticle($sender));
				}
		}
	}
}
