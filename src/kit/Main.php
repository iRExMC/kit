<?php

namespace kit

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

public function onEnabled(){
$this->getServer()->getLogger()->info(Color::GREEN."[kit] Plugin Has Been Enabled");
}
public function onDisable(){
$this->getServer()->getLogger()->info(Color::RED."[GroupsKits] Plugin Has Been Disabled");
}
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
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
