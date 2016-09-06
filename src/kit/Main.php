<?php

namespace kit

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

public function onEnabled(){
$this->getServer()->getLogger()->info(Color::GREEN."[kit] Plugin Has Been Enabled");

