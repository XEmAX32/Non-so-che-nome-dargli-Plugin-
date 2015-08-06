<?php
//promemoria finire, inserire namespace, inserire ultime funzioni chiudere le graffe

namespace: 
  
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerSpawnEvent;
use pocketmine\event\player\PlayerQuitEvent;

class TEST extends PluginBase{

public function $event OnPlayerSpawn(PlayerSpawnEvent)
$sender->SendMessage(TextFormat::GREEN "[+]") $this GetPlayer->GetName(). (TextFormat::GREEN. " ");

public function $event OnPlayerQuit(PlayerQuitEvent)
$sender->SendMessage(TextFormat::RED "[-]") $this GetPlayer->GetName(). (TextFormat::RED. " ");
