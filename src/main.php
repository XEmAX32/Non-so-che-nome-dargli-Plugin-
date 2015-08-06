<?php

namespace: 
  
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerSpawnEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;

class TEST extends PluginBase{

public function $event OnPlayerSpawn(PlayerSpawnEvent)
$sender->SendMessage(TextFormat::GREEN "[+]") $this GetPlayer->GetName(). (TextFormat::GREEN. " ");

public function $event OnPlayerQuit(PlayerQuitEvent)
$sender->SendMessage(TextFormat::RED "[-]") $this GetPlayer->GetName(). (TextFormat::RED. " ");

public function $event OnPlayerJoin(PlayerJoinEvent)
$this getConfig()->get("Message") §player->sendMessage(TextFormat::BLUE " ");
}
